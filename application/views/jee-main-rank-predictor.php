
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
		<h3 style="background:#11609A;color:#fff;padding:5px;text-align:center;">JEE MAIN - Rank Predictor</h3>
		<p id ="amsg" class="text-center"></p> 
  <form class="form-area fixed-form clearfix" id="testform" method="POST" action="<?= base_url('index.php/Welcome/rankinsert')?>">
    <div class="form-group">
      <div class="col-xs-12">
        <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Name" required="">
        <input type="hidden" name="source" value="JEE MAIN RANK">
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
		<option value="">Expected JEE Main score</option>
		<option value="325">325+</option>
		<option value="300">300-325</option>
		<option value="275">275-300</option>
		<option value="250">250-275</option>
		<option value="225">225-250</option>
		<option value="200">200-225</option>
		<option value="175">175-200</option>
		<option value="150">150-175</option>
		<option value="125">125-150</option>
		<option value="100">100-125</option>
		<option value="75">75-100</option>
		<option value="50">50-75</option>
		<option value="25">25-50</option>
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
				<p>JEE Main Rank Predictor 2020 - Do you want to predict your rank in JEE Main 2020? Have you appeared for JEE Main exam? Candidates are eagerly searching in the websites to know about JEE main 2020 rank predictor tool. It is just a unique tool that predicts the possible rank using past data and trends. The rank predictor of JEE Main 2020 is very easy to use. The rank predictor will predict your rank even before the declaration of the JEE Main result 2020 for both Paper 1 and Paper 2. All candidates have to provide their details and scores to use the JEE rank predictor 2020. The tool will show the probable rank secured by the candidates in JEE Main examination. The step by step procedure to use the JEE Main rank predictor 2020 is given in this article.</p>
				<p><b>Important</b> - Candidates can participate JEE Main 2020 twice a year i.e. January and April. The higher one of the two scores will be considered for the purpose of ranking as per the regulations given by the exam authorities. For admissions, states like Madhya Pradesh, Odisha, Haryana, Bihar, Uttarakhand, Nagaland and Jharkhand and many other private institutes use JEE Main 2020 rank. However, the eligibility criteria for admission will be notified by the exam authorities.</p>
				<h3>How to use JEE Main 2020 Rank Predictor Tool</h3>
				<p>Candidates will have to register first to access the JEE Main rank predictor 2020. After the completion of registration process, they will have to provide details includes expected marks, JEE Main 2020 session, category and the 12th class passing year. Once all the required details have been entered, they need to click on “Predict Now” button for JEE Main 2020 rank predictor to function and predict the probable rank.</p>
				<h4>Steps to use JEE Main 2020 Rank Predictor</h4>
				<p>Candidates can check the steps given below to know about how to use rank predictor of JEE Main 2020</p>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;">Step-1: Registration process</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Step-2: Entering the required details for JEE Main rank predictor 2020</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Step-3: The probable result will appear in the display</p></li></ul>
				<h3>How to register for JEE Main Rank Predictor 2020</h3>
				<p dir="ltr" style="text-align: justify;">Aspirants will have to register before accessing the rank predictor of JEE Main 2020. They need to submit all required information for registration includes name, mobile number and email id. Candidates can also perform registration process by using their Facebook or Google account.</p>

				<h3>Details needed for JEE Main 2020 rank predictor</h3>
				<p>Candidates can the rank predictor of JEE Main 2020 only after the completion of registration process</p>
				<h4>NEET PG qualifying percentile</h4>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;">Select a category from the drop-down menu</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Enter the expected marks in JEE Main 2020</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Mention JEE Main application number and date of birth</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Choose the year of passing Class XII</p></li></ul>
				<h3>Result of JEE Main Rank Predictor 2020</h3>
				<p>NBE will release the following types of NEET PG 2020 merit list</p>
				<p>Finally, they will have to click on the “Predict Now” button to view the result of JEE 2020 Main Rank Predictor on the screen</p>
				<p>Information mentioned on the JEE Main 2020 rank predictor</p>
				<p>The following are the details to be mentioned on the result screen of rank predictor</p>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;">Qualifying status of JEE Advanced 2020</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Possible rank that the candidates would get based on the category</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Eligibility of the candidates for admission to NITs, IIITs &amp; GFTIs.</p></li></ul>
				<h3>JEE Main - Marks vs Ranks</h3>
				<p>Aspirants can check the table available below to get the probable ranks that they are expecting based on their obtained marks in JEE Main 2020. The data has been gathered from several candidates. However, they will have to remember that the data is indicative in nature.</p>
				<div dir="ltr"><div class="story-responsive"><table><tbody><tr><td><p dir="ltr" style="text-align: justify;"><strong>Marks</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>Minimum Rank</strong></p></td><td><p dir="ltr" style="text-align: justify;"><strong>Maximum Rank</strong></p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">350 to 360</p></td><td><p dir="ltr" style="text-align: justify;">1</p></td><td><p dir="ltr" style="text-align: justify;">5</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">341 to 351</p></td><td><p dir="ltr" style="text-align: justify;">5</p></td><td><p dir="ltr" style="text-align: justify;">30</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">321 to 340</p></td><td><p dir="ltr" style="text-align: justify;">31</p></td><td><p dir="ltr" style="text-align: justify;">70</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">301 to 320</p></td><td><p dir="ltr" style="text-align: justify;">71</p></td><td><p dir="ltr" style="text-align: justify;">370</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">281 to 300</p></td><td><p dir="ltr" style="text-align: justify;">371</p></td><td><p dir="ltr" style="text-align: justify;">800</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">261 to 280</p></td><td><p dir="ltr" style="text-align: justify;">801</p></td><td><p dir="ltr" style="text-align: justify;">1700</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">241 to 260</p></td><td><p dir="ltr" style="text-align: justify;">1701</p></td><td><p dir="ltr" style="text-align: justify;">3000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">221 to 240</p></td><td><p dir="ltr" style="text-align: justify;">3001</p></td><td><p dir="ltr" style="text-align: justify;">5200</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">201 to 220</p></td><td><p dir="ltr" style="text-align: justify;">5201</p></td><td><p dir="ltr" style="text-align: justify;">8600</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">181 to 200</p></td><td><p dir="ltr" style="text-align: justify;">8601</p></td><td><p dir="ltr" style="text-align: justify;">13600</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">161 to 180</p></td><td><p dir="ltr" style="text-align: justify;">13601</p></td><td><p dir="ltr" style="text-align: justify;">21000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">141 to 160</p></td><td><p dir="ltr" style="text-align: justify;">21001</p></td><td><p dir="ltr" style="text-align: justify;">31800</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">121 to 140</p></td><td><p dir="ltr" style="text-align: justify;">31801</p></td><td><p dir="ltr" style="text-align: justify;">48800</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">101 to 121</p></td><td><p dir="ltr" style="text-align: justify;">4880</p></td><td><p dir="ltr" style="text-align: justify;">73700</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">81 to 100</p></td><td><p dir="ltr" style="text-align: justify;">73701</p></td><td><p dir="ltr" style="text-align: justify;">172000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">61 to 80</p></td><td><p dir="ltr" style="text-align: justify;">172001</p></td><td><p dir="ltr" style="text-align: justify;">206000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">41 to 60</p></td><td><p dir="ltr" style="text-align: justify;">206001</p></td><td><p dir="ltr" style="text-align: justify;">388000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">21 to 40</p></td><td><p dir="ltr" style="text-align: justify;">388001</p></td><td><p dir="ltr" style="text-align: justify;">734000</p></td></tr><tr><td><p dir="ltr" style="text-align: justify;">1 to 20</p></td><td><p dir="ltr" style="text-align: justify;">734001</p></td><td><p dir="ltr" style="text-align: justify;">1029000</p></td></tr></tbody></table></div></div>
				<h3>Highlights for JEE Main Rank Predictor 2020</h3>
				<ul><li dir="ltr"><p dir="ltr" style="text-align: justify;">Candidates can get the colleges list in which they would get the B.Tech admissions.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">The rank shown by the predictor tool is indicative which is based on the inputs that are provided by the candidates in the tool.</p></li><li dir="ltr"><p dir="ltr" style="text-align: justify;">Students will get the different result of JEE Main 2020 after the completion of registration process JEE Main 2020 rank predictor.</p></li></ul>
			</div>

		<div></div>
		</div>
	</div>
</section>


<?php include('footer.php');?>
