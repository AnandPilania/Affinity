<?php include('navbar.php');?>
<style type="text/css">
	.resform
	{

	}
</style>

<div class="container">
  <div class="row">
  	<div class="col-md-3"></div>
	<div class="resform col-md-6">
<center>	<h3>Registration </h3> </center>

<form action="<?= base_url('index.php/Welcome/registerform')?>" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
  </div>

   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
  </div>

   <div class="form-group">
    <label>Phone No.</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter Phone No." maxlength="10" minlength="10" required>
  </div>

   <div class="form-group">
    <label>Password</label>
    <input type="Password" class="form-control" name="password" placeholder="Enter Password" required>
  </div>

   <div class="form-group">
    <label>Confirm Password</label>
    <input type="Password" class="form-control" name="cpassword" placeholder=" Enter Confirm Password" required>
  </div>


 <center> <input type="submit" class="btn btn-primary" style="margin-bottom: 20px;"> </center>
</form>




</div>
</div>
</div>



<?php include('footer.php');?>

<?php
if($this->session->flashdata('password_error'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Password Confirm Password Not Match" ,  "error" )


</script>
<?php
}
?>