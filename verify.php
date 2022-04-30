<?php

require('config.php');
session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );
        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

$transact_details = array(
    'razorpay_order_id' => $_SESSION['razorpay_order_id'],
    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
    'tran_status' => $success ? 'success' : 'failed'
);

$_SESSION['transaction'] = $transact_details;

include 'components/register.php';

include_once 'components/header.php';
if ($success === true)
{

?>
    <div class="card border-0 shadow br-16 col-md-5 px-3 py-5 mx-auto my-5">
        <h2 class="text-success">Your payment was successful</h2>
        <p class="fs-14">your payment was successfull. we send dispact your membership card</p>
        <a href="index.php" class="btn bg-danger-1 text-white br-16 px-3 py-2 my-4 text-right">Back to Home</a>
    </div>
<?php
}
else
{
?>
    <div class="card br-16 border-0 shadow col-md-5 px-3 py-5 mx-auto my-3 my-5">
        <h2 class="text-danger">Your payment was unsuccessful</h2>
        <p>your payment was unsuccessful. we resend your money.</p>
        <a href="index.php" class="btn bg-danger-1 text-white br-16 px-3 py-2">Back to Home</a>

    </div>
<?php
}
// include_once 'components/footer.php';
?>
