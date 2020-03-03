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
<li class="active">Romania</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Carol Davila University of Medicine and Pharmacy</h5>
<p><img src="<?= base_url()?>assets/images/carol-davila-university-of-medicine-and-pharmacy-logo.png" class="img-responsive">Carol Davila University of Medicine and Pharmacy is a state-run health sciences University in Bucharest, Romania. It is the largest institution of its kind in Romania with over 2.865 employees, 1.654 teachers and over 4.800 students. The University is using the facilities of over 20 clinical hospitals all over Bucharest.</p>
<a href="<?= base_url('index.php/Welcome/caroldavilauniversityofmedicineandpharmacy')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">University of Medicine and Pharmacy Cluj Napoca</h5>
<p><img src="<?= base_url()?>assets/images/university-of-medicine-and-pharmacy-cluj-napoca-logo.png" class="img-responsive">Cluj-Napoca University of Medicine and Pharmacy is the continuation of the Faculty of Medicine and Pharmacy, Cluj Napoca Medical University also called University of Medicine and Pharmacy, Cluj-Napoca is the continuation of the Medicine and Pharmacy Faculty, founded in 1919 at Cluj, as part of Cluj</p>
<a href="<?= base_url('index.php/Welcome/universityofmedicineandpharmacyclujnapoca')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Grigore T. Popa University of Medicine and Pharmacy</h5>
<p>Grigore T. Popa University of Medicine and Pharmacy Romanian is a public university-level medical school located in Iasi, Romania. Romania has a long standing tradition in the medical field. The Romanian health care system has been in existence since 1700. George Emil Palade, the Nobel Prize winner of</p>
<a href="<?= base_url('index.php/Welcome/grigoretpopauniversityofmedicineandpharmacy')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Ovidius University of Constanta</h5>
<p>Ovidius University is a higher education institution in Constanta, founded in 1961. The university offers courses in Cultural Studies, Medicine and Mathematics in English. As of 2008, students coming from Moldova, Albania, Republic of Macedonia, Turkey, India, Turkmenistan, South Africa are enrolled as international students.</p>
<a href="<?= base_url('index.php/Welcome/ovidiusuniversityofconstanta')?>"  target="_blank">Read More...</a>
</div>
</div></div>

</div>

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">University of Oradea</h5>
<p><img src="<?= base_url()?>assets/images/university-of-oradea.png" class="img-responsive">The University of Oradea is a public University, located in Oradea, in North-Western Romania. With its four colleges and 18 faculties, has a total of 123 fields of study for undergraduates and 151 post-graduate specialisation degrees. The University employs 2,003 people, of which 1,237 are</p>
<a href="<?= base_url('index.php/Welcome/universityoforadea')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Victor babes university of Medicine and Pharmacy
</h5>
<p><img src="<?= base_url()?>assets/images/victor-babes-university-of-medicine-and-pharmacy-timisoara.png" class="img-responsive">The school was founded as a modest faculty on 30 December 1944, when King Michael I of Romania signed decree-law nr. 660". Art. 1. - The West University is founded on the date of publication of this hereby law, having the following faculties: Law, Literature and Philosophy, Sciences, Human medicine,</p>
<a href="<?= base_url('index.php/Welcome/victorbabesuniversityofmedicineandpharmacytimisoara')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

</div>

</div> 
</div>
</div>


<?php include('footer.php');?>
