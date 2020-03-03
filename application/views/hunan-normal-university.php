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
<li class="active">Hunan Normal University</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Hunan Normal University</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>assets/images/hunan-normal-university-1.jpg" class="img-left">Hunan Normal University founded in 1938, is a higher education institution located in Changsha, Hunan Province, People's Republic of China.</p>

<p>The University have five campuses, Hunan Normal University covers a total area of 1.78 km2, with one million square meters of floor space. Most of the campuses are located near the Yuelu Mountain.</p>

<p>The university is divided into 23 colleges, 3 teaching departments, 51 research institutions. The university offers 74 undergraduate programs, 147 master programs, and 55 Ph.D. programs. There are 10 postdoctoral scientific research stations, 13 State Training and Research Bases or Centers and 7 key laboratories, jointly constructed by the Ministry of Education and Hunan Province, on the campus. </p>

<p>Since its founding, the University has educated nearly 300,000 students, including about 4,000 international students and students from Hong Kong, Macau and Taiwan. Currently, over 24,000 undergraduates, 8,000 graduates and 300 international students are studying on campus.</p>

<p>There are 1091 professors and associate professors at the University; among them are one academician of the Chinese Academy of Sciences and one academician of the Chinese Academy of Engineering. The University has invited about 600 scholars and experts to give lectures or conduct scientific research on campus from more than 20 countries since 2,000, and has established relations with over 80 foreign institutions of higher learning for academic exchanges.</p>

<p>The library of HUNNU has a collection of 3.17 million volumes, including 200,000 volumes of old traditional thread binding books, and subscribes 4,700 kinds of Chinese and foreign periodicals. There are 12 academic periodicals distributed to the public at home and abroad. The university has its own publishing house called Hunan Normal University Press. HUNNU highly values the academic exchanges with foreign universities and educational institutions abroad. HUNNU has established relations with nearly 100 foreign institutions of higher education for academic exchange.</p>

<p>HUNNU will be one of the best universities in China for the foreign students to enrich their lives and experiences and achieve their career ambitious.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Why China?</h5>
<ul class="tab-panelist">
<p>Study In China Is Now A Lot Closer Then You Think. The world has become well aware that China's influence in the world economy and global policy is growing.</p>

<p>MBBS (Bachelor of Medicine & Surgery) in China is big trend for International Students right now, Affordable Cost, Peaceful and Beautiful Environment, Advanced Infrastructures, English Medium Teaching. Most Importantly Completing English medium MBBS in China from the Recognized Medical Universities by WHO (World Health Organization) is a well deserved career in Medical field and is Recognized throughout the World.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Tuition Fee</h5>
<ul class="tab-panelist">
<li><strong>General Medicine:</strong> – 16000/year</li>
<li><strong>Hostel Fee:</strong>2500 RMB/Year </li>
</ul>
</div>
</div>

</div> 
</div>
</div>





<?php include('footer.php');?>