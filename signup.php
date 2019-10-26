<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document" >
                <div class="modal-content" style="border-radius : 17px; width: 576px">
                    <!-- modal content -->
                    <div class="modal-header">
                       <h3 class="modal-title"><span style="font-style: Bold">REGISTRATION</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>

                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">

                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">

                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form" style="width: 500px" >
                                        <h4>It's free and always will be.</h4>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="patientFirstName" pattern = "[A-Za-z ]{1,20}" value="" class="form-control input-lg" placeholder="First Name" required />
                                            </div>
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="patientLastName" pattern = "[A-Za-z ]{1,20}" value="" class="form-control input-lg" placeholder="Last Name" required />
                                            </div>
                                        </div>

                                        <input type="email" name="patientEmail" value="" class="form-control input-lg" placeholder="Your Email"  required/>
                                        <input type="number" name="icPatient" value="" class="form-control input-lg" placeholder="icPatient">
                                        <input type="text" name="Username" value="" class="form-control input-lg" placeholder="Username"  required/>

                                        <input type="password" id = "password" name="password" class="form-control input-lg" placeholder="Password"  required/>

                                        <input type="password"  id = "confirm_password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password"  required/>
                                        <label>Birth Date</label>
                                        <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <select name="month" class = "form-control input-lg" required>
                                                    <option value="">Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="day" class = "form-control input-lg" required>
                                                    <option value="">Day</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="year" class = "form-control input-lg" required>
                                                    <option value="">Year</option>

                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label>Gender : </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="patientGender" value="male" required/>Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="patientGender" value="female" required/>Female
                                        </label>
                                        <br />
                                        <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>

                                        <button class="btn btn-lg btn-primary btn-block signup-bt" type="submit" name="signup" id="signup" style="border-radius : 12px" style="color: blue">Create my account</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                    <div class="modal-dialog" role="document" >
                        <div class="modal-content" style="border-radius : 17px; width: 576px">
                            <!-- modal content -->
                            <div class="modal-header">
                               <h3 class="modal-title"><span style="font-style: Bold">Register first or login</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>

                            </div>
                            <!-- modal body start -->
                            <div class="modal-body">

                                <!-- form start -->
                                <div class="container" id="wrap">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form" style="width: 500px" >
                                                <h4>It's free and always will be.</h4>
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">
                                                        <input type="text" name="patientFirstName" pattern = "[A-Za-z ]{1,20}" value="" class="form-control input-lg" placeholder="First Name" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6">
                                                        <input type="text" name="patientLastName" pattern = "[A-Za-z ]{1,20}" value="" class="form-control input-lg" placeholder="Last Name" required />
                                                    </div>
                                                </div>

                                                <input type="email" name="patientEmail" value="" class="form-control input-lg" placeholder="Your Email"  required/>
                                                <input type="number" name="icPatient" value="" class="form-control input-lg" placeholder="icPatient">
                                                <input type="text" name="Username" value="" class="form-control input-lg" placeholder="Username"  required/>

                                                <input type="password" id = "password" name="password" class="form-control input-lg" placeholder="Password"  required/>

                                                <input type="password"  id = "confirm_password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password"  required/>
                                                <label>Birth Date</label>
                                                <div class="row">

                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="month" class = "form-control input-lg" required>
                                                            <option value="">Month</option>
                                                            <option value="01">Jan</option>
                                                            <option value="02">Feb</option>
                                                            <option value="03">Mar</option>
                                                            <option value="04">Apr</option>
                                                            <option value="05">May</option>
                                                            <option value="06">Jun</option>
                                                            <option value="07">Jul</option>
                                                            <option value="08">Aug</option>
                                                            <option value="09">Sep</option>
                                                            <option value="10">Oct</option>
                                                            <option value="11">Nov</option>
                                                            <option value="12">Dec</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="day" class = "form-control input-lg" required>
                                                            <option value="">Day</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="year" class = "form-control input-lg" required>
                                                            <option value="">Year</option>

                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label>Gender : </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="patientGender" value="male" required/>Male
                                                </label>
                                                <label class="radio-inline" >
                                                    <input type="radio" name="patientGender" value="female" required/>Female
                                                </label>
                                                <br />
                                                <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>

                                                <button class="btn btn-lg btn-primary btn-block signup-bt" type="submit" name="signup" id="signup" style="border-radius : 12px" style="color: blue">Create my account</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content"style="border-radius : 17px; width: 576px">
                                    <!-- modal content -->
                                    <div class="modal-header">
                                      <h3 class="modal-title" style="text-align: center"><span style="font-style: Bold">DOCTOR PROFILE</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>
                                    <!-- modal body start -->
                                    <div class="modal-body">

                                        <!-- form start -->
                                        <div class="container" id="wrap">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form" style="width: 500px">
                                                      <div class="col-lg-12 col-sm-7 text-center mb-4">
                                                          <img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/person_5.PNG" alt="" style="border-radius: 50%!important; height:200px; width:200px">
                                                        </div>
                                                          <div class="col-md-12 col-sm-12 col-xs-12 pad25">

                                                            <h4>Doctor name : Maria Mercedes M. Galvez<br>
                                                              <small>Holder degree: Dentistry</small><br>
                                                              <small>DMD: Doctor of Dental Medicine</small><br>
                                                              <small>29 years experience</small>
                                                            </h4>
                                                            <h5>Graduated: <h6> Centro Escolar University</h6>
                                                            <h5>Address: <h6>Avida settings Molino IV Bacoor City</h6>
                                                              <h5>Birthday: <h6>June 21, 1964</h6>
                                                                <h5>Contact no: <h6>(046)-484 3217</h6><h6>09228676364</h6></h5>
                                                          </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


        <script>
     var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 </script>
