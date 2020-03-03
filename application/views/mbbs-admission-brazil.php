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
<li class="active">Brazil</li>
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
        <td><img src="<?= base_url()?>assets/images/faculty-of-medicine-of-the-university-of-brasilia-logo.png" class="img-responsive"></td>	<td>Faculty of Medicine of the University of Brasília</td><td>5 Years</td><td>Brasilia</td>
      </tr>
      <tr>
        <td><img src="<?= base_url()?>assets/images/catholic-university-of-brasilia-logo.png" class="img-responsive"></td>	<td>Catholic University of Brasília</td><td>5 Years</td><td>Brasilia</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/federal-university-of-rio-de-janeiro-logo.png" class="img-responsive"></td>	<td>Federal University of Rio de Janeiro</td><td>5 Years</td><td>Rio de Janeiro</td>	
      </tr>
      <tr>
      <td><img src="<?= base_url()?>assets/images/institute-of-medical-sciences-rio-de-janeiro-state-university-logo.png" class="img-responsive"></td>	<td>Institute of Medical Sciences, Rio de Janeiro State University	</td><td>5 Years</td><td>Rio de Janeiro</td>	
      </tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/faculty-of-medicine-of-the-fluminense-federal-university-logo.png" class="img-responsive"></td>	<td>Faculty of Medicine of the  Fluminense Federal University</td><td>5 Years</td><td>Rio de Janeiro</td>      
</tr>
      <tr>
<td><img src="<?= base_url()?>assets/images/faculty-of-medicine-of-the-university-of-sao-paulo-logo.png" class="img-responsive"></td>	<td>Faculty of Medicine of the University of São Paulo</td><td>5 Years</td><td>Sao Paulo</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/faculty-of-medical-sciences-of-the-state-university-of-campinas-logo.png" class="img-responsive"></td>	<td>Faculty of Medical Sciences of the State University of Campinas	</td><td>5 Years</td><td>Campinas, Sao Paulo</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/faculty-of-medicine-of-marilia-logo.png" class="img-responsive"></td>	<td>Faculty of Medicine of Marília</td><td>5 Years</td><td>Marília, São Paulo</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/centro-universitario-lusiada-logo.png" class="img-responsive"></td>	<td>Centro Universitario Lusíada	</td><td>5 Years</td><td>Boqueirão, Santos</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/federal-university-of-minas-gerais-logo.png" class="img-responsive"></td>	<td>Federal University of Minas Gerais	</td><td>5 Years</td><td>Belo Horizonte, Minas Gerais</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/lutheran-university-of-brazil-logo.png" class="img-responsive"></td>	<td>Lutheran University of Brazil</td><td>5 Years</td><td>Canoas, RS, Brazil</td>      
</tr>

      <tr>
<td><img src="" class="img-responsive"></td>	<td>Federal University of Santa Maria</td><td>5 Years</td><td>Santa Maria</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/state-university-of-londrina-logo.png" class="img-responsive"></td>	<td>State University of Londrina</td><td>5 Years</td><td>Londrina</td>      
</tr>

      <tr>
<td><img src="<?= base_url()?>assets/images/faculty-of-medicine-of-the-university-of-cuiaba-cuiaba-logo.png" class="img-responsive"></td>	<td>Faculty of Medicine of the University of Cuiaba (UNIC), Cuiaba</td><td>5 Years</td><td>Cuiaba</td>      
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
