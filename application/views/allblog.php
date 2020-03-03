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
<li><a href="">Home/</a></li>
<li class="active">Blog</li>
</ol>
<div class="abt-details">

<div class="row">

<?php
foreach ($blog as $blog)
 {

?>

<div class="col-md-6">
<div class="shadow-effect">
<div class="branch-box" style="width:100%;">
  <div class="entry-media"><img src="<?= base_url()?>/upload/<?= $blog->image?>" class="img-responsive"></div>
<div class="entry-main">
<h5 class="tabpane-head">
  <?php
  $string=$blog->title;
  $blogtitle = character_limiter($string,15);
  print_r($blogtitle);
  ?>
</h5>
<p>

  <?php
  $string=$blog->blogshort;
  $blogltr= character_limiter($string,150);
  print_r($blogltr);
  ?>
  </p>
<a href="<?= base_url('blog-detail')?>/<?= $blog->id?>/<?= str_replace(" ", "-",  $blog->title)?>">Know More...   </a>
</div>
</div>
</div>

</div>

<?php
}
?>

</div>





</div>

</div> 
</div>
</div>





<?php include('footer.php');?>
