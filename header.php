<?php include 'adminlogin.php'; ?>
<?php include 'stafflogin.php'; ?>
<?php include 'login.php'; ?>

<?php include 'doctorinfo.php'; ?>
<?php include 'sign_up.php';  ?>
      <?php include 'signup.php'; ?>
      <?php include 'forgotpassword.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Galvez Dental Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Galvez <span>Dental Clinic</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="dropdown nav-item cta">
                            <a href="#" class="nav-link" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu" style="border-radius: 30px">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form class="form nav-item" role="form" method="POST" accept-charset="UTF-8" style="margin-right: 10px; margin-left: 10px; border-radius: 20px">
                                                <div class="form-group">
                                                    <label class="sr-only" for="username">Email</label>
                                                    <input type="text" class="form-control" name="username" placeholder="Username / icPatient / Email"style="margin-right: 220px" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="login" id="login" class="btn btn-primary btn-block" style="border-radius: 10px">Sign in</button>
                                                    <li>
                                                         <a href="#" data-toggle = "modal" data-target = "#myPass"> Forgot password? <span style="margin-right: 1em"></a>


                                                    <a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </li></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <div class="modal fade" id="myPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                <div class="modal-dialog" role="document" >
                    <div class="modal-content" style="border-radius : 17px; width: 430px">
                        <!-- modal content -->
                        <div class="modal-header">
                           <h5 class="modal-title"><span style="font-style: Bold">Forgot Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>

                        </div>
                        <!-- modal body start -->
                        <div class="modal-body">

                            <!-- form start -->
                            <div class="container" id="wrap">
                                <div class="row">
                                    <div class="col-md-4">

                                        <form action="forgotpassword.php" method="POST" accept-charset="utf-8" class="form" role="form" style="width: 350px" >
                                            <h5>Input your Email to have a new password</h5>
                                            <div class="row">
                                            </div>
                                            <input type="hidden" name="patientId" value="">
                                            <input type="email" name= "patientEmail" value="" class="form-control input-lg" placeholder="Your Email"  required/>


                                            <br />
                                    <input class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="email" id="email" style="border-radius: 10px" placeholder="CONFIRM">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
