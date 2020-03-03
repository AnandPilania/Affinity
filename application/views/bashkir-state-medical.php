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
<li><a href="">Home</a></li>
<li><a href="<?=base_url('Welcome/smolenskstatemedicaluniversity')?>"Russia</a></li>
<li class="active">Bashkir State Medical University
</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Bashkir State Medical University
</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?=base_url()?>assets/images/bashkir-image-1.jpg" class="img-left">Bashkir State Medical University is located in Ufa, Bashkortostan, Russia, founded in 1909 and is situated on the bank of Belaya River, is among the top ten classical universities of Russia. UFA is the one of the largest and most beautiful cities in Russia. Bashkir State Medical University is an educational institution has been training students since 1932.</p>

<p>In 1995 it was reorganized into the University. Bashkir State Medical University is one of the best medical universities in Russia. BSU have a strong undergraduate and graduate program, as well as resident ship, internship and refreshment courses for doctors and pharmacy specialists. </p>

<p>There are 615 faculty teaching at the University. BSU have over 4500 Medical Students and over 500 full-time faculty at school of General Medicine (MBBS), dentistry, Pediatrics, Nursing, Pharmacy and Preventive Medicine. Bashkir University teaches the following fields – Undergraduate training program, Postgraduate Training Program, internship, clinical resident ship medical training and PhD programs. Bashkir University has a University hospital, 7 Building, out-patient clinics for medical and dental, well equipped laboratories, A huge library, sport facilities, 5 dormitories, summer camp, sanatorium.</p>

<p><img src="<?=base_url()?>assets/images/bashkir-image-2.jpg" class="img-left">The University has an IT department, 8 inter-departmental computer classes that are used by 49 departments. University has a campus-wide LAN and a fast Internet Connection. Undergraduate and graduate students can use well equipped scientific labs for cutting edge medical research.</p>

<p>The University is a member of the World Health Organization (WHO) and recognized by Medical Council of India (MCI) India, (MMC) Malaysia, GMC UK and others many countries.</p>

<p>RMC have sent many students from last many years, and create close to 200 of doctors and leaping year. RMC services for student interest we not only show our student the path to pursue their dream of becoming a doctor, but also guide our student and their parents with latest information till the course complete. No donation or any capitation fees for admission in Bashkir University, Russia. RMC provide special coaching for students to pass MCI screening test after completed the MBBS program.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Fee Structure</h5>
<ul class="tab-panelist">
<li><strong>Tuition Fee with Accommodation – </strong> 6000 US$/Year (English Medium)</li>
<li><strong>Tuition Fee with Accommodation – </strong> 2500 US$ (From 2nd Year to 6th Year)</li>
</ul>
<h5 class="tabpane-head">Living Cost</h5>
<ul class="tab-panelist">
<li>The average cost of living in UFA is approximately 120 -150 USD per month</li>
</ul>
</div>
</div>

</div> 
</div>
</div>

<?php include('footer.php');?>
