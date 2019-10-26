<?php include_once 'assets/conn/dbconnect.php'; ?>

<?php
if (isset($_SESSION['employeeSession']) != "") {
    header("Location: staff/staffdashboard.php");
    }
if (isset($_POST['login']))
{
$staff = mysqli_real_escape_string($con,$_POST['username']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM staff WHERE staff = '$staff'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if ($row['password'] == $password)
{
$_SESSION['employeeSession'] = $row['staff'];
?>
  <script type="text/javascript">
  alert('Login Success');
  </script>
  <?php
  header("Location: staff/staffdashboard.php");
}
 else {
?>
<script>
alert('wrong input ');
</script>
<?php
}
}
?>
