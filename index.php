<?php include 'header.php'; ?>
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
      <div class="slider-item" style="background-image: url('assets/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Dentistry in a Calm and Relaxed Environment</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A Galvez Dental Clinic flows by their place and supplies it with the necessary regelialia.</p>
              <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" data-toggle="modal" data-target="#myModal"class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('assets/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Achieve Your Desired Perfect Smile</h1>
              <p class="mb-4">A Galvez Dental Clinic flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-6 color-1 p-4">
    				<h3 class="mb-4">Emergency Cases</h3>
    				<p>A Galvez Dental Clinic by their place and supplies</p>
    				<span class="phone-number">+ (123) 456 7890</span>
    			</div>
    			<div class="col-md-6 color-2 p-4">
    				<h3 class="mb-4">Opening Hours</h3>
    				<p class="openinghours d-flex">
    					<span>Mon - Sat</span>
    					<span>9:00 AM - 6:00 PM</span>
    				</p>
            <p class="openinghours d-flex">
    					<span>Sun</span>
    					<span>Day off</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Lunch Break</span>
    					<span>12:00 PM - 1:30 PM</span>
    				</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Service Keeps you Smile</h2>
            <p>A Galvez Dental Clinic by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Teeth Whitening</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Teeth Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Quality Brackets</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-anesthesia"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Modern Anesthetic</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url(assets/images/person_5.png);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
		            <h2 class="mb-2">DentalClinic with a personal touch</h2>
		            <p>A Galvez Dental Clinic by their place and supplies it with the necessary regelialia.</p>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Well Experience Dentist</h3>
	      					<p>Far far away, near in SM MOLINO , far from the countries Manila and Imus City, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Standard Technology Facilities</h3>
	      					<p>Far far away, near in SM MOLINO , far from the countries Manila and Imus City, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Comfortable Clinics</h3>
	      					<p>Far far away, near in SM MOLINO , far from the countries Manila and Imus City, there live the blind texts.</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Dentist</h2>
            <p>Far far away, near in SM MOLINO , far from the countries Manila and Imus City, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">

          <?php
          include 'assets/conn/dbconnect.php';
          $staffId = "";
          $qwer = mysqli_query($con, "SELECT * FROM staff");
          while ($userRows = mysqli_fetch_array($qwer)) {




        	echo "<div class='col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate'>";

        	echo "<div class='staff'>";
      		 echo "<div class='img mb-4' style='background-image: url(doctor/assets/img/".$userRows['staff'].".jpg);'></div>";
      			echo "<div class='info text-center'>";
      				echo "<h3><a href='#'>".$userRows['staffFirstName']." ".$userRows['staffLastName']."</a></h3>";
      				echo "<span class='position'>".$userRows['Position']."</span>";
      				echo "<div class='text'>";
	        			echo	"<p>".$userRows['staffAddress']."</p>";
	        			echo	"<ul class='ftco-social'>";
			            echo  "<li class='ftco-animate'><a href='#'><span class='icon-twitter'></span></a></li>";
			            echo  "<li class='ftco-animate'><a href='#'><span class='icon-facebook'></span></a></li>";
			            echo "<li class='ftco-animate'><a href='#'><span class='icon-instagram'></span></a></li>";
			            echo "<li class='ftco-animate'><a href='#'><span class='icon-google-plus'></span></a></li>";
			         echo "</ul>";
	        	echo "</div>";
      			echo "</div>";
        	echo "</div>";
        echo "</div>";
        }
          ?>

        </div>
        <div class="row  mt-5 justify-conten-center">
        	<div class="col-md-8 ftco-animate">
        		<p>Galvez Dental Clinic is a Dentistry Clinic in Bacoor, Cavite. The clinic is visited by doctors like Dr. Maria Mercedes M. Galvez.</p>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Achievements</h2>
	            <p>A Galvez Dental Clinic by their place and supplies it with the necessary regelialia.</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-9 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>Years of Dental Clinic</span>
		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
	      </div>
    	</div>
    </section>


    <br><br>



		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
            <p>A Galvez Dental Clinic by their place and supplies it with the necessary.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
    				<div class="heading-section heading-section-white mb-5 ftco-animate">
	            <h2 class="mb-2">Dentalclinic Procedure &amp; Standard Quality Services</h2>
	          </div>
	          <div class="ftco-animate">
	          	<p>Galvez Dental Clinic is a Dentistry Clinic in Bacoor, Cavite. The clinic is visited by doctors like Dr. Maria Mercedes M. Galvez . The timings of Galvez Dental Clinic are: Mon-Sat: 09:00-12:00, 13:30-18:00. Some of the services provided by the Clinic are: Orthodontics,Aesthetic Dentistry,Acrylic Partial Denture,Artificial Teeth and artificial teeth etc. Click on map to find directions to reach Galvez Dental Clinic.</p>
	          	<ul class="un-styled my-5">
	          		<li><span class="icon-check"></span></li>
	          		<li><span class="icon-check"></span></li>
	          		<li><span class="icon-check"></span></li>
	          	</ul>
	          </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	            <h2 class="mb-2">Message Us</h2>
	          </div>
	          <form action="index.php" class="ftco-animate" method="post">
	          	<div class="row">
	          		<div class="col-md-6">
		              <div class="form-group">
		                <input type="text" name ="name" class="form-control" placeholder="Full Name">
		              </div>
	              </div>
	              <div class="col-md-6">
		              <div class="form-group">
		                <input type="text" name = "email" class="form-control" placeholder="Email">
		              </div>
	              </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" name = "subject" class="form-control" placeholder="Phone">
		              </div>
		            </div>

		            <div class="col-md-12">
		              <div class="form-group">
		                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <input type="submit" name = "Message" value="Message" class="btn btn-primary py-3 px-5">
		              </div>
	              </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>

		<div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.372832, lng: 120.980422},
          zoom: 15
        });
      }
    </script>
  <?php include 'footer.php'; ?>
