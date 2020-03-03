
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
<li><a href="<?=base_url()?>">Home</a></li>
<li><a href="<?=base_url('Welcome/graduatemedicalcoursesinrussia')?>">Russia</a></li>
<li class="active">Kazan Federal University
</li>
</ol>
<div class="abt-details">
<h4 class="tabpane-head1">Kazan Federal University
</h4>
<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<p><img src="<?=base_url()?>assets/images/kazan-federal-university-thumbs-1.jpg" class="img-left">Kazan Federal University is located in Kazan, Tatarstan,Russia. KFU was founded in 1804 as Kazan Imperial University and the first students, enrolled in 1805, It is the second oldest university in Russia. The University is known as the birthplace of organic chemistry due to works by Aleksandr Butlerov, Vladimir Markovnikov, Aleksandr Arbuzov, and the birthplace of Electron Spin Resonance discovered by Evgeny Zavoisky. </p>

<p>Kazan University received the federal status in 2010. It is also one of 15 Russian universities that were selected to participate in 5-100 Russian Academic Excellence Project coordinated by the Government of the Russian Federation and aimed to improve their international competitiveness among the world’s leading research and educational centers.KFU have 16 Institutes, 3 Higher Schools, Faculty of Law, and 2 regional branches. Currently (2015-2016 academic year), about 3000 international students are studying in KFU on different academic programmes and total More than 40,000 students enrolled in 479 degree programs at undergraduate and postgraduate level. The University also has two branches in Naberezhnye Chelny and Yelabuga. </p>

<p><img src="<?=base_url()?>assets/images/kazan-federal-university-thumbs-1.jpg" class="img-left">The university offers the majority of its programs in Russian. Prospective students who do not speak Russian are required to participate in a one-year language training course at KFU International Preparatory School. Teaching in English is provided for several programs throughout the university at Specialist and Master Levels. Research priority areas are concentrated on biomedicine and pharmaceutics, oil extraction, oil refining and petro chemistry, informational communication and aerospace technologies, advanced materials, and social sciences along with humanities. </p>

<p>The Main Campus of Kazan Federal University located in Kazan is divided into 16 Institutes, 3 Higher Schools and 2 Faculties. KFU has partner agreements with approximately 190 universities and research centers from more than 53 countries all over the world. Today Kazan Federal University is a dynamic modern University actively participating in local and international cooperation, networking with academia and industry, boosting the region's human resources development as well as top-level research and innovation in different areas. 17 Centers of excellence and 80 world-class research and teaching laboratories have been established in recent years.</p>

<p><img src="<?=base_url('')?>assets/images/kazan-federal-university-thumbs-1.jpg" class="img-left">Institute of Fundamental Medicine and Biology (IFMB) is one of the most intensively developing institutes of Kazan Federal University, There is the Biomedical Center of Collective Use which includes Genomic Center, Proteomic Center, Laboratory of Neurobiology, Biobank, Center of biomedical microscopy, Vivarium, Clinical and Diagnostic Laboratory, Pharmacy research and education center, other highly specialized laboratories, and also the Translational Medicine Center. A unique world-class Medical Simulation Center created in IFMB. It includes a hospital model, dental phantom class and Simulators Engineering Center. Perspective scientific directions are developed in the Institute of Fundamental Medicine and Biology, such as fundamental medicine, bio-nanotechnology and biomaterials, living systems technologies, bioinformatics, space biology, biodiversity and bio-invasions. </p>

<p>KFU has been active in the field of education and science, collaborating with universities in more than 70 countries around the world; teaching is conducted in English and Russian languages. KFU offers a great variety of ongoing scientific, cultural and sporting activities. Different festivals organized by students and teachers.</p>
</div>
</div>

<div class="row" style="margin-bottom:30px;">
<div class="col-md-12">
<h5 class="tabpane-head">Fee Structure for General Medicine –</h5>
<ul class="tab-panelist">
<li><strong>Tuition Fee – </strong> 5500 US$/Year (English Medium)</li>
<li><strong>Note – </strong> These fee include the Tuition Fee and Hostel Fee</li>
</ul>
<h5 class="tabpane-head">Other Expenses for every year:</h5>
<ul class="tab-panelist">
<li><strong>Food  – </strong> 50 – 80 US$/Month</li>
<li><strong>Maintenance Charges  – </strong> 10 -15 US$/Month</li>
<li><strong>Medical Insurance  – </strong> 150 US$</li>
<li><strong>Visa Extension  – </strong> 100 US$</li>
</ul>
</div>
</div>

</div> 
</div>
</div>

<?php include('footer.php');?>