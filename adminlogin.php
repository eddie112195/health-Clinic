<?php include_once 'assets/conn/dbconnect.php'; ?>

<?php
session_start();

      if (isset($_SESSION['doctorSession']) != "") {
            header("Location: doctor/doctordashboard.php");
                }
                  if (isset($_POST['login']))
                    {
                        $doctorId = mysqli_real_escape_string($con,$_POST['username']);
                        $password  = mysqli_real_escape_string($con,$_POST['password']);

                        $res = mysqli_query($con,"SELECT * FROM admin WHERE Username = '$doctorId'");
                        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                        if ($row['password'] == $password)
                        {
                          $_SESSION['doctorSession'] = $row['Username'];
                          ?>
                            <script type="text/javascript">
                            alert('Login Success');
                          </script>
                          <?php
                          header("Location: doctor/doctordashboard.php");
                        } else {
                          ?>
                          <script>
                          alert('wrong input ');
                  </script>
              <?php
            }
        }
?>
