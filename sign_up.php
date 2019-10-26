<?php include 'assets/conn/dbconnect.php'; ?>
<?php
if (isset($_POST['signup'])) {
$patientFirstName = mysqli_real_escape_string($con,$_POST['patientFirstName']);
$patientLastName  = mysqli_real_escape_string($con,$_POST['patientLastName']);
$patientEmail     = mysqli_real_escape_string($con,$_POST['patientEmail']);
$icPatient     = mysqli_real_escape_string($con,$_POST['icPatient']);
$Username     = mysqli_real_escape_string($con,$_POST['Username']);
$password         = mysqli_real_escape_string($con,$_POST['password']);
$month            = mysqli_real_escape_string($con,$_POST['month']);
$day              = mysqli_real_escape_string($con,$_POST['day']);
$year             = mysqli_real_escape_string($con,$_POST['year']);
$patientDOB       = $year . "-" . $month . "-" . $day;
$patientGender = mysqli_real_escape_string($con,$_POST['patientGender']);
$registerDate = date('y-m-d h:i:s');
$status = "unread";
//SELECT
$user_check_query = "SELECT * FROM patient WHERE icPatient = '$icPatient' OR Username = '$Username' OR patientEmail = '$patientEmail' ";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);
if($user){
  if (($user ['icPatient'] === $icPatient && $user ['Username'] === $Username) &&( $user ['patientEmail'] === $patientEmail)) {
        ?>
        <script>
        alert('Email, username and icPatient are already Exist.');
        </script>
        <?php
  }

      else if ($user['icPatient'] === $icPatient && ($user ['Username'] === $Username)){
  ?>
  <script type="text/javascript">
  alert('The icPatient and username Already Exist');
  </script>
  <?php
  }
  else if (($user['icPatient'] === $icPatient) && ($user ['patientEmail'] === $patientEmail)){
   ?>
      <script type="text/javascript">
        alert('The icPatient and Email Already Exist');
      </script>
      <?php
      }

    else if (($user['Username'] === $Username) && ($user ['patientEmail'] === $patientEmail)){
?>
<script type="text/javascript">
alert('The Email and username Already Exist');
</script>
<?php
}

    else if ($user ['patientEmail'] === $patientEmail){
        ?>
        <script>
        alert('Email Already Exist.');
        </script>
        <?php
    }
    else if ($user ['icPatient'] === $icPatient){
        ?>
        <script>
        alert('icPatient Already Exist.');
        </script>
        <?php
}
    else if ($user ['Username'] === $Username){
        ?>
        <script>
        alert('Username Already Exist.');
        </script>
        <?php
    }
}
                if(!$user){
                $query =  "INSERT INTO patient ( icPatient, Username, password, patientFirstName, patientLastName,  patientDOB, patientGender,   patientEmail, status, registerDate)
                 VALUES ( '$icPatient','$Username', '$password', '$patientFirstName', '$patientLastName', '$patientDOB', '$patientGender', '$patientEmail','$status', CURRENT_TIMESTAMP) ";
                $result = mysqli_query($con, $query);
                 if( $result ){
            ?>
        <script type="text/javascript">
            alert('Register success. Please Login to make an appointment.');
        </script>
        <?php
        }
    }
        }
?>
