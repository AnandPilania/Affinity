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
<li class="active">Kyrgyzstan</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Asian Medical Institute</h5>
<p><img src="<?= base_url()?>assets/images/asian-medical-institute-logo.png" class="img-responsive">The Asian Medical Institute located in Kant, Kyrgyzstan, Asian Medical Institute was established in 2004. This higher institution was meant for training highly qualified specialists in medical sphere both for Kyrgyz Republic & other countries of the world. AsMI is listed in W.H.O. Directory and FAIMER (IMED)</p>
<a href="<?= base_url('index.php/Welcome/asianmedicalinstitute')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">International University of Kyrgyzstan</h5>
<p>The Asian Medical Institute located in Kant, Kyrgyzstan, Asian Medical Institute was established in 2004. This higher institution was meant for training highly qualified specialists in medical sphere both for Kyrgyz Republic & other countries of the world. AsMI is listed in W.H.O. Directory and FAIMER (IMED)</p>
<a href="<?= base_url('index.php/Welcome/internationaluniversityofkyrgyzstan')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Kyrgyz State Medical Academy</h5>
<p><img src="<?= base_url()?>assets/images/kyrgyz-state-medical-academy-logo.png" class="img-responsive">The Kyrgyz State Medical Institute (KSMA) was opened on the 1st September 1939 in city of Bishkek (formerly Frunze) with the recruitment of 200 students. The establishment of the Institute was invaluably contributed to by the First Moscow Medical Institute, high medical schools of Saint-Petersburg, Almaty,</p>
<a href="<?= base_url('index.php/Welcome/kyrgyzstatemedicalacademy')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Osh State University</h5>
<p><img src="<?= base_url()?>assets/images/osh-state-university-logo.png" class="img-responsive">Osh State University (OSU) is one of the oldest higher education institutions in Kyrgyzstan located in the south of the country. It was established in 1992 on the basis of Osh State Pedagogic Institute which was organized in 1951. Nowadays the university is considered to be one of the leading universities in</p>
<a href="<?= base_url('index.php/Welcome/oshstateuniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

</div>

</div> 
</div>
</div>




<?php include('footer.php');?>
