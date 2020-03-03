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
<li class="active">Netherlands Medical University</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-12">
<h5 class="tabpane-head"><img src="<?= base_url()?>assets/images/nepal-medical-university-1.png">Tribhuvan University</h5>

<table class="table table-striped mx-table"> 
<thead> 
<tr> 
<th>Logo	</th> 
<th>Medical University Name</th> 
<th>Duration</th> 
<th>Location</th> 
</tr> 
</thead> 
<tbody>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-amsterdam-logo.png" class="img-responsive"></td>	<td>University of Amsterdam	</td><td>6 Years</td>	<td>Amsterdam, North Holland

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/vu-university-medical-center-amsterdam-logo.png" class="img-responsive"></td>	<td>VU University Medical Center Amsterdam	</td><td>6 Years</td>	<td>Zuidas, Amsterdam

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-groningen-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>University of Groningen, Faculty of Medicine	</td><td>6 Years</td>	<td>Groningen, Netherlands

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/utrecht-university-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>Utrecht University, Faculty of Medicine	</td><td>6 Years</td>	<td>Utrecht, Netherlands
</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/erasmus-university-rotterdam-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>Erasmus University Rotterdam, Faculty of Medicine	</td><td>6 Years</td>	<td>Rotterdam, Netherlands

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/radboud-university-nijmegen-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>Radboud University Nijmegen, Faculty of Medicine</td><td>6 Years</td>	<td>Nijmegen

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-leiden-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>University of Leiden, Faculty of Medicine</td><td>6 Years</td>	<td>Za Leiden

</td>
      </tr>
    </tbody> 
</table>

</div>

	
</div>

</div>

</div> 
</div>
</div>





<?php include('footer.php');?>

