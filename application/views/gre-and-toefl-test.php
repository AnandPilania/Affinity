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
<li class="active">TOEFL

</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">TOEFL</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p>TOEFL test is the most widely respected English-language test in the world, recognized by more than 8,500 colleges, universities and agencies in more than 130 countries, including Australia, Canada, the U.K. and the United States. Wherever you want to study, the TOEFL test can help you get there.</p>

<p>The TOEFL test, administered via the Internet, is an important part of your journey to study in an English-speaking country. In addition to the test, the ETS TOEFL Program provides tools and guides to help you prepare for the test and improve your English-language skills.</p>

<p>The TOEFL test measures your ability to use and understand English at the university level. And it evaluates how well you combine your listening, reading, speaking and writing skills to perform academic tasks.</p>

<p>There are two formats for the TOEFL test. The format you take depends on the location of your test center.</p>

<p>The TOEFL test has more test dates (more than 50 per year) and locations (4,500 test centers in 165 countries) than any other English-language test in the world. You can retake the test as many times as you wish.</p>

<p>The cost of the test can range from US$160 to US$250 and varies between countries. For information on registration, fees, test dates, locations and formats More than 27 million people from all over the world have taken the TOEFL test to demonstrate their English-language proficiency. The average English skill level ranges between Intermediate and Advanced.</p>

</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">How do I register for the test?</h5>
<ul class="tab-panelist">
<li>Students planning to study at a higher education institution</li>
<li>English-language learning program admissions and exit</li>
<li>Scholarship and certification candidates</li>
<li>English-language learners who want to track their progress</li>
<li>Students and workers applying for visas</li>
</ul>
</div>
</div>

</div> 
</div>
</div>




<?php include('footer.php');?>
