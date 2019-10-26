<?php
  use PHPMailer\PHPMailer\PHPMailer;

include 'assets/conn/dbconnect.php';
if (isset($_POST['email'])) {

  $patientEmail = mysqli_real_escape_string($con, $_POST['patientEmail']);
  $user_check_query = "SELECT * FROM patient WHERE patientEmail = '$patientEmail' ";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user['patientEmail'] == $patientEmail) {

    $token = "1234567890qwertyuiopasdfghjklzxcvbnm";
    $token = str_shuffle($token);
    $token = substr($token, 0, 10);


    mysqli_query ($con, "UPDATE patient SET token = '$token', tokenExpire = DATE_ADD(NOW(), INTERVAL 5 MINUTE ) WHERE patientEmail = '$patientEmail'");

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $mail -> addAddress($patientEmail);
    $mail ->FROM ="hello@galvezdentalclinic.com";
    $mail -> FromName ="Galvez Dental Clinic";
    $mail -> Subject ="Reset Password";
    $mail -> isHTML(true);
    $mail -> body = "
          Hi, <br><br>
          In order to reset your password, please click on the link below: <br>
         <a href= 'http://localhost/doctors/resetpassword.php?patientEmail=$patientEmail&token=$token'>
         http://localhost/doctors/resetpassword.php?patientEmail=$patientEmail&token=$token</a><br><br>
    ";
    if (!$mail->send()){
    ?>
    <script type="text/javascript">
        alert('Something Wrong');
    </script>
    <?php
  }
    else{
      ?>
      <script type="text/javascript">
          alert('Please Check your email inbox');
      </script>
      <?php
    }
  }
  else {
    ?>
    <script type="text/javascript">
        alert('Email did not exist!');
    </script>
    <?php

  }
}

 ?>


        <?php include_once 'password.php'; ?>
