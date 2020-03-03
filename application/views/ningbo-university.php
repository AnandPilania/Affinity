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
<li><a href="study-medical-in-china.html">Study Medical In China</a></li>
<li class="active">Ningbo University
</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Ningbo University</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>/assets/images/ningbo-university-1.png" class="img-left">Ningbo University is located in the historical and cultural city of Ningbo of Zhejiang Province, bordering on the East China Sea. Ningbo University was established in 1986 by the donation of Yue-Kong Pao. In 1996, Ningbo Normal College and Zhejiang Shuichan College, Ningbo were merged into Ningbo University. In the early years of the school founding, Zhejiang University , Fudan University , China University of Science and Technology , Beijing University and other counterparts reconstruction, starting point to begin the school history. After 2000, Ningbo Maritime School, Ningbo Forestry School, and Ningbo Normal School were merged into Ningbo University. The first President of Ningbo University was Zhu Zhaoxiang. Ningbo University ranks among the first group of universities of China to enroll students from China’s mainland and Hong Kong, Taiwan and Macao. It offers mainly undergraduate programs, and simultaneously it makes vigorous efforts to expand graduate programs, and also offers doctoral degrees in cooperation with other universities.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>/assets/images/ningbo-university-2.png" class="img-left">Ningbo University's Faculty of Science was founded in April 2000. The Faculty has approx 110 staff and there are over 1000 full time students. The undergraduate programs include Mathematics, Applied Mathematics, Computational Mathematics, Physics and Applied Physics. Pure Mathematics and Theoretical Physics are warranted to precede graduate education of Master degree in 2001. Furthermore, the faculty is working together with Zhejiang University and the Southwest Petroleum College to educate postgraduates for master’s and doctorate degrees. Ningbo University is one of the 100 Chinese universities which are officially authorized the qualification by MOE for the recruitment of international students sponsored by government scholarships. A bachelor degree program of Chinese Language and an English medium bachelor program of International Business Administration are offered specially for international students,</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Accomodation</h5>
<p><img src="<?= base_url()?>/assets/images/ningbo-university-3.png" class="img-left">Ningbo University is committed to providing the best possible facilities for students coming to NBU. University-managed accommodation is safe, affordable and convenient. Single and Double Bedrooms are available in international students hostel. The university only private single room and double room for International students. In case anything is missing or stolen on campus, students should inform the International Students Office as well as the Security Department of Ningbo University.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Fee Structures</h5>
<ul class="tab-panelist">
<li><strong>General Medicine </strong> – 7000-12000 RMB/ year</li>
<li><strong>Hostel Fee</strong> –  28000 RMB/Year
</li>
</ul>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Hostel Fee</h5>
<ul class="tab-panelist">
<li><strong>Double Room:</strong> RMB4500/academic year</li>
<li><strong>Single Room:</strong> – RMB10000/academic year
</li>
</ul>
<p>All room available facilities - Furnished rooms with toilet, shower, necessary furniture and electrical appliances, excluding electricity and water cost.</p>
</div>
</div>

</div> 
</div>
</div>




<?php include('footer.php');?>
