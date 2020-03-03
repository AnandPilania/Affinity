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
<li class="active">Spain Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/university-of-alcala-faculty-of-medicine-logo.png" class="img-responsive"></td>	<td>University of Alcala: Faculty of Medicine</td><td>6 Years</td>	<td>Madrid
</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/barcelona-logo.png" class="img-responsive"></td><td>Autonomous University of Barcelona: Faculty of Medicine</td><td>6 Years</td>	<td>Barcelona
</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/university-of-cantabria-faculty-of-medicine-logo.png" class="img-responsive"></td><td>University of   Cantabria: Faculty of Medicine</td><td>6 Years</td>	<td>Santander and Torrelavega, Cantabria
</td>
            </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/ceu-san-pablo-university-logo.png" class="img-responsive"></td><td>CEU San Pablo University: Faculty of Medicine</td><td>6 Years</td><td>Madrid</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/european-university-of-madrid-logo.png" class="img-responsive"></td><td>European University of Madrid: Faculty of Medicine</td><td>6 Years</td><td>Madrid</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-of-granada-logo.png" class="img-responsive"></td><td>University of Granada: Faculty of Medicine</td><td>6 Years</td><td>Granada
</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-of-malaga-logo.png" class="img-responsive"></td><td>University of Malaga: Faculty of Medicine</td><td>6 Years</td><td>Malaga, Andalusia
</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-college-cork-logo.png" class="img-responsive"></td><td>University of Murcia: Faculty of Medicine</td><td>6 Years</td><td>Murcia</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-college-cork-logo.png" class="img-responsive"></td><td>University of Oviedo: Faculty of Medicine</td><td>6 Years</td><td>Oviedo, Asturias
</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-college-cork-logo.png" class="img-responsive"></td><td>University of Seville: Faculty of Medicine</td><td>6 Years</td><td>Seville
</td>
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/university-college-cork-logo.png" class="img-responsive"></td><td>University of Zaragoza: Faculty of Medicine</td><td>6 Years</td><td>Zaragoza</td>
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
