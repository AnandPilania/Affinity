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


<section class="bg-contact">
  <div class="container-fluid">
    <div class="text" style="padding:100px 20px;">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Affinity Education Consultants (AEC) is one of the trusted and professional consultancies to help Indian students</p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="box">
          <ul style="margin:0">
            <li style="position:relative;padding:10px;">
              <i class="fas fa-phone" style="position:absolute;right:20px;top:40%;font-size:35px;"></i>
              <h3>Phone</h3>
              <p>9971698297</p>
            </li>

             <li style="position:relative;padding:10px;">
              <i class="fas fa-envelope-square" style="position:absolute;right:20px;top:40%;font-size:35px;"></i>
              <h3>E-Mail</h3>
              <p>info@affinityeducation.in</p>  
            </li>

            <li style="position:relative;padding:10px;border-bottom:none;">
              <i class="fas fa-map-marker-alt" style="position:absolute;right:20px;top:5px;font-size:35px;"></i>
               <address>
                <p style="font-weight: bold;">Head Office</p> 
               <p>#925, Wave Silver Tower, 925, Captain Vijyant Thapar Marg, D Block, Pocket D, Sector 18, Noida, Uttar Pradesh 201301</p>
                 <p class="text-yellow"><i class="fas fa-phone-alt" aria-hidden="true"></i>+91-9971698297</p>
               
               <p style="font-weight: bold;">Branch Office</p>
               <p>Office no. 13 , 3rd floor , Kamala regency , Dnyaneshwar paduka chowk , Opposite petrol pump FC road , Pune - 004</p>
                <p class="text-yellow"><i class="fas fa-phone-alt" aria-hidden="true"></i>8956056350,9990165628</p>
             
        </address>
           
           
          </ul>
        </div>

   
      </div>

       <div class="col-md-8">
         <div class="box" style="padding:20px;">
          <h3 class="text-center">Contact With Us</h3>
           <form action="<?= base_url('Welcome/insertcontact')?>" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Your Name" required>
    <input type="hidden" name="source" value="Contact Us">
  </div>

 <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>

 <div class="form-group">
    <label>Phone No.</label>
    <input type="text" class="form-control" name="phone"  placeholder="Enter Your Phone No." pattern="[789][0-9]{9}" minlength="10" maxlength="10" required>
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" name="city"  placeholder="Enter City Name" required>
  </div>


  <div class="form-group">
    <label>Query</label>
    <textarea class="form-control" name="message" rows="3" required></textarea>
  </div>

    <div class="form-group text-center">

    <input type="submit" class="text-center btn btn-primary" value="Submit">

    </div>

</form>
         </div>
       </div>





    </div>
  </div>
</section>


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




<?php include('footer.php');?>
