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
<li class="active">Kazakhstan Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/kazakhstan-medical-university-1.png" class="img-responsive"></td>	<td>Karaganda State Medical University	</td>	<td>Karaganda</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/kazakhstan-medical-university-2.png" class="img-responsive"></td>	<td>Kazakh National Medical University <br>"S. Asfendiarov"</td><td>Almaty</td>	
      </tr>
      <tr>
      <td></td>	<td>Kazakhstan Medical Institute</td>	<td>Almaty</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/kazakhstan-medical-university-4.png" class="img-responsive"></td><td>Semipalatinsk State Medical Academy	</td><td>Semipalatinsk</td>
      </tr>
      <tr>
      <td></td><td>South Kazakhstan State Medical Academy</td><td>Shymkent</td>
      </tr>
      <tr>
      <td></td><td>West Kazakhstan State Medical Academy "Marat Ospanov"</td><td>Aktobe</td>
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
