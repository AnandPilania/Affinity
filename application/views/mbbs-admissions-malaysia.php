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
<li class="active">Malaysia Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/university-of-malaya-medical.png" class="img-responsive"></td>	<td>University of Malaya Medical Centre (um)</td><td>Kuala Lumpur, Malaysia</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/national-university-of-malaysia-logo.png" class="img-responsive"></td>	<td>The National University of Malaysia	</td><td>Bangi</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/sains-mmalaysia-school-of-medical-science-lpgo.png" class="img-responsive"></td>	<td>Sains Malaysia School of Medical Science</td>	<td>Kubang Kerian</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-putra-malaysia-logo.png" class="img-responsive"></td><td>University Putra Malaysia (UPM)</td><td>Serdang</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/universiti-malaysia-sarawak-logo.png" class="img-responsive"></td><td>University Malaysia Sarawak (unimas)</td><td>Kota Samarahan, Sarawak</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-malaysia-sabah-logo.png" class="img-responsive"></td><td>University Malaysia Sabah (USM)</td><td>Kota Kinabalu, Sabah</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/medical-university.logo.png" class="img-responsive"></td><td>International Medical University (IMU)</td><td>Kuala Lumpur</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/penang-medical-college.logo.png" class="img-responsive"></td><td>Penang medical college</td><td>Penang, Kuala Lumpur</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/royal-college-of-medicine.logo.png" class="img-responsive"></td><td>UniKL Royal College of Medicine Perak</td><td>Kuala Lumpur</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/islamic-university-of-malaysia.logo.png" class="img-responsive"></td><td>Islamic university of Malaysia (IIUM)</td><td>Kuala Lumpur</td>
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/institute-of-medicine-science-and-technology.logo.png" class="img-responsive"></td><td>Institute of medicine science and technology</td><td>Kuala Lumpur</td>
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
