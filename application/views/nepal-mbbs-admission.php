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
<li class="active">Nepal Medical University</li>
</ol>
<div class="abt-details">

<div class="row">
<div class="col-md-12">
<h5 class="tabpane-head"><img src="<?= base_url()?>assets/images/nepal-medical-university-1.png">Tribhuvan University</h5>

<table class="table table-striped mx-table"> 
<thead> 
<tr> 
<th>University Name	</th> 
<th>Duration/Seats	</th> 
<th>Location</th> 
<th>Tuition Fee (Total)	</th>
<th>Language</th> 
</tr> 
</thead> 
<tbody>
      <tr>
        <td>Institute Of Medicine</td>	<td>5 years/ 60 Seats</td>	<td>Mharajgunj Kathmandu</td>	<td>22,00,000</td>	<td>English</td>
      </tr>
      <tr>
        <td>Universal Medical College</td>	<td>5 years/150 Seats</td>	<td>Bhairawaha</td>	<td>30,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Janki Medical college</td>	<td>5 years/100 Seats</td>	<td>Janakpur</td>	<td>26,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>National Medical College</td>	<td>5 years/150 Seats</td>	<td>Birgunj</td>	<td>30,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Chitwan Medical College</td>	<td>5 years/100 Seats</td>	<td>Bharatpur</td>	<td>27,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Gandaki Medical College</td>	<td>5 years/ 120 Seats</td>	<td>lekhnath-2pokhra</td>	<td>25,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Mahendranagar Medical College </td>	<td>5 years/ 100 Seats</td>	<td>Mahendranagar</td>	<td>23,50,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Kist Medical College</td>	<td>5 years/ 70 Seats</td>	<td>Lalitpur</td>	<td>25,00,000</td>	<td>English</td>
      </tr>
    </tbody> 
</table>

</div>

<div class="col-md-12">
<h5 class="tabpane-head"><img src="<?= base_url()?>assets/images/nepal-medical-university-2.png">Kathmandu University</h5>

<table class="table table-striped mx-table"> 
<thead> 
<tr> 
<th>University Name	</th> 
<th>Duration/Seats	</th> 
<th>Location</th> 
<th>Tuition Fee (Total)	</th>
<th>Language</th> 
</tr> 
</thead> 
<tbody>
      <tr>
        <td>College Of Medical  Science</td>	<td>5 years/ 150 Seats</td>	<td>Bharatpur</td>	<td>35,00,000</td>	<td>English</td>
      </tr>
      <tr>
        <td>B. P. Koirala Institute of Health Science</td>	<td>5 years/100 Seats</td>	<td>Sunsari, Koshi</td>	<td>35,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Nepalgunj Medical College</td>	<td>5 years/150 Seats</td>	<td>chisapani , nepalgunj</td>	<td>30,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Kathmandu University College</td>	<td>5 years/100 Seats</td>	<td>Duwakot & sinamangal	</td>	<td>35,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Nepal Medical College</td>	<td>5 years/100 Seats</td>	<td>jorpati ,Kathmandu  </td>	<td>31,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Kathmandu University School Of Medical Science</td>	<td>5 years/ 60 Seats</td>	<td>Dulikhel</td>	<td>24,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Lumbini Medical College </td>	<td>5 years/ 100 Seats</td>	<td>Tansen,palpa</td>	<td>23,12,500</td>	<td>English</td>
      </tr>
      <tr>
      <td>Nobel Medical College</td>	<td>5 years/ 150 Seats</td>	<td>Biratnagar</td>	<td>31,00,000</td>	<td>English</td>
      </tr>
      <tr>
      <td>Manipal Medical College  of Medical science</td>	<td>5 years/ 170 Seats</td>	<td>Pokhra</td>	<td>30,00,000</td>	<td>English</td>
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
