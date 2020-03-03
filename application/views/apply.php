<?php

  if($this->session->userdata('email'))
  {
    include('usernav.php');
  }
  else
  {
   include('navbar.php');
  }
?>

<div class="container-fluid abt-banner" style="padding:0;">
<div class="abt-banner-dark">
</div>
</div>

<div class="container-fluid">
<div class="container">
<div class="abt-info">
<ol class="breadcrumb mx-crumb">
<li><a href="#">Home</a></li>
<li class="active">Register</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Register Here:</h4>
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Candidate First Name</label>
<div class="input-with-icon">
<i class="fa fa-user"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Candidate Last Name</label>
<div class="input-with-icon">
<i class="fa fa-user"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Father name</label>
<div class="input-with-icon">
<i class="fa fa-user"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Mother name</label>
<div class="input-with-icon">
<i class="fa fa-user"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">DOB</label>
    <div class="input-with-icon">
<i class="fa fa-calendar-o"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Gender</label>
  <div class="input-with-icon">
    <i class="fa fa-venus-mars" aria-hidden="true"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>Male</li>
    <li>Female</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>
    </div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Nationality</label>
  <div class="input-with-icon">
    <i class="fa fa-flag" aria-hidden="true"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>Indian</li>
    <li>Other Country</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Category</label>
  <div class="input-with-icon">
    <i class="fa fa-list" aria-hidden="true"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>General</li>
    <li>SC/ST</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>
    </div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Address</label>
    <div class="input-with-icon">
<i class="fa fa-map-marker"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">City</label>
    <div class="input-with-icon">
<i class="fa fa-map-marker"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
    </div>
    
<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">State</label>
    <div class="input-with-icon">
<i class="fa fa-map-marker"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Pin Code</label>
    <div class="input-with-icon">
<i class="fa fa-map-marker"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
    </div>
        
<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Email</label>
    <div class="input-with-icon">
<i class="fa fa-envelope"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Phone</label>
    <div class="input-with-icon">
<i class="fa fa-phone"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

</div>

<div class="row"><div class="col-md-6">
<p><h5 class="tabpane-head1">Academic Performance</h5></p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">10th Class %*</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Name of School</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

</div>


<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">12th Class %*</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Board/ University</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>

</div>


<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Graduation Marks %</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Name of University</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Entrance Exam Appeared</label>
  <div class="input-with-icon">
    <i class="fa fa-clipboard"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>CAT</li>
    <li>XAT</li>
<li>MAT</li>
    <li>CMAT</li>
<li>CAT</li>
    <li>MHCET</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>
    
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">%Tile Score</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Entrance Exam Appeared</label>
  <div class="input-with-icon">
    <i class="fa fa-clipboard"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>CAT</li>
    <li>XAT</li>
<li>MAT</li>
    <li>CMAT</li>
<li>CAT</li>
    <li>MHCET</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>
    
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">%Tile Score</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Entrance Exam Appeared</label>
  <div class="input-with-icon">
    <i class="fa fa-clipboard"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
    <li>CAT</li>
    <li>XAT</li>
<li>MAT</li>
    <li>CMAT</li>
<li>CAT</li>
    <li>MHCET</li>
  </ul>
  </div>
  
  
  </div>
    </div>
    </div>
    
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">%Tile Score</label>
    <div class="input-with-icon">
<i class="fa fa-percent"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Work Experience</label>
  <div class="input-with-icon">
    <i class="fa fa-briefcase" aria-hidden="true"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
<li>1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
</div>
  
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">GDPI / Location </label>
  <div class="input-with-icon">
    <i class="fa fa-map-marker"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
<li>Patna</li>
<li>Ranchi</li>
<li>Jamshedpur</li>
<li>Kolkata</li>
<li>Delhi- NCR</li>
<li>Bhubaneswar</li>
<li>Dehradoon</li>
<li>Jaipur</li>
<li>Varanasi</li>
<li>Bhopal</li>
</ul>
</div>
  
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputDate1">Mode of Payment </label>
  <div class="input-with-icon">
    <i class="fa fa-inr"></i>
    <div class="select select--white">
  <span class="placeholder">Select</span>
  <ul>
<li>Cash</li>
<li>Cheque</li>
<li>Bank Draft</li>
</ul>
</div>
  
</div>
</div>
</div>
</div>
<p><strong>Note: You can transfer Rs. 1000/- by cash/credit/debit card or Net banking in A/C of the Affinity Education. </strong></p>
<p><strong>B.Schools Name & Location: For Admission to AICTE Approved Two Year full time Post Graduate Diploma in Management /Master of Business Administration Programme. Please indicate your preference for B-Schools in order of priority.</strong></p>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Name of B-School</label>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Specialization</label>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">College Name1</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Specialization1</label>
    <div class="input-with-icon">
<i class="fa fa-users" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">College Name2</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Specialization2</label>
    <div class="input-with-icon">
<i class="fa fa-users" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">College Name3</label>
    <div class="input-with-icon">
<i class="fa fa-building" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputName1" placeholder="">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group mx-formgrp">
<label for="InputName1">Specialization3</label>
    <div class="input-with-icon">
<i class="fa fa-users" aria-hidden="true"></i>
<input type="text" class="form-control" id="InputDate1" placeholder="">
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group mx-formgrp">
<button type="submit" class="btn btn-register">Submit</button>
</div>
</div>
</div>
</form>

</div>

</div> 
</div>
</div>
</div>





<section class="explaore padding-TB-40">
  <div class="container form-container">
    <div class="col-sm-12 text-center">
        <h3 class="heading">Signup for our Newsletter</h3>
      </div>
    <div class="row">
      <div class="col-sm-4 col-xs-12 text-right">
        <div class="form-area">
          <input type="email" placeholder="E-mail" class="">
        </div>
      </div>
    <div class="col-sm-4 col-xs-12 text-center">
        <div class="form-area">
          <input type="Phone" placeholder="Phone" class="">
        </div>
      </div>
    <div class="col-sm-4 col-xs-12">
        <div class="form-area">
          <a href="#" class="btn">Subscribe</a>       </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php');?>
