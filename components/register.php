<?php
  require "connect.php";
  $d = $_SESSION['member_input'];
  $t = $_SESSION['transaction'];

  // insert values to db

  $sql_m_grp = $conn-> query("INSERT INTO `table_members`
  (`m_id`, `mem_title`, `mem_surname`, `mem_name`, `mem_co`, `mem_coname`, `mem_dob`, `mem_occupation`,
   `mem_department`, `mem_org`, `mem_flatno`, `mem_add1`, `mem_locality`, `mem_city`, `mem_state`,
    `mem_zipcode`, `mem_country`, `mem_phone1`, `mem_phone2`, `mem_email`, `mem_whatsapp`, `mem_reason`,
     `mem_reference`, `mem_volunteer`, `razorpay_order_id`, `razorpay_payment_id`, `tran_status`) VALUES 
  ('".$d['chooseMemship']."', '".$d['memtitle']."', '".$d['lname']."', '".$d['fname']."',
   '".$d['co']."', '".$d['coname']."', '".$d['dob']."', '".$d['occupation']."', '".$d['department']."',
    '".$d['organization']."', '".$d['houseno']."', '".$d['street1']."', '".$d['locality']."', '".$d['towncity']."', 
    '".$d['state']."', '".$d['pincode']."','".$d['country']."', '".$d['phone1']."', '".$d['phone2']."',
     '".$d['email']."', '".$d['whatsapp']."', '".$d['reason']."', '".$d['reference']."',
      '".$d['volunteer']."', '".$t['razorpay_order_id']."', '".$t['razorpay_payment_id']."', '".$t['tran_status']."')")
  or die(mysqli_error($conn));

  mysqli_close($conn);

?>