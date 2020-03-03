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
<li class="active">Educational Service
</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Educational Service</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12"><img src="<?= base_url()?>assets/images/images.jpg" class="img-responsive"></div>
</div>
</div>





<?php include('footer.php');?>
