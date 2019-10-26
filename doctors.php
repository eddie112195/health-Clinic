  <?php include 'header.php'; ?>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.php">Home</a></span> <span>Services</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctor</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Dentist and Staff</h2>
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
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="14">0</strong>
		                <span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>


<?php include 'footer.php'; ?>
