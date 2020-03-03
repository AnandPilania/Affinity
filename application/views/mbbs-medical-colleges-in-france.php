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
<li class="active">France Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/university-of-paris-logo.png" class="img-responsive"></td>	<td>University of Paris</td><td>7 Years</td>	<td>Paris
</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-paris-sud-logo.png" class="img-responsive"></td><td>University of Paris Sud</td><td>7 Years</td>	<td>Paris
</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/pierre-and-marie-curie-university-logo.png" class="img-responsive"></td><td>Pierre and Marie Curie University	</td><td>7 Years</td>	<td>Paris
</td>
            </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/paris-diderot-university-logo.png" class="img-responsive"></td><td>Paris Diderot University</td><td>7 Years</td><td>Paris</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/descartes-university-logo.png" class="img-responsive"></td><td>Descartes University</td><td>7 Years</td><td>Paris</td>
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
