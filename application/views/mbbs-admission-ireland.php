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
<li class="active">Ireland Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/national-university-of-ireland-logo.png" class="img-responsive"></td>	<td>National University Of Ireland</td><td>7 Years</td>	<td>Galway
</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/trinity-college-logo.png" class="img-responsive"></td><td>Trinity College	</td><td>7 Years</td>	<td>Dublin
</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/royal-college-of-surgeons-logo.png" class="img-responsive"></td><td>Royal College of Surgeons</td><td>7 Years</td>	<td>Dublin
</td>
            </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-college-cork-logo.png" class="img-responsive"></td><td>University College Cork</td><td>7 Years</td><td>Cork</td>
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
