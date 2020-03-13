


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

<style type="text/css">
  .global-area
  {
    margin-bottom: 20px;
  }
</style>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0px;">
      <a class="logo" href="http://affinityeducation.in"><img src="<?= base_url()?>assets/images/logo/web-logo1.png"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="margin-left: auto!important;">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-size:15px;margin:0px 5px;margin:0px 5px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px;margin:0px 5px;">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">
          Medical
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">UG</a>
          <a class="dropdown-item" href="#">PG</a>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">
          Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">MBA India</a>
          <a class="dropdown-item" href="#">MBA Abroad</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px;margin:0px 5px;">Engineering</a>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">
          Rank predictor 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
        
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px;margin:0px 5px;">Contact Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px;margin:0px 5px;">Apply Now</a>
      </li>
    
    </ul>
   
  </div>
</nav> -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <?php 
    $i=1;
     foreach ($banner as $banner)
     {

    ?>
    <div class="carousel-item <?php if($i==1){ echo "active"; }?>">
     <a href="<?= $banner->link?>" target="_blank"> <img src="<?= base_url()?>upload/<?= $banner->image?>" class="d-block w-100" alt="..."> </a>
    </div>


<?php
$i++;
}

?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="news-update">
  <div class="container-fluid">
    <div class=" row main-wrap-area">
      <div class="col-lg-2 col-md-12 col-sm-12 padding-LR">
        <div class="news-wrapper">
          <h3>News Update</h3>
        </div>
      </div>
    <div class="col-lg-10 col-md-12 col-sm-12 padding-LR">
        <div class="news dec-a">
          <marquee  behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
          <?php 
             foreach ($news as $news) {
           ?>
          <a href="<?= $news->link?>" target="_blank" class="colr" style="text-decoration: none;"> &nbsp;<?= $news->title?>,&nbsp;</a> 
          <?php
        }
        ?>
          </marquee>     
        </div>
      </div>
    </div>
  </div>
</section>



<section class="padding-TB-30 about-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 welcome-img-area">
        <img src="<?= base_url()?>assets/images/Welcome22.jpg" class="img-responsive">     </div>
    <div class="col-sm-8 about-area">
        <h3 class="heading text-center" style="font-weight: bold;color: #29166F;">About Our services</h3>
          <h4 class="text-justify" style="font-size:15px;line-height:20px"> <b> Affinity Education Consultants (AEC) </b> is one of the trusted and professional consultancies to help Indian students to MBBS admission in abroad. We believe in honesty and our mission is to provide the best consultant and support. We inform you of all the details about the institute you seek and also help you take admission in the best university.  

We are providing our services since 2008 and we feel proud to say that AEC provides hustle free admission support for Abroad and in India. AEC is available in almost all the cities of India. Also, in this technology era, we are at your service through our website, Social media handles and Phone calls. 

Affinity Education Consultants created an impressive profile and trust in the education consulting industry. We sent your bright kids in foreign countries like Russia, China, and the Philippines and so on for medical studies. We offer right and authentic guidance for the Indian students and their parents to make the right selection of college in their budget.

We have a remarkable record of admission in top institutes approved by MCI (Medical Council of India) in foreign. We guarantee the admission if you meet the eligibility and document done on time. 
 </h4>
      </div>

    <div></div>
    </div>
  </div>
</section>

<section class="flag padding-TB-40 information">
  <div class="container">
    <div class="row">
        
        <div class="col-md-6" style="border-right: 1px solid #000;">
          <h3 class="heading" style="font-weight: bold;color: #29166F;">Why Study MBBS in Abroad</h3>
        <p style="font-size: 15px;">MBBS is the most demanding course after engineering in India. Medical studies in India are expensive in the world. Every year many students sit in the entrance exam of top medical institutes, but only some of them get admission in those institutes and the rest of them have to join the private medical colleges. These colleges demand a huge amount in the form of fees, but many of the students cannot afford that. Here, students can go for Study MBBS in Abroad. Many Indian medical students are taking admission in these MCI approved universities in the world.  </p>
        <h4 style="font-weight: bold;">Advantages of Study MBBS in Abroad</h4>
        <ul class="all-li-15 dottedli">
          <li>
            MBBS studies fees are affordable and low than Indian private institute
          </li>
          <li>
            No Admission entrance test is required 
          </li>
          <li>
            World-class infrastructure 
          </li>
          <li>
            Low cost of living
          </li>
          <li>
            Students will get International exposure
          </li>
          <li>
            No donation required to take admission in medical college abroad
          </li>
        </ul>
        <h4><b>These countries are offering Medical degrees equivalent to Indian medical degrees </b> </h4>
        <p style="font-size: 15px;">Nowadays, students from across the world are seeking quality based education at an affordable rate. Students from countries like India, Nepal are choosing Russia, China, Germany, and other countries to study MBBS because the fees are lower than Indian private medical institutes. There are many MCI approved medical colleges in China, Russia, Kyrgyzstan, Bangladesh, Ukraine, Philippines, Georgia, Russia, and Kazakhstan.</p>
        </div>

        <div class="col-md-6" style="padding-left: 7%;">
            <h3 class="heading" style="font-weight: bold;color: #29166F">Why Affinity Education Consultant?</h3>
            <ul class="leftsideli">
              <li><h4>&#8594; AEC offers quality based higher education assistants</h4></li>
              <li><h4>&#8594; Admission in top MCI approved medical institutions </h4></li>
              <li><h4>&#8594; Transparent and honest assistance</h4></li>
              <li> <h4>&#8594;Right and authentic guidance for the right college in your budget.  </h4> </li>
              <li> <h4>&#8594;Guaranteed admission in prestigious colleges, if you are eligible. </h4> </li>
              <li> <h4>&#8594;We provide you the official admission invitation latter direct from <br></h4><h4 style="margin-left:18px;"> university faster than anyone    </h4> </li>
              <li> <h4>&#8594;All the process of Visa and passport </h4> </li>
              <li> <h4>&#8594; Arranging air tickets at affordable price</h4> </li>
              <li> <h4>&#8594;Opening Bank account in city or in campus. </h4> </li>
              <li> <h4>&#8594; Numerous happy students </h4> </li>
              <li> <h4>&#8594; MBBS Admission application assistance   </h4> </li>
              <li> <h4>&#8594; Assistance for Foreign exchange from authorized dealers of India.  </h4> </li>
              <li> <h4>&#8594; Campus support in University </h4> </li>
              <li> <h4>&#8594; Staying arrangement in foreign countries for students</h4> </li>
            </ul>
        </div>
        <!-- <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/Australia-home-flag.jpg" class="img-responsive">
        <p><strong>Study in Australia</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/canada-home-flag.jpg" class="img-responsive"><p><strong>Study in Canada</strong></p></div>
        
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/france-home-flag.jpg" class="img-responsive"><p><strong>Study in France</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/germany-home-flag.jpg" class="img-responsive"><p><strong>Study in Germany</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/hong-kong-home-flag.jpg" class="img-responsive"><p><strong>Study in Hong Kong</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/India-home-flag.jpg" class="img-responsive"><p><strong>Study in India</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/ireland-home-flag.jpg" class="img-responsive"><p><strong>Study in Ireland</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/Italy-home-flag.jpg" class="img-responsive"><p><strong>Study in Itlay</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/malaysia-home-flag.jpg" class="img-responsive"><p><strong>Study in Malaysia</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/mauritius-home-flag.jpg" class="img-responsive"><p><strong>Study in Mauritius</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/newZealand-home-flag.jpg" class="img-responsive"><p><strong>Study in New Zeland</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/philipines-home-flag.jpg" class="img-responsive"><p><strong>Study in Philippines</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/singapore-home-flag.jpg" class="img-responsive"><p><strong>Study in Singapore</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/spain-home-flag.jpg" class="img-responsive"><p><strong>Study in Spain</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/swtz-home-flag.jpg" class="img-responsive"><p><strong>Study in Switzerland</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/UAE-home-flag.jpg" class="img-responsive"><p><strong>Study in Dubai</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/uk-home-flag.jpg" class="img-responsive"><p><strong>Study in UK</strong></p></div>
        <div class="col-md-2 col-xs-6"><img src="<?= base_url()?>assets/images/flag/USA-home-flag.jpg" class="img-responsive"><p><strong>Study in USA</strong></p></div>
         -->
        </div>
  </div>
</section>

<section class="">
  <div class="container-fluid" style="padding:0">
    <div class="row">
        <div class="col-md-12">
        <div class="medical-school" style="width: 100%;">
        <div class="medical-school-box">
        <h4 title="China university with minimum fee structure" style="text-align: center;">Medical University</h4>
        <div class="asia-link-box">
        <div class="col-md-2">
        <h5>Asia</h5>
        </div>
        <div class="col-md-10 col-xs-12">
        <div class="col-md-3 col-xs-6" style="padding:0;">
        <ul>
    <li><a href="<?= base_url('index.php/Welcome/studymedicalinchina')?>" target="_blank"><i class="fa fa-angle-right"></i> China</a></li>
    <li><a href="<?= base_url('index.php/Welcome/graduatemedicalcoursesinrussia')?>" target="_blank"><i class="fa fa-angle-right"></i> Russia</a></li>
    <li><a href="<?= base_url('index.php/Welcome/medicalschoolsingeorgia')?>" target="_blank"><i class="fa fa-angle-right"></i> Georgia</a></li>
      </ul>
      </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
        <ul>
    <li><a href="<?= base_url('index.php/Welcome/nepalmbbsadmission')?>" target="_blank"><i class="fa fa-angle-right"></i>Nepal</a></li>
    <li><a href="<?= base_url('index.php/Welcome/mbbsadmissioninindia')?>" target="_blank"><i class="fa fa-angle-right"></i>India</a></li>
    <li><a href="<?= base_url('index.php/Welcome/medicineeducationphilippines')?>" target="_blank"><i class="fa fa-angle-right"></i>Philippines</a></li>
      </ul>
      </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
        <ul>
    <li><a href="<?= base_url('index.php/Welcome/kyrgyzstanmbbsadmissions')?>" target="_blank"><i class="fa fa-angle-right"></i>Kyrgyzstan</a></li>
    <li><a href="<?= base_url('index.php/Welcome/studymedicalinbangladesh')?>" target="_blank"><i class="fa fa-angle-right"></i>Bangladesh</a></li>
    <li><a href="<?= base_url('index.php/Welcome/studymedicineinsingapore')?>" target="_blank"><i class="fa fa-angle-right"></i>Singapore</a></li>
      </ul>
      </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
    <ul>
      <li><a href="<?= base_url('index.php/Welcome/mbbsadmissionskazakhstan')?>" target="_blank"><i class="fa fa-angle-right"></i>Kazakhstan</a></li>
    <li><a href="<?= base_url('index.php/Welcome/mbbsadmissionsmalaysia')?>" target="_blank"><i class="fa fa-angle-right"></i>Malaysia</a></li>
        </ul>   
        </div>

        </div>
      </div>
        
        <div class="asia-link-box">
        <div class="col-md-2">
        <h5>Europe</h5>
        </div>
        <div class="col-md-10 col-xs-12">
        <div class="col-md-3 col-xs-6" style="padding:0;">
    <ul>
    <li><a href="<?= base_url('index.php/Welcome/slovakia')?>" target="_blank"><i class="fa fa-angle-right"></i>Slovakia</a></li>
    <li><a href="<?= base_url('index.php/Welcome/mbbsinukraineadmission')?>" target="_blank"><i class="fa fa-angle-right"></i>Ukraine</a></li>
    <li><a href="<?= base_url('index.php/Welcome/studymbbsbdsmdromania')?>" target="_blank"><i class="fa fa-angle-right"></i>Romania</a></li>
      </ul>     
        </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
      <ul>
        <li><a href="<?= base_url('index.php/Welcome/mbbsinbelaruseurope')?>" target="_blank"><i class="fa fa-angle-right"></i>Belarus</a></li>
        <li><a href="<?= base_url('index.php/Welcome/scholarshipsformbbsinspain')?>" target="_blank"><i class="fa fa-angle-right"></i>Spain</a></li>
        <li><a href="<?= base_url('index.php/Welcome/mbbsmedicalcollegesinfrance')?>" target="_blank"><i class="fa fa-angle-right"></i>France</a></li>
        </ul>
        </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
    <ul>
      <li><a href="<?= base_url('index.php/Welcome/studymbbsengland')?>" target="_blank"><i class="fa fa-angle-right"></i>UK</a></li>
      <li><a href="<?= base_url('index.php/Welcome/mbbsdegreenetherlands')?>" target="_blank"><i class="fa fa-angle-right"></i>Netherlands</a></li>
      <li><a href="<?= base_url('index.php/Welcome/mbbseuropelithuania')?>" target="_blank"><i class="fa fa-angle-right"></i>Lithuania</a></li>
      </ul>     
        </div>
        
        <div class="col-md-3 col-xs-6" style="padding:0;">
    <ul class="width-king-2">
      <li><a href="<?= base_url('index.php/Welcome/mbbsadmissionsinitaly')?>" target="_blank"><i class="fa fa-angle-right"></i>Italy</a></li>
      <li><a href="<?= base_url('index.php/Welcome/mbbsmdmsbulgaria')?>" target="_blank"><i class="fa fa-angle-right"></i>Bulgaria</a></li>
      <li><a href="<?= base_url('index.php/Welcome/mbbsadmissionireland')?>" target="_blank"><i class="fa fa-angle-right"></i>Ireland</a></li>
      </ul>        
        </div>

        </div>
      </div>
         
        <div class="country-box row" style="display:flex;">
        <div class="col-md-12">
        <h5>South America</h5>
        <ul>
        <li><a href="<?= base_url('index.php/Welcome/mbbsmedicineadmissionsguyana')?>" target="_blank"><i class="fa fa-angle-right"></i>Guyana</a></li>
        <li><a href="<?= base_url('index.php/Welcome/mbbsadmissionbrazil')?>" target="_blank"><i class="fa fa-angle-right"></i>Brazil</a></li>
        </ul>
  
        </div>
        <div class="col-md-12">
        <h5>Central America</h5>
        <ul>
<li><a href="<?= base_url('index.php/Welcome/mbbsadmissioninbelizeenindia')?>" target="_blank"><i class="fa fa-angle-right"></i>Belize</a></li>
  </ul>
        </div>
        
      </div>
        
        </div>
        
  
        <div class="mdl-services-box">
        <h4 class="text-center">Services</h4>
        <ul>
        <li><a href="<?= base_url('index.php/Welcome/medicaladmissionservices')?>" target="_blank"><i class="fa fa-angle-right"></i>Medical</a></li>
        <li><a href="<?= base_url('index.php/Welcome/educationconsultancyservice')?>" target="_blank"><i class="fa fa-angle-right"></i>Educational Service</a></li>
        <li><a href="<?= base_url('index.php/Welcome/medicalcouncilofindiascreeningtest')?>" target="_blank"><i class="fa fa-angle-right"></i>MCI Screening Test</a></li>
        <li><a href="<?= base_url('index.php/Welcome/unitedstatesmedicallicensingexamination')?>" target="_blank"><i class="fa fa-angle-right"></i>USMLE</a></li>
        <li><a href="<?= base_url('index.php/Welcome/ukclinicalaptitudetest')?>" target="_blank"><i class="fa fa-angle-right"></i>UKCAT</a></li>
        <li><a href="<?= base_url('index.php/Welcome/ukplab')?>" target="_blank"><i class="fa fa-angle-right"></i>UKPLAB</a></li>
        <li><a href="<?= base_url('index.php/Welcome/greandtoefltest')?>" target="_blank"><i class="fa fa-angle-right"></i>TOEFL</a></li>
        <li><a href="<?= base_url('index.php/Welcome/internationalenglishlanguagetestingsystem')?>" target="_blank"><i class="fa fa-angle-right"></i>IELTS</a></li>
        </ul>
        </div>
        
        <div class="medical-colleges-box">
        
        <h4 class="text-center"> Top Medical Colleges</h4>
        <ul class="text-center">
        <strong>Ukraine</strong><br>
        <li>MBBS fee russia, ukrain & chinaV.N.Karazin Kharkiv National University</li>
        <li>MBBS fee russia, ukrain & chinaIvano-frankovsk State Medical Univesity</li>
        <li>Hebei Medical University MBBS studying in EuropeLugansk State</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
  </div>
</section>

<!-- 
<section class="formal-slide padding-TB-30">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div id="Div1" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?= base_url()?>assets/images/slider-2.png" alt="img">
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="<?= base_url()?>assets/images/slider-3.png" alt="img">
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="<?= base_url()?>assets/images/slider-1.png" alt="img">
      <div class="carousel-caption"></div>
    </div>
  </div>
</div>
      </div>
    <div class="col-sm-4">
        <div class="news-update-area">
        <div class="col-sm-12 text-center news-update-area-border news-update-area-head">
          <h3 class="heading mobile-view">Quick Inquiry</h3>
        </div>
        <div class="form-area fixed-form clearfix">
          <input type="name" placeholder="Name" class="form-control">
          <input type="email" placeholder="E-mail" class="form-control">
          <input type="phone" placeholder="Phone" class="form-control">
          <input type="city" placeholder="City" class="form-control">
          <textarea style="color:#767676 !important;" class="txt-area" placeholder="Query"></textarea>
          <a href="#" class="about-btn hvr-bounce-to-right">Submit</a>        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="padding-TB-20 welcome-affinity" style="background: #fff;">
  <div class="container-fluid">
    <div class=" row">
      <div class="col-md-9">


        <div class="row">

          <div class="col-md-12 text-center" style="padding:10px;">
            <h3 class="heading" style="margin:0">WHY CHOOSE US?</h3>
            <p style="font-size:15px;">Meet Our Skilled Expert Counsellor</p>
          </div>
     <!--  <div class="col-sm-12">
        <div class="col-sm-12 text-center">
          <h3 class="heading">Global Education Services</h3>
        </div>
        <div class="col-sm-6">
          <div class="global-area">
            <img src="<?= base_url()?>assets/images/school1.jpg" alt="school" class="img-responsive">
            <div class="img-content">
              <h4><a href="#">Scholarships</a></h4>
              <p>For many Indian students aspiring for high quality education in the field they choose, study abroad scholarships prove great...</p>
              <a href="#" class="about-btn hvr-bounce-to-right">Read More</a>           </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="global-area">
            <img src="<?= base_url()?>assets/images/visit.jpg" alt="visit" class="img-responsive">
            <div class="img-content">
              <h4><a href="#">University Visits</a></h4>
              <p>For many Indian students aspiring for high quality education in the field they choose, study abroad scholarships prove great...</p>
              <a href="#" class="about-btn hvr-bounce-to-right">Read More</a>           </div>
          </div>
        </div>
      </div> -->
   <div class="col-md-4 text-center">
      <div class="box-wcu" style="border: 1px solid #eee;padding:30px;background:#f9f9f9">
       <div class="wcu-img"> 
       <img src="<?= base_url()?>assets/images/banner/wcu1.png" style="width:58px;">
       </div>
       <div class="WCU-text">
           <h3 style="font-size:20px;font-weight: bold;">Counselling</h3>
           <p style="font-size: 15px;">Reliable counselling & guidance to select the country and the university is the most important service provided by career.</p>
       </div>
   </div>
   </div>
   <div class="col-md-4 text-center">
      <div class="box-wcu" style="border: 1px solid #eee;padding:30px;background:#f9f9f9">
       <div class="wcu-img"> 
       <img src="<?= base_url()?>assets/images/banner/wcu2.png" style="width:58px;">
       </div>
       <div class="WCU-text">
           <h3 style="font-size:20px;font-weight: bold;">Guidance</h3>
           <p style="font-size: 15px;">Guidance to the student is more important than just the admission. Suitable university selection is supported through Guidance sessions!</p>
       </div>
   </div>

   </div>
   <div class="col-md-4 text-center">
     
      <div class="box-wcu" style="border: 1px solid #eee;padding:30px;background:#f9f9f9">
       <div class="wcu-img"> 
       <img src="<?= base_url()?>assets/images/banner/wcu3.png" style="width:58px;">
       </div>
       <div class="WCU-text">
           <h3 style="font-size:20px;font-weight: bold;">Travel</h3>
           <p style="font-size: 15px;">All your travel requirements such as Air Ticket, Visa, Airport pick up & drop to hostel is taken care by us.</p>
       </div>
   </div>

   </div>

  </div>
   </div>

    <div class="col-md-3 col-sm-3">
        <div class="news-update-area">
          <div class="col-sm-12 text-center news-update-area-border">
          <h3 class="heading">News Updates</h3>
        </div>
          <marquee direction="down" scrolldelay="20" onmouseover="this.stop();" onmouseout="this.start();" class="imp-dates">
    <ul class="clearfix">
      <?php
        foreach ($news2 as $news2) 
        {
      ?>
       <li><span class="new-img">
    <img src="<?= base_url()?>assets/images/icons/label-new-red1.png">
        </span>
       <a href="<?= $news2->link?>" target="_blank">
         <span><?= $news2->title?></span>
       </a>
     </li>
     <?php
   }
   ?>

    </ul>
  </marquee>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="padding-TB-30 Preparation">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 class="heading">Test Preparation</h3>
      </div>

      <div class="owl-carousel test-preparation owl-theme">
  

    <div class="item">
      <div class="col-sm-12">
        <div class="global-area">
            <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/schoo1.jpg" alt="schoo1" class="img-responsive">
              <div class="overlap-area">
                <h4><a >GRE</a></h4>
              </div>
            </div>
            
            <div class="img-content">
              <h4><a href="#">Graduate Record Examination</a></h4>
              <p>GRE stands for Graduate Record Examinations. It is a standardised aptitude exam with a pre-defined syllabus. It is one of the most widely accepted admissions tests for graduate and business<br> school...</p>
                     </div>
          </div>
      </div>
    </div> 

   <div class="item">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/book.jpg" alt="book" class="img-responsive">
              <div class="overlap-area">
                <h4><a >GMAT</a></h4>
              </div>
            </div>
          <div class="img-content">
            <h4><a href="#">Graduate Management Admission Test</a></h4>
            <p>GMAT stands for Graduate Management Admission Test. It is a standardised aptitude exam with a pre-defined syllabus and is required for admission to many of the world's leading Business<br> Schools...</p>
                 </div>
        </div>
      </div>
      </div>
      <div class="item">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/bookcase.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area">
                <h4><a >SAT</a></h4>
              </div>
            </div>
          <div class="img-content">
            <h4><a href="#">Scholastic Aptitude Test</a></h4>
            <p>SAT stands for Scholastic Aptitude Test. It is a standardized test with a pre-defined syllabus that is designed to test. It is one of the most widely accepted admissions tests for graduate and business school...</p>
                 </div>
        </div>
      </div>
      </div>

       <div class="item">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/bookcase.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area">
                <h4><a>SAT</a></h4>
              </div>
            </div>
          <div class="img-content">
            <h4><a href="#">Scholastic Aptitude Test</a></h4>
            <p>SAT stands for Scholastic Aptitude Test. It is a standardized test with a pre-defined syllabus that is designed to test. It is one of the most widely accepted admissions tests for graduate and business school...</p>
           
                  </div>
        </div>
      </div>
      </div>

       <div class="item">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/bookcase.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area">
                <h4><a>SAT</a></h4>
              </div>
            </div>
          <div class="img-content">
            <h4><a href="#">Scholastic Aptitude Test</a></h4>
            <p>SAT stands for Scholastic Aptitude Test. It is a standardized test with a pre-defined syllabus that is designed to test. It is one of the most widely accepted admissions tests for graduate and business school...</p>
            </div>
        </div>
      </div>
      </div>

    </div>

    </div>
  </div>

    <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 class="heading">Our Services</h3>
      </div>

 
       <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/mbbsindia.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('PG-India')?>">MBBS India</a></h4>
              </div>
            </div>
              <div class="img-content">
              <p>These institutions may vary from stand-alone colleges that train doctors to conglomerates that offer training related in all aspects of medical care.</p>
              <a href="<?= base_url('PG-India')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>

       <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/mbbsabroad.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('Mbbs-Abroad')?>">MBBS Abroad</a></h4>
              </div>
            </div>
           <div class="img-content">
              <p>We specifically ensure that in whatever you country you want to pursue education is actually available in terms of the potential for success.</p>
              <a href="<?= base_url('Mbbs-Abroad')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>


         <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/msmsindia.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('neet-pg-md-ms')?>">MD MS India</a></h4>
              </div>
            </div>
           <div class="img-content">
              <p>NEET PG is an entrance exam to get MD MS admission courses and different PG diploma courses.</p>
              <a href="<?= base_url('neet-pg-md-ms')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>


            <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/mdmsabroad.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('PG-Abroad')?>" >MD MS Abroad</a></h4>
              </div>
            </div>

            <div class="img-content">
              <p>PG MD MS ABROAD especially in United Kingdom is a dream of many medical practitioners.</p>
              <a href="<?= base_url('PG-Abroad')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>

        <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/engg.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('engineering-in-india')?>">Engineering</a></h4>
              </div>
            </div>

             <div class="img-content">
              <p>Engineering education in India starts after class 12 and is imparted through colleges and universities labelled as engineering colleges.</p>
              <a href="<?= base_url('engineering-in-india')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>

         <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/mbs.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('mba-pgdm-admission')?>">MBA|PGDM India</a></h4>
              </div>
            </div>

                <div class="img-content">
              <p>MBA is the abbreviation for Master of Business Administration is a postgraduate program offered by various B Schools, management institutes and colleges and MBA departments of various Universities in India.</p>
              <a href="<?= base_url('mba-pgdm-admission')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>


             <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/mbaabroad.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="<?= base_url('MBA-Abroad')?>">MBA Abroad</a></h4>
              </div>
            </div>

             <div class="img-content">
              <p>Time is money. So, here’s a 3-minute read to help you decide. Is an MBA degree programme at a business school abroad right for you? Will this key open a successful future career path.</p>
              <a href="<?= base_url('MBA-Abroad')?>" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>

            <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/2.png" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="http://ieltseduversity.in/" target="_blank">Study Abroad</a></h4>
              </div>
            </div>

                <div class="img-content">
              <p>Studying abroad in the United States is for a mobile global education and interculturalawareness building opportunities.Studying abroad is determined in the United States by political rationales of national security and foreign policy.</p>
              <a href="http://ieltseduversity.in/" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>

        </div>
      </div>
      </div>

         <div class="col-md-4">
    <div class="col-sm-12">
        <div class="global-area">
          <div class="relative-img-area">
              <img src="<?= base_url()?>assets/images/services/ok.jpg" alt="bookcase" class="img-responsive">
              <div class="overlap-area" style="display:block;">
                <h4><a href="http://ieltseduversity.in/countries/ielts-coaching/" target="_blank">IELTS Coaching</a></h4>
              </div>
            </div>

                 <div class="img-content">
              <p>We believe that only the best can bring out the best in you. IELTS Eduversity highly experienced & dedicated faculty makes your journey towards an exceptional band score, perfect</p>
              <a href="http://ieltseduversity.in/countries/ielts-coaching/" class="about-btn hvr-bounce-to-right">Read More</a>    
              </div>


        </div>
      </div>
      </div>




    </div>
  </div>

</section>




<!-- 
<section class="education-area padding-TB-40">
  <div class="container">
    <div class="inner-education">
      <h2>The Institute of Education</h2>
      <p> The Institute of Education wide range of international professional and vocational qualifications through its high tech, state of the art teaching centers, strategically located across the country. It offers interesting and innovative programmes blended with industrial experience and practical application that will appeal to the academic community as well as to a range of other sectors in the market place.</p>
      <p>The Institute offers something for everyone, from high school students looking to enhance their academic profile, to experienced practitioners who are seeking to focus on developing new skills, increase their knowledge base and keep up to date with developments within their particular areas of expertise. The Institute of Education also assists those who are looking for a qualification in India that can be used as a stepping-stone or as a pathway to further study overseas as well as those looking to develop their skill set to enhance their career opportunities in today's competitive global market.
                            </p>
    </div>
  </div>
</section> -->




<section class="explaore padding-TB-40">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="explore-right-area">
          <h2 class="text-center">Why To Choose</h2>
          <div class="explore-background"></div>
          <div class="explore-background-content">
            <p class="text-justify" style="font-size:15px;margin: 0;line-height:20px;">This is because overseas schools offer a more flexible learning environment, with a greater focus on improving the student’s soft skills, such as leadership, teamwork and decision-making. Lastly, a small minority of students go abroad to study simply because their parents requested it. A benefit to studying abroad is the opportunity to discover yourself while gaining an understanding of a different culture. Being in a new place by yourself can be overwhelming at times, and it tests your ability to adapt to diverse situations while being able to problem solve.</p>
          </div>
        </div>
      </div>
    <div class="col-sm-6">
        <div class="col-sm-6">
          <div classs="explore-left-area ">
            <img src="<?= base_url()?>assets/images/banner/photo-1454165804606-c3d57bc86b40.jpg" class="img-responsive" alt="desc">
            <div class="area-name">
              <h4> Management</h4>
              <i class="fas fa-tasks pull-right" aria-hidden="true"></i>            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div classs="explore-left-area">
            <img src="<?= base_url()?>assets/images/banner/photo-1532187643603-ba119ca4109e.jpg" class="img-responsive" alt="event">
            <div class="area-name">  
              <h4>Health and Science</h4>
              <i class="fas fa-vials pull-right" aria-hidden="true"></i>            </div>
          </div>
        </div>
        <div class="col-sm-6 margin-T-30">
          <div classs="explore-left-area">
            <img src="<?= base_url()?>assets/images/banner/photo-1521587760476-6c12a4b040da.jpg" class="img-responsive" alt="school2">
            <div class="area-name">
              <h4>Law and Legal Studies</h4>
              <i class="fas fa-gavel pull-right" aria-hidden="true"></i>           </div>
          </div>
        </div>
        <div class="col-sm-6 margin-T-30">
          <div classs="explore-left-area">
            <img src="<?= base_url()?>assets/images/banner/photo-1556761175-b413da4baf72.jpg" class="img-responsive" alt="school3">
            <div class="area-name">
              <h4>Engineering</h4>
              <i class="fa fa-graduation-cap pull-right" aria-hidden="true"></i>            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- <section class="explaore padding-TB-40">
  <div class="container form-container">
    <div class="col-sm-12 text-center">
        <h3 class="heading">Signup for our Newsletter</h3>
      </div>
    <div class="row">
      <div class="col-sm-4 col-xs-12 text-right">
        <div class="form-area">
          <input type="email" placeholder="E-mail" class="">
        </div>
      </div>
    <div class="col-sm-4 col-xs-12 text-center">
        <div class="form-area">
          <input type="Phone" placeholder="Phone" class="">
        </div>
      </div>
    <div class="col-sm-4 col-xs-12">
        <div class="form-area">
          <a href="#" class="btn">Subscribe</a>       </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <div class="counter" data-count="150">0</div>
<div class="counter" data-count="85">0</div>
<div class="counter" data-count="2200">0</div> -->
<section class="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center><h3 class="glow" style="text-transform:uppercase;color: #29166f;font-weight:bold;font-size:35px;padding-bottom:20px;">Affinity Education Consultant ADVANTAGE</h3></center>
      </div>
      <div class="col-md-3 text-center">
            
        <div class="counter-img" style="padding-top:1em;">
          <i class="fas fa-graduation-cap" style="font-size:5em;color:#fff;"></i>
        </div>
        <div  class="counter1" data-count="650" style="font-size:50px;padding:0.5em;color:#fff;font-weight:bold;">0</div>
        <div class="counter-title">
          <h4 style="color:#fff;"> UNIVERSITY CONNECTIONS </h4>
        </div>
      </div>
      <div class="col-md-3 text-center">
         <div class="counter-img" style="padding-top:1em;">
          <i class="fas fa-search-location" style="font-size:5em;color:#fff;"></i>
        </div>
        <div class="counter1" data-count="25" style="font-size: 50px;padding:0.5em;color:#fff;font-weight:bold;">0</div>
        <div class="counter-title">
          <h4 style="color:#fff;"> TOP DESTINATION COVERED  </h4>
        </div>
      </div>
      <div class="col-md-3 text-center">
         <div class="counter-img" style="padding-top:1em;">
          <i class="fas fa-star" style="font-size:5em;color:#fff;"></i>
        </div>
        <div class="counter1" data-count="99" style="font-size: 50px;padding:0.5em;color:#fff;font-weight:bold;">0</div>
        <div class="counter-title">
          <h4 style="color:#fff;"> PERCENT ADMISSION SUCCES RATE  </h4>
        </div>
      </div>
      <div class="col-md-3 text-center"> 
         <div class="counter-img" style="padding-top:1em;">
          <i class="fas fa-atom" style="font-size:5em;color:#fff;"></i>
        </div>
        <div class="counter1" data-count="12" style="font-size: 50px;padding:0.5em;color:#fff;font-weight:bold;">0</div>
        <div class="counter-title">
          <h4 style="color:#fff;"> YEARS EXPERIENCE  </h4>
        </div>
      </div>
    </div>
  </div>
</section>
 
<section class="testmonial" style="padding:50px;">

  <h3 style="font-size: 30px;text-align: center;font-weight: bold;color:#29166f;padding:50px;padding-top:0;">Testmonial</h3>


<div class="owl-carousel testmonial-owl owl-theme">

    <div class="item text-center">
     <p style="text-align: left;margin: 0;">   <i class="fas fa-quote-left"></i><p>
      <div class="testmonial-text">
        <p style="font-size:14px;text-align:center;margin:0;padding:0px 50px;"> <i>Hi, My name is Sachin Viswakarma and I am from jaunpur (UP). I am going to study in the Hubei Medical University with the help of Affinity Education Consultant. Thank you so much AEC. </i> </p>
      </div>
      <p style="text-align: right;margin:0;">   <i class="fas fa-quote-right" style="transform: rotateX(180deg);"></i> <p>

      <div class="testimonial-title">
        <h5 style="font-size:16px;text-align: center;margin: 0;font-weight: bold;"> <i>Sachin Viswakarma (China)</i></h5>
      </div>

    </div>

    <div class="item text-center">
         <p style="text-align: left;margin: 0;">   <i class="fas fa-quote-left"></i><p>

      <div class="testmonial-text">

        <p style="font-size:14px;text-align:center;margin:0;padding:0px 50px;"> <i> I would like to say thank you to the Affinity Education Consultant for helping me to get admission in Soochow University. I am satisfied with the services of AEC. </i> </p>
      </div>
            <p style="text-align: right;margin:0;">   <i class="fas fa-quote-right" style="transform: rotateX(180deg);"></i> <p>

      <div class="testimonial-title">
        <h5 style="font-size:16px;text-align: center;margin: 0;font-weight: bold;"> <i>Naina Jaiswal (China)</i></h5>
      </div>

    </div>

     <div class="item text-center">
         <p style="text-align: left;margin: 0;">   <i class="fas fa-quote-left"></i><p>


      <div class="testmonial-text">
        <p style="font-size:14px;text-align:center;margin:0;padding:00px 50px;"> <i>Affinity Education Consultant is one of the best consultancy if you are looking for study MBBS in abroad. Currently, I am studying at Kiev University (Ukraine). Thank you Affinity!! </i> </p>
      </div>

            <p style="text-align: right;margin:0;">   <i class="fas fa-quote-right" style="transform: rotateX(180deg);"></i> <p>

      <div class="testimonial-title">
        <h5 style="font-size:16px;text-align: center;margin: 0;font-weight: bold;"> <i> MD. Amaan Khan (Ukraine) </i></h5>
      </div>

    </div>

     <div class="item text-center">
     <p style="text-align: left;margin: 0;">   <i class="fas fa-quote-left"></i><p>
      <div class="testmonial-text">
        <p style="font-size:14px;text-align:center;margin:0;padding:0px 50px;"> <i>Hi, My name is Sachin Viswakarma and I am from jaunpur (UP). I am going to study in the Hubei Medical University with the help of Affinity Education Consultant. Thank you so much AEC. </i> </p>
      </div>
      <p style="text-align: right;margin:0;">   <i class="fas fa-quote-right" style="transform: rotateX(180deg);"></i> <p>

      <div class="testimonial-title">
        <h5 style="font-size:16px;text-align: center;margin: 0;font-weight: bold;"> <i>Sachin Viswakarma (China)</i></h5>
      </div>

    </div>


  

 
</div>


</section>

<!-- <section class="partners-area">
  <div class="container">
    <div class="row">
      <marquee >
        <img src="<?= base_url()?>assets/images/icons/topc1.jpg">
        <img src="<?= base_url()?>assets/images/icons/topc2.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc3.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc4.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc5.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc6.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc7.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc8.jpg">&nbsp;&nbsp;
        <img src="<?= base_url()?>assets/images/icons/topc9.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc10.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc11.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc12.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc13.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc14.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc15.jpg">&nbsp;&nbsp;
       <img src="<?= base_url()?>assets/images/icons/topc16.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc17.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc18.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc19.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc20.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc21.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc22.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc23.jpg">&nbsp;&nbsp;
      <img src="<?= base_url()?>assets/images/icons/topc24.jpg">&nbsp;&nbsp;
        </marquee>
    </div>
  </div>
</section> -->
<?php include('footer.php');?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if($this->session->flashdata('contactalt'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Submit Successfully" ,  "success" )


</script>
<?php
}
?>



<?php
if($this->session->flashdata('inquiry_alt'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Inquiry Submitted" ,  "success" )


</script>
<?php
}
?>



<?php
if($this->session->flashdata('rank_alt'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Inquiry Submitted" ,  "success" )


</script>
<?php
}
?>

