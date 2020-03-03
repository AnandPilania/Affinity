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
<li class="active">Italy Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/university-of-bari-logo.png" class="img-responsive"></td>	<td>University of Bari</td><td>6 Years</td>	<td>Bari, Italy</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/biomedical-university-of-rome-logo.png" class="img-responsive"></td>	<td>Biomedical University of Rome</td><td>6 Years</td>	<td>Rome, Italy</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-bologna-logo.png" class="img-responsive"></td>	<td>University of Bologna	</td><td>6 Years</td>	<td>Bologna, Italy</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-milan-logo.png" class="img-responsive"></td>	<td>University of Milan	</td><td>6 Years</td><td>Milan, Italy
</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-udine-logo.png" class="img-responsive"></td>	<td>University of Udine	</td><td>6 Years</td><td>Udine, Italy
</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-verona-logo.png" class="img-responsive"></td>	<td>University of Verona	</td><td>6 Years</td><td>Verona, Italy</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-pisa-logo.png" class="img-responsive"></td>	<td>University of Pisa	</td><td>6 Years</td><td>Pisa, Italy</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-padova-logo.png" class="img-responsive"></td>	<td>University of Padova</td><td>6 Years</td><td>Padova, Italy</td>
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
