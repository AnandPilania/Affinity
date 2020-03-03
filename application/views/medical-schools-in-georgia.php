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
<li><a href="index.htm">Home</a></li>
<li class="active">Georgia</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">David Tvildiani Medical University (DTMU)</h5>
<p><img src="<?= base_url()?>assets/images/aieti-medical-school-logo.png" class="img-responsive">David Tvildiani Medical University (DTMU) was founded by Dr. Dimitri Tvildiani in the year 1992/93. It is the first higher medical education institution in Georgia which started providing education in English. It is also the most favoured destination for foreign students who wish to study MBBS, in Georgia.</p>
<a href="<?= base_url('index.php/Welcome/davidtvildianimedicaluniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Georgia Regents University (GRU)</h5>
<p><img src="<?= base_url()?>assets/images/georgia-regents-university-logo.png" class="img-responsive">Georgia Regents University (GRU) is a public academic health center with its main campus located in Augusta, Georgia, United States. It one of the four research universities in the University System of Georgia (USG). GRU is composed of nine colleges: the College of Allied Health Sciences, College of Arts,</p>
<a href="<?= base_url('index.php/Welcome/georgiaregentsuniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Mercer University School of Medicine</h5>
<p><img src="<?= base_url()?>assets/images/mercer-university-school-medicine-logo.png" class="img-responsive">Welcome to Mercer University School of Medicine (MUSM) with campuses located in Macon, Savannah and Columbus, Georgia. Mercer University School of Medicine (MUSM) is the graduate medical school of Mercer University. It was founded in Macon, GA in 1982, and as of 2008 has expanded to</p>
<a href="<?= base_url('index.php/Welcome/merceruniversityschoolmedicine')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Tbilisi State Medical University</h5>
<p><img src="<?= base_url()?>assets/images/tbilisi-state-medical-university-logo.png" class="img-responsive">Tbilisi State Medical University is a leading medical University in Caucasus Region. TSMU was founded as Tbilisi Medical Institute in 1918 and became the Faculty of Medicine within the Tbilisi State University (TSU) in 1930. Tbilisi State Medical Institute was renamed to Medical University in 1992.</p>
<a href="<?= base_url('index.php/Welcome/tbilisistatemedicaluniversity')?>" target="_blank">Read More...</a>
</div> bvfcd
</div></div>

</div>
</div>

</div> 
</div>
</div>





<?php include('footer.php');?>

