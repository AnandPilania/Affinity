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
<li class="active">MCI Screening Test
</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">MCI Screening Test</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?= base_url()?>assets/images/medical-1.jpg" class="img-left">Medical Council of India Screening Test, also known as Foreign Medical Graduates Examination (FMGE), is a licensure examination conducted by the National Board of Examinations (NBE) in India. The test is one of the mandatory requirements for an Indian citizen who has a medical degree from a college outside India, to practice medicine in the country. The other requirement is a compulsory one-year internship at an Indian hospital attached to a medical college (teaching hospital) at MCI recognized hospital or even outside India but internship completion certificate has to counter attested by Indian mission embassy or consulate office there The screening test was introduced in 2002 as a qualifying examination for Indian students obtaining their medical degrees from countries other than India, such as countries belonging to the former Soviet Union, Eastern European countries, China, Nepal, Philippines, and Caribbean countries. Indian doctors holding basic medical degrees from any country have to take the MCI screening test. The Medical School should have been listed in the WHO international directory of Medical Schools. He / She had obtained “Eligibility Certificate' from the Medical Council of India (applicable only in respect to students who took admission abroad on or after 15.03.2002). This requirement shall not be necessary in respect of Indian citizens who have obtained admission in foreign medical institute before 15th March 2002.</p>


</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Introduction</h5>
<ul class="tab-panelist">
<li>The Examination is held twice a year at New Delhi in Month of June and December on last Sunday of the month</li>
<li>The test is conducted in English language</li>
<li>There will be 300 multiple-choice questions (MCQ) of single response type in the paper (Divided in two sittings of 150 questions each).</li>
<li>There is NO negative marking</li>
<li>An applicant shall be declared as having passed only if he/she obtains a minimum of 50% of marks in the examination.</li>
<li>Results (Pass/Fail) for eligible candidates will be displayed at the website and office of NBE. There is no provision for declaration of marks obtained or reevaluation / retotalling.</li>
<li>There are no restrictions on number of attempts that can be availed by an applicant</li>
</ul>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Verification of Document / Credential</h5>
<p>Applicants are required to submit attested (self attested and by Gazette Officer) copies of</p>
<ul class="tab-panelist">
<li>Proof of Date of Birth</li>
<li>Copy of Passport of the applicant/Nationality Proof</li>
<li>10+2 passing certificate and Mark Sheet issued by the respective Board of Examination</li>
<li>Equivalence Certificate : From Association of Indian Universities (for e done 10+2 abroad)</li>
<li>Certificate of Passing Primary Medical Qualification i.e. MBBS or equivalent or equivalent degree certificate with mark sheet. Candidates are required to submit copies of degrees, duly attested by a Gazetted Officer and self-certified. The degrees should be attested either by the Embassy of India or should be Apostilled by the appropriate authority. For details regarding Apostilled documents</li>
<li>Internship Certificate (if done abroad)</li>
<li>Eligibility Certificate issued by MCI (if available) for candidates joined on or after 15.03.2009</li>
<li>Translated copies (in English / Hindi) to be furnished if the certificates are in language other than English / Hindi</li>
</ul>
</div>
</div>
</div>




<?php include('footer.php');?>
