<?php include('navbar.php');?>
<style type="text/css">
	.resform
	{
     padding-bottom: 50px;
	}
</style>

<div class="container">
  <div class="row">
  	<div class="col-md-3"></div>
	<div class="resform col-md-6">
<center>	<h3>Login </h3> </center>

<form action="<?= base_url('index.php/Welcome/checklogin')?>" method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
  </div>


 <center> <button type="submit" class="btn btn-primary">Submit</button> </center>

</form>

<p class="text-center" style="margin-top: 20px;">Not Registered? Sign Up Here</p>

<center>
<button class="btn btn-primary" style="margin-top: 20px;">
<a href="<?= base_url('index.php/Welcome/register')?>" style="text-decoration: none;color:#fff;">Register Now</a>
</button>
</center>


</div>
</div>
</div>



<?php include('footer.php');?>

<?php
if($this->session->flashdata('email_exist'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Email Already Exist" ,  "error" )


</script>
<?php
}
?>


<?php
if($this->session->flashdata('registersucc'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Register Successfully" ,  "success" )


</script>
<?php
}
?>


<?php
if($this->session->flashdata('wronguserpass'))
{
?>
<script type="text/javascript">
  
 swal ( "" ,  "Wrong Email and Password" ,  "error" )


</script>
<?php
}
?>