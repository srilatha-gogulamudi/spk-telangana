
<?php 
    session_start();
    include_once 'components/header.php';
    // echo json_encode($_POST);
    require('config.php');
    require('razorpay-php/Razorpay.php');
    require('components/membership_list.php');

    // Create the Razorpay Order

    use Razorpay\Api\Api;
    
    $api = new Api($keyId, $keySecret);

    // echo json_encode($_SESSION['member_input']);

    $selected_membership = NULL;
    foreach($membership_list_ungrp as $obj) {
        if ($_POST['chooseMemship'] == $obj['m_id']) {
            $selected_membership = $obj;
            break;
        }
    }
?>

<div class="container">
	<div class="row">		
		<div class="col-sm-12">
			<br><br>
            <div class="col-lg-5 col-md-8 mx-auto">
            <div class="card shadow br-16 p-3">
                <div class="">
                    <p class="fw-500"> <?= ($_POST)['memtitle'],  ($_POST)['fname'], ($_POST)['lname'] ?></p>
                    <p class="font-weight-normal mb-0"><span class="fw-600">Address:</span> <?= ($_POST)['houseno'],  ($_POST)['street1'] ?></p>
                    <p><?= ($_POST)['state'],  ($_POST)['country'] ?></p>
                </div>
                <div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h5 class="pull-right"><?= $selected_membership['m_name'] ?></h5>
						<h4 class="pull-right">₹<?= $selected_membership['m_price'] ?></h4>
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="My Test Product">
						<input type="hidden" name="item_description" value="My Test Product Description">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="49.99">
						<input type="hidden" name="address" value="ABCD Address">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="phpzag">								
						<input type="hidden" name="email" value="test@phpzag.com">	
						<input type="hidden" name="contact" value="9999999999">								
						<!-- <input type="submit" class="btn btn-primary" value="Buy Now">					 -->
					</form>						
				</div>
            </div>
        </div>
			
		</div>
	</div>	
</div>

<?php


$orderData = [
    // 'receipt'         => 3456,
    'amount'          => $selected_membership['m_price'] * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$_SESSION['member_input'] = $_POST;

$key_arr = array("memtitle",  "fname", "lname", "dob" , "occupation", "designation", "department","organization",
"houseno", "street1","street2", "locality", "towncity", "pincode", "state", "country", "email", "phone1",
"phone2","whatsapp", "co", "coname", "reference", "volunteer", "reason");

foreach($key_arr as $value) {
    if (!array_key_exists($value,$_SESSION['member_input'])){
        $_SESSION['member_input'][$value] = null;
    }
}

$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Sphoorthi Kutumbam",
    "description"       => $selected_membership['m_name'],
    "image"             => "../assets/img/ts_logo.png",
    "prefill"           => [
    "name"              => $_POST['fname'] . ' ' . $_POST['lname'],
    "email"             => $_POST['email'],
    "contact"           => $_POST['phone1'],
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#ee1718"
    ],
    "order_id"          => $razorpayOrderId,
];

// echo json_encode($data);
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
