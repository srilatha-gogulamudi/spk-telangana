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

include 'components/register.php';

include_once 'components/header.php';
if ($success === true)
{

?>
    <div class="card border-0 shadow br-16 col-5 px-3 py-5 mx-auto my-5">
        <h2 class="text-success">Your payment was successful</h2>
        <p class="fs-14">your payment was successfull. we send dispact your membership card</p>
    </div>
<?php
}
else
{
?>
    <div class="card br-16 border-0 shadow col-5 px-3 py-5 mx-auto my-3 my-5">
        <h2 class="text-danger">Your payment was unsuccessful</h2>
        <p>your payment was unsuccessful. we resend your money.</p>
    </div>
<?php
}
// include_once 'components/footer.php';
?>
