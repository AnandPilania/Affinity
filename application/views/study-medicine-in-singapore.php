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
<li class="active">Singapore Medical University</li>
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
<th>Location</th> 
</tr> 
</thead> 
<tbody>
      <tr>
        <td><img src="<?= base_url()?>assets/images/national-university-of-singapore-logo.png" class="img-responsive"></td>	<td>National university of Singapore</td>	<td>Singapore</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/annals-academy-of-medicine-logo.png" class="img-responsive"></td>	<td>Annals Academy of Medicine</td>	<td>Singapore</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/james-cook-university-logo.png" class="img-responsive"></td>	<td>James cook university (JCU)</td>	<td>Singapore</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/queen-margaret-university-logo.png" class="img-responsive"></td>	<td>Queen Margaret university</td><td>Singapore</td>
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

