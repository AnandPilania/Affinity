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
<li class="active">Bulgaria Medical University</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-12">
<h5 class="tabpane-head"><img src="<?= base_url()?>/assets/images/nepal-medical-university-1.png">Tribhuvan University</h5>

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
        <td><img src="<?= base_url()?>/assets/images/sofia-medical-university-logo.png" class="img-responsive"></td>	<td>Sofia Medical University</td><td>6 Years</td>	<td>Sofia
</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>/assets/images/plovdiv-medical-university-logo.png" class="img-responsive"></td><td>Plovdiv Medical University	</td><td>6 Years</td>	<td>Plodiv</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>/assets/images/varna-medical-university-logo.png" class="img-responsive"></td>	<td>Varna Medical University		</td><td>6 Years</td>	<td>Varna</td>
            </tr>
      <tr>
      <td><img src="<?= base_url()?>/assets/images/pleven-medical-university-logo.png" class="img-responsive"></td>	<td>Pleven Medical University	</td><td>6 Years</td><td>Pleven
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
