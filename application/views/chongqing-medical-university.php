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
<li class="active">Chongqing Medical University</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Chongqing Medical University
</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>/assets/images/chongqing-medical-university-1.jpg" class="img-left">Chongqing Medical University previously referred to as the Chongqing University of Medical Sciences (CQUMS), was established in 1956 in Chongqing, China. It was originally a branch of the Shanghai First Medical College now named the Shanghai Medical College of Fudan University. CQMU is now a comprehensive medical university with a diverse offering of Bachelor’s, Master’s, Doctoral and Postdoctoral programs. It is among the first group of universities approved by Ministry of Education in China to accept international students to study medicine in English. Since 2001, the university has accepted over 1,000 international students from over 20 countries and regions. It is one of approximately 30 medical universities in China which are approved by the Chinese Ministry of Education to enroll foreign students into the English-medium MBBS (Bachelor of Medicine & Bachelor of Surgery) program. It is recognized by the World Health Organization (WHO) and the ECFMG (Educational Committee for Foreign Medical Graduates) in the United States.</p>
<p><strong>CQMU</strong> is a state key university under the administration of the Chongqing Municipal Government with an integrated educational system of baccalaureate, masters, doctoral, and postdoctoral programs in medicine as well as other health-related fields.</p>
</div>
</div>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>/assets/images/chongqing-medical-university-2.jpg" class="img-left">CQMU has five hospitals directly under its administration, which are all rated as “Upper First-class Hospitals” in China. There are more than 8,000 beds in these hospitals. The annual outpatient visits total 5.5 million and the annual inpatient visits 150,000. In addition, CQMU has five affiliated hospitals indirectly under its administration, 27 teaching and clinical practicing hospitals, 10 colleges, six departments, and a nursing school. Two more affiliated hospitals are currently under construction.</p>
<p>On the research front, CQMU has three state key laboratories under the Ministry of Education, one state key laboratory under the Chongqing Ministry of Science & Technology, one national engineering research center, 18 municipal key laboratories, 11 research institutes, six research centers, and 22 research laboratories. CQMU offers five postdoctoral programs, 26 doctoral programs, 53 masters programs, and 46 specialties for undergraduates. It has four state key disciplines and 43 municipal key disciplines.</p>
<p><strong>CQMU</strong> has accomplished several large-scale research projects including some state-level projects supported by the National Key Technology Research and Development Program in the 6th to 9th Five-year Plan for National Economic and Social Development, Key Program of National Natural Science Foundation, National Basic Research Program, and the National Hi-Tech Research and Development Program.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>/assets/images/chongqing-medical-university-3.jpg" class="img-left">The High-intensity Focused Ultrasonic Therapy System (HIFU), which was initiated by CQMU, is the first large-scale medical equipment system with completely independent intellectual property rights in China. It has been put into use in over 30 major hospitals in China and exported to about 10 foreign countries, such as the EU, Russia, Japan, Korea and Singapore. The university publishes eight academic journals with international distribution. Since 2008, CQMU has twice won the National Prize for Progress in Science and Technology, once won the National Award for Technological Invention once, and won over 80 municipal awards. And there are many international students from India, Indonesia, Republic of the Congo, Mauritius, Vietnam, Pakistan, Nepal, Bangladesh etc.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Fee Structures</h5>
<ul class="tab-panelist">
<li><strong>General Medicine</strong> – 30000 RMB/Year</li>
<li><strong>Hostel Fee</strong> – 5500 RMB/Year</li>
</ul>
</div>
</div>
</div> 
</div>
</div>





<?php include('footer.php');?>
