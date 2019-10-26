<?php include 'assets/conn/dbconnect.php'; ?>

<?php
// session_destroy();
session_start();

      if (isset($_SESSION['patientSession']) != "") {
            header("Location: patient/patient.php");
                }
if (isset($_POST['login']))
{

$username = mysqli_real_escape_string($con,$_POST['username']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM patient WHERE Username = '$username' OR icPatient = '$username' OR patientEmail = '$username'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

if ($row['password'] == $password)
{
$_SESSION['patientSession'] = $row['icPatient'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: patient/patient.php");
} else {
?>
<script>
alert('wrong input ');
header("Location: index.php");
</script>
<?php
}
}
?>
