<?php include 'header.php';  ?>
    <!-- END nav -->
    <?php
        include 'assets/conn/dbconnect.php';


        if (isset($_POST['Message'])) {

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $status ="unread";
        $query =  "INSERT INTO information ( Name, Email, Subject, Message, status)
         VALUES ( '$name','$email', '$subject', '$message', '$status') ";
        $result = mysqli_query($con, $query);
         if( $result ){
    ?>
    <script type="text/javascript">
    alert('Your message sent.');
    </script>
    <?php
    }
    }
    ?>
    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span>At (Address:) Unit 4 Shopwise Molino road, Molino 4 Bacoor, Cavite(beside SM Molino)</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://(046)4843217">(046) 484 3217</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">GalvezDentalClinic@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">GalvezDentalClinic.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="contact.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="Message" class="btn btn-primary py-3 px-5">Send Message</buton>
              </div>
            </form>
          </div>

          <div class="col-md-6" id="map"></div>
        </div>    <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>

  <?php include 'footer.php'; ?>
