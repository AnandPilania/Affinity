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
<li class="active">Belarus Medical University</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Belarusian State Medical University</h5>
<p><img src="<?= base_url()?>assets/images/belarusian-state-medical-university-logo.png" class="img-responsive">Belarusian State Medical University is a leading higher medical education provider in the Republic of Belarus. In its present form it was established in 1930 under the title of Minsk State Medical Institute, though the academic heritage can be traced back to 1921, when a Medical Faculty was created as a part of</p>
<a href="<?= base_url('index.php/Welcome/belarusianstatemedicaluniversity')?>" target="blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Gomel State Medical University</h5>
<p><img src="<?= base_url()?>assets/images/gomel-state-medical-university-logo.png" class="img-responsive">Gomel State Medical University is public teaching university based in Gomel, Belarus. In 1990 Gomel State Medical University was founded as per Resolution of the Council of Ministers and Order of the Minister of Health of the Byelorussian Soviet Socialist Republic. It is the youngest of four Medical Universities in Belarus.</p>
<a href="<?= base_url('index.php/Welcome/gomelstatemedicaluniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Grodno State Medical University</h5>
<p><img src="<?= base_url()?>assets/images/grodno-state-medical-university-logo.png" class="img-responsive">Grodno State Medical University was founded in 1958. It keeps a prestigious place among the medical higher educational establishments of Belarus. High quality teaching guaranties student’s high level of theoretical knowledge as well as practical skills and experience. Thousands of graduates have already.</p>
<a href="<?= base_url('index.php/Welcome/grodnostatemedicaluniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Vitebsk State Medical University</h5>
<p><img src="<?= base_url()?>assets/images/vitebsk-state-medical-university-logo.png" class="img-responsive">Vitebsk State Medical University was founded in November 1934. The first Rector was Professor M. A. Hazanov. The foundation of Medical Faculty was finished by 1941. It included 32 theoretical and clinical departments. The Great Patriotic War broke the work of the Institute for several years. Many teachers.</p>
<a href="<?= base_url('index.php/Welcome/vitebskstatemedicaluniversity')?>" target="_blank">Read More...</a>
</div>
</div></div>

</div>

</div>

</div> 
</div>
</div>



<?php include('footer.php');?>
