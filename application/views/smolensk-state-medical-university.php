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
<li><a href="<?= base_url()?>">Home</a></li>
<li><a href="<?= base_url('Welcome/graduatemedicalcoursesinrussia')?>">Russia</a></li>
<li class="active">Smolensk State Medical University</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Smolensk State Medical University</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>assets/images/smolensk-state-medical-university-thumbs-1.jpg" class="img-left">The Smolensk State Medical University was founded in 1920. The Smolensk State Medical University is a government medical university recognized by WHO and all countries of the world including USA, UK and India. In the international rating the Smolensk State Medical University is placed on the 22nd position. Because of high results, the Russian Government in March 2015 has raised the level to highest i.e. from Academy to University. That is why the name has been changed from Smolensk State Medical Academy to Smolensk State Medical University. Students from more than 50 countries study here: from India, Germany, Italy, Poland, Sri Lanka and other countries of African, Asian and South American continents. For foreign students education is carried out in English medium.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Fee Structure for General Medicine –</h5>
<ul class="tab-panelist">
<li><strong>Tuition Fee – </strong> 5500 US$/Year (English Medium)</li>
<li><strong>Note – </strong> These fee include the Tuition Fee and Hostel Fee</li>
</ul>
<h5 class="tabpane-head">Other Expenses for every year:</h5>
<ul class="tab-panelist">
<li><strong>Food  – </strong> 50 – 80 US$/Month</li>
<li><strong>Maintenance Charges  – </strong> 10 -15 US$/Month</li>
<li><strong>Medical Insurance  – </strong> 150 US$</li>
<li><strong>Visa Extension  – </strong> 100 US$</li>
</ul>
</div>
</div>

</div> 
</div>
</div>


<?php include('footer.php')?>