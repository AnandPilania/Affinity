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
<li class="active">UK Medical University</li>
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
        <td><img src="<?= base_url()?>assets/images/kings-college-of-medicine-and-dentistry-logo.png" class="img-responsive"></td>	<td>King’s College Of Medicine And Dentistry	</td><td>6 Years</td>	<td>Londen


</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/uni-of-glasgow-school-of-medicine-logo.png" class="img-responsive"></td>	<td>Uni. Of Glasgow School Of Medicine	</td><td>6 Years</td>	<td>Scotland


</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/leicester-medical-school-logo.png" class="img-responsive"></td>	<td>Leicester Medical School	</td><td>6 Years</td>	<td>Leicester

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/uni-of-liverpool-school-of-medicine-logo.png" class="img-responsive"></td>	<td>Uni. of Liverpool School of Medicine	</td><td>6 Years</td>	<td>Liverpool

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-manchester-logo.png" class="img-responsive"></td>	<td>University Of Manchester	</td><td>6 Years</td>	<td>Manchester


</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/leeds-school-of-medicine-logo.png" class="img-responsive"></td>	<td>Leeds School Of Medicine	6</td><td>6 Years</td>	<td>Leeds

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/queen-marry-uni-of-london-logo.png" class="img-responsive"></td>	<td>Queen Marry Uni. Of London	</td><td>6 Years</td>	<td>London

</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/university-of-southampton-logo.png" class="img-responsive"></td>	<td>University of Southampton</td><td>6 Years</td>	<td>Hamsphire

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
