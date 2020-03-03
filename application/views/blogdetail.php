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
<li><a href="<?= base_url()?>">Home</a></li>

</ol>
<div class="abt-details">
<h4 class="tabpane-head1 text-center"><?= $blogdetail->title?></h4>

<div class="row">
	<div class="col-md-3">
							<img src="<?= base_url()?>upload/<?= $blogdetail->image?>" alt="" style="width:100%;">
	</div>
	<div class="col-md-9">
		<p>
			<?= $blogdetail->blogshort?>
		</p>
	</div>
	<div class="col-md-12">
		<p>
			<?= $blogdetail->blog?>
		</p>
	</div>
</div>

</div> 
</div>
</div>



<?php include('footer.php');?>
