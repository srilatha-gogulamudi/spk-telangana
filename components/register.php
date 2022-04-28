<?php
  require "connect.php";
    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        // echo ($name);
        // if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        //     $name_error = "Name must contain only alphabets and space";
        // }
        // if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        //     $email_error = "Please Enter Valid Email ID";
        // }
        // if(strlen($password) < 6) {
        //     $password_error = "Password must be minimum of 6 characters";
        // }       
        // if(strlen($mobile) < 10) {
        //     $mobile_error = "Mobile number must be minimum of 10 characters";
        // }
        // if($password != $cpassword) {
        //     $cpassword_error = "Password and Confirm Password doesn't match";
        // }
        // if (!$error) {
        //     if(mysqli_query($conn, "INSERT INTO users(name, email, mobile ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
        //      header("location: register.php");
        //      exit();
        //     } else {
        //        echo "Error: " . $sql . "" . mysqli_error($conn);
        //     }
        // }
        
        // INSERT INTO `table_members`(`mem_id`, `m_id`, `mem_doa`, `mem_title`, `mem_surname`, `mem_name`, `mem_co`, `mem_coname`, `mem_dob`, `mem_occupation`, `mem_department`, `mem_org`, `mem_flatno`, `mem_add1`, `mem_locality`, `mem_city`, `mem_state`, `mem_zipcode`, `mem_country`, `mem_phone1`, `mem_phone2`, `mem_email`, `mem_whatsapp`, `mem_reason`, `mem_reference`, `mem_volunteer`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]')
        mysqli_close($conn);
    }
?>