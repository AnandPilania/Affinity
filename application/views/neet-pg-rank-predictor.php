


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


<style>
.form-group {
	padding: 17px 0;;
}
.dropdown-menu {

    z-index: 99999;
}
.col-xs-12.col-md-6.col-sm-6.img-rounded {
	padding: 20px;
}
table, th, td {
  border: 1px solid #ddd;
}
table {
  width: 100%;
}
table th, td {
  padding:7px;
  text-align: left;
}
</style>


  <!-- Wrapper for slides -->
  <div class="padding-TB-50">
  <div class="row">
  <div class="col-md-3"></div>
 <div class="col-xs-12 col-md-6 col-sm-6 img-rounded" style="background-color:#fff;border:2px solid #6141A4;margin-top:25px;">
		<h3 style="background:#11609A;color:#fff;padding:5px;text-align:center;">NEET PG 2020 - Rank Predictor</h3>
		<p id ="amsg" class="text-center"></p> 
		<form class="form-area fixed-form clearfix" id="testform" method="POST" action="<?= base_url('index.php/Welcome/rankinsert')?>">
		<div class="form-group">
      <div class="col-xs-12">
        <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Name" required="">
        <input type="hidden" name="source" value="NEET PG RANK">
        <span class="error"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12">
        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter Email" required="">
        <span class="error"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12">
	  <div class="input-group">
      <div class="input-group-addon">+91</div>	  
        <input type="text" class="form-control" id="mobile" name="phone" value="" placeholder="Enter 10-digits Mobile Number." required="">
        <span class="error"></span>
      </div>
	  </div>
    </div>
    <div class="form-group">
	<div class="col-xs-12">
	<select name="state" id="state" class="form-control">
		<option value="">Select State</option>
			<option value="Andaman and Nicobar">Andaman and Nicobar</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
			<option value="Daman and Diu">Daman and Diu</option>
			<option value="Delhi">Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jammu and Kashmir">Jammu and Kashmir</option>
			<option value="Jharkhand">Jharkhand</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Lakshadweep">Lakshadweep</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya">Meghalaya</option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Odisha">Odisha</option>
			<option value="Pondicherry">Pondicherry</option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim">Sikkim</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Telangana">Telangana</option>
			<option value="Tripura">Tripura</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="Uttarakhand">Uttarakhand</option>
			<option value="West Bengal">West Bengal</option>
			<option value="International">International</option>
			<option value="Other">Other</option>
	</select>
	<span class="error"></span>
      </div>
    </div>
	<div class="form-group">
      <div class="col-xs-12">
        <select name="score" id="score" class="form-control" required="">
		<option value="">Expected NEET score</option>
		<option value="675">675+</option>
		<option value="625">625-675</option>
		<option value="575">575-624</option>
		<option value="525">525-574</option>
		<option value="475">475-524</option>
		<option value="425">425-475</option>
		<option value="375">375-424</option>
		<option value="325">325-374</option>
		<option value="275">275-324</option>
		<option value="225">225-274</option>
		<option value="175">175-224</option>
		<option value="125">125-174</option>
		<option value="75">75-124</option>
		<option value="25">25-74</option>
		<option value="0">0</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-xs-12">
        <center><button type="submit" id="submit-form" class="btn btn-danger" style="padding:7px 25px; font-weight:bold;">CHECK NOW</button></center>
      </div>
    </div>
  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>

 




<section class="padding-TB-30 about-section">
	<div class="container">
		<div class="row">
		
	  <div class="col-sm-12 about-area">
				<p>NEET PG Merit List 2020 - National Board of Examinations (NBE) will release the merit list of NEET PG 2020 in the form of result in the first week of March. NEET PG 2020 merit list will be published in the online mode. Only candidates who will qualify NEET PG entrance examination will be listed in the merit list. NEET PG merit list 2020 will be prepared on the basis of scores obtained in computer based test. NEET PG 2020 rank list will be made available in PDF format and can be downloaded from this page, when released..</p>
				<p>NEET PG merit list will display rank secured, 50% All India Quota (AIQ) rank and 50% All India Quota Category rank of candidates. On the basis of these ranks mentioned in NEET PG 2020 merit list, aspirants will be eligible to participate for NEET PG counselling for AIQ seats which will be conducted by Medical Counselling Committee (MCC). NBE will transfer the prepared merit list to concerned state counselling authorities. A combined as well as category-wise merit list will be prepared by the respective state counselling committees, which will be derived from the merit list of NEET PG 2020. In case of two or more candidates secure equal rank, NBE will resolve the tie using the tie breaking methodology. Candidates can go through the article on NEET PG merit list 2020 to know how to download, types of rank list, tie-breaking method and other details..</p>
				<p>The conducting body, NBE, has announced the exam date of NEET PG 2020, which will be conducted on January 5, in around 148 major cities across India. NEET PG is held for admission to Masters of Surgery (MS), Doctor of Medicine (MD) and PG Diploma seats offered by government, private, deemed, central and ESIC medical colleges of the country..</p>
				<h3>NEET PG Merit List 2020 Dates</h3>
				<p>Candidates can check the important dates related to NEET PG 2020 merit list and other related events from the table below..</p>
				<h4>NEET PG merit list dates</h4>
				<div dir="ltr"><div class="story-responsive"><table><tbody><tr><td><p dir="ltr" style="text-align: justify;"><strong>Events</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>Dates</strong></p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">NEET PG exam</p></td><td><p dir="ltr" style="text-align: justify;">January 5, 2020</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">Declaration of result</p></td><td><p dir="ltr" style="text-align: justify;">By January 31, 2020*</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">Availability of scorecard</p></td><td><p dir="ltr" style="text-align: justify;">First week of February 2020*</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">NEET PG merit list</p></td><td><p dir="ltr" style="text-align: justify;">First week of March 2020*</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">50% All India Quota merit list</p></td><td><p dir="ltr" style="text-align: justify;">First week of March 2020*</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">NEET PG counselling starts</p></td><td><p dir="ltr" style="text-align: justify;">Last week of March 2020*</p></td></tr></tbody></table></div></div>
				<p dir="ltr" style="text-align: justify;"><strong>*dates are tentative</strong></p>
				<h3>How to download NEET PG merit list 2020?</h3>
				<p dir="ltr" style="text-align: justify;">Check the following steps to download the merit list of NEET PG 2020.</p>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;">Click on the link provided on this page, when released.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Candidates need to search their roll numbers in NEET PG 2020 rank list.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Since the merit list will be available in PDF format. Download it future references.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Along with the common merit list, aspirants also have to download NEET PG merit list for 50% All India Quota candidates.</p></li></ul>
				<h3>NEET PG 2020 Merit List - Qualifying Percentile</h3>
				<p>It is mandatory for aspirants to secure minimum NEET PG cutoff 2020 percentile as specified by the authority. NBE releases the category-wise qualifying percentile, which are available in the table below. The marks corresponding to qualifying percentile will be released along with the NEET PG result 2020...</p>
				<h4>NEET PG qualifying percentile</h4>
				<div dir="ltr"><div class="story-responsive"><table><tbody><tr><td><p dir="ltr" style="text-align: justify;"><strong>Category</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>NEET PG cutoff percentile</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>NEET PG cutoff scores (2020)</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>NEET PG cutoff scores (2019)</strong></p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">General</p></td><td><p dir="ltr" style="text-align: justify;">50th</p></td><td><p dir="ltr" style="text-align: justify;">To be available soon</p></td><td><p dir="ltr" style="text-align: justify;">340</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">SC/ST/OBC</p></td><td><p dir="ltr" style="text-align: justify;">40th</p></td><td><p dir="ltr" style="text-align: justify;">To be available soon</p></td><td><p dir="ltr" style="text-align: justify;">295</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">General-PH</p></td><td><p dir="ltr" style="text-align: justify;">45th</p></td><td><p dir="ltr" style="text-align: justify;">To be available soon</p></td><td><p dir="ltr" style="text-align: justify;">317</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">SC/ST/OBC-PH</p></td><td><p dir="ltr" style="text-align: justify;">40th</p></td><td><p dir="ltr" style="text-align: justify;">To be available soon</p></td><td><p dir="ltr" style="text-align: justify;">295</p></td></tr></tbody></table></div></div>
				<h3>Types of NEET PG Merit List 2020</h3>
				<p>NBE will release the following types of NEET PG 2020 merit list</p>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;"><strong>NEET PG merit rank: </strong>This list will include the roll numbers of candidates who will appear for entrance examination. Aspirants will be allotted a rank as per their qualifying status.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;"><strong>50% All India Quota rank: </strong>This list includes the candidates who have qualified the test and are eligible for counselling of 50% All India Quota seats. Candidates belonging to the state of Jammu and Kashmir will not be included in the NEET PG 2020 merit list.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;"><strong>All India 50% Category rank:</strong> It is a category-wise merit list mentioning NEET PG 2020 rank of aspirants as per their respective categories. This merit rank will be valid only for 50% All India Quota seats.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;"><strong>State/Union Territories NEET PG merit list 2020: </strong>The respective state/UTs state counselling committees will derive separate PG medical merit list on the basis of NEET PG 2020 merit list. This merit list will be used for admission to 50% state quota seats and all seats in private colleges.</p></li></ul>
				<h3>NEET PG 2020 Merit List - Tie-breaking procedure</h3>
				<p>In case, if the scores of two or more candidates will be equal, the authority will determine the following tie-breaking procedures to resolve the issues.</p>
				<p dir="ltr" style="text-align: justify;"><strong>Tie-breaking mechanism</strong></p>
				<div dir="ltr"><div class="story-responsive"><table><tbody><tr><td><p dir="ltr" style="text-align: justify;"><strong>S. No.</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>Tie-breaking procedure</strong></p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">1.</p></td><td><p dir="ltr" style="text-align: justify;">Candidates with less number of negative responses in Part A+B+C will be placed at higher rank.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">2.</p></td><td><p dir="ltr" style="text-align: justify;">Aspirants with higher marks in Part C will be awarded higher mark.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">3.</p></td><td><p dir="ltr" style="text-align: justify;">Candidates with lesser number of responses in Part C will be given better rank.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">4.</p></td><td><p dir="ltr" style="text-align: justify;">Higher marks in Part B of paper will be placed better rank.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">5.</p></td><td><p dir="ltr" style="text-align: justify;">Lesser number of negative responses in Part B will be given better rank than others.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">6.</p></td><td><p dir="ltr" style="text-align: justify;">Higher marks in Part A of NEET PG will be considered to be placed higher than remaining.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">7.</p></td><td><p dir="ltr" style="text-align: justify;">Less negative answers in Part A of the online exam will be given better rank.</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">8.</p></td><td><p dir="ltr" style="text-align: justify;">Candidates older in age will be awarded higher rank.</p></td></tr></tbody></table></div></div>
				<h3>NEET PG Counselling 2020</h3>
				<p dir="ltr" style="text-align: justify;">Directorate General of Health Services (DGHS) on behalf of Medical Counselling Committee (MCC) will conduct NEET PG 2020 counselling rounds for admission to 50% AIQ, all seats in deemed/central universities, ESIC and AFMC colleges. The counselling of NEET PG 2020 will be organised in three rounds, in which the third round will be conducted for deemed/central and ESIC colleges only.</p>
				<p dir="ltr" style="text-align: justify;">While the counselling for respective states will be done by their committees on the basis of NEET PG state wise merit list 2020. The state-wise counselling will be held for admission to the remaining 50% state quota seats and all seats in private medical colleges located in the particular state.</p>
			</div>

		<div></div>
		</div>
	</div>
</section>

<?php include('footer.php');?>


