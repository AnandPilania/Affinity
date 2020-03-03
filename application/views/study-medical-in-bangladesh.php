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
<li class="active">Bangladesh Medical College</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-12">
<h5 class="tabpane-head"><img src="<?= base_url()?>assets/images/nepal-medical-university-1.png">Tribhuvan University</h5>

<table class="table table-striped mx-table"> 
<thead> 
<tr> 
<th>Logo	</th> 
<th>Medical College Name</th> 
<th>Location</th> 
</tr> 
</thead> 
<tbody>
      <tr>
        <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-1.png" class="img-responsive"></td>	<td>Dhaka Medical College</td>	<td>Dhaka</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-2.png" class="img-responsive"></td>	<td>Mymensingh Medical College</td>	<td>Mymensingh, Dhaka</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-3.png" class="img-responsive"></td>	<td>Chittagong Medical College</td>	<td>Chittagong</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-4.png" class="img-responsive"></td>	<td>Rajshahi Medical College</td>	<td>Rajshahi</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-5.png" class="img-responsive"></td>	<td>Sher-E-Bangla Medical College</td>	<td>Barisal</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-6.png" class="img-responsive"></td>	<td>Khulna Medical College</td>	<td>Khulna</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-7.png" class="img-responsive"></td>	<td>Shaheed Ziaur Rahman Medical College</td>	<td>Bogra Town</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-8.png" class="img-responsive"></td>	<td>Rangpur Medical College</td>	<td>Rangpur</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-9.png" class="img-responsive"></td>	<td>Dinajpur Medical College</td>	<td>Dinajpur</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-10.png" class="img-responsive"></td>	<td>Faridpur Medical College</td>	<td>Faridpur</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-11.png" class="img-responsive"></td>	<td>Pabna Medical College</td>	<td>Pabna</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-12.png" class="img-responsive"></td>	<td>Bangladesh Medical College</td>	<td>Dhanmondi, Dhaka</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-13.png" class="img-responsive"></td>	<td>International Medical College</td>	<td>Dhaka</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-14.png" class="img-responsive"></td>	<td>Delta Medical College & Hospital</td>	<td>Dhaka</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-15.png" class="img-responsive"></td>	<td>Dhaka National Medical College</td>	<td>Dhaka</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/bangladesh-medical-college-16.png" class="img-responsive"></td>	<td>Northern International Medical College</td>	<td>Dhaka</td>
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
