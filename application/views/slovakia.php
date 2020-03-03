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
<li class="active">Slovakia</li>
</ol> 
<div class="abt-details">

<div class="row">
<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box">
<h5 class="tabpane-head">Comenius University in Bratislava</h5>
<p>Comenius University in Bratislava is the oldest and biggest university in the Slovak Republic. Faculty of Medicine in Bratislava is the oldest of the thirteen faculties of Comenius University in Bratislava and was established on the 21st September 1919.</p>
<a href="<?= base_url('index.php/Welcome/comeniusuniversityinbratislava')?>">Read More...</a>
</div>
</div></div>

</div>
</div>

</div> 
</div>
</div>



<?php include('footer.php');?>
