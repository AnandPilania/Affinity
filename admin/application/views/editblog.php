<?php  include('sidenav.php');?>

<style type="text/css">
    .newsform
    {
        list-style: none;
        padding: 0;
    }
</style>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add/Delete/Edit Blog</li>
                        </ol>
                        <form action="<?= base_url('index.php/Admincontroller/updateblog')?>" method="post" enctype='multipart/form-data'>
                        <ol class="form-group row newsform">
               
                            <li class="col-md-12"> 
                              <h5 class="breadcrumb">Add Blog</h5>
                            </li>
                          
                          <li class="col-md-6"> 
                            <label>Blog Title</label>
                            <input type="text" class="form-control" name="title" maxlength="160" value="<?= $editblogdata->title?>" required> 
                          </li>
                                <li class="col-md-12"> 
                            <label style="margin-top:10px;">Blog Short Detail</label>
                            <textarea class="form-control" name="blogshort" maxlength="200" placeholder="Enter Blog Short Detail" rows="3" required><?= $editblogdata->blogshort?></textarea> 
                          </li>
                        

                           <li class="col-md-6"> 
                            <label>Blog Image</label>
                            <input type="file" class="form-control" name="image"> 
                          </li>

                          <li class="col-md-12"> 
                            <label style="margin-top: 10px;">Blog</label>
                            <textarea type="text" class="form-control" name="blog"  required><?= $editblogdata->blog?></textarea>
                          </li>

                           <li class="col-md-12" style="margin-top: 1em;"> 
                            <input type="submit" class="btn btn-primary" style="padding: 0.5em 2em;"> 
                          </li>
                            
                        </ol>
                        </form>
                     
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; 2020 Affinity Education - All rights reserved.</div>
                        
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url()?>js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url()?>assets/demo/datatables-demo.js"></script>




        <script src="<?= base_url()?>assets/js/scripts.js"></script>

       <!--  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

 <script>
        CKEDITOR.replace( 'blog' );
</script>


<?php
if ($this->session->flashdata('updateblogalt'))
{
?>
<script type="text/javascript">
     swal ( "" ,  "Blog Updated Successfully" ,  "success" )
</script>
<?php
}
?>

<?php
if ($this->session->flashdata('insertblogalt2'))
{
?>
<script type="text/javascript">
     swal ( "" ,  "Wrong File Formate" ,  "error" )
</script>
<?php
}
?>


<?php
if ($this->session->flashdata('deleteblogalt'))
{
?>
<script type="text/javascript">
     swal ( "" ,  "Blog Delete Successfully" ,  "success" )
</script>
<?php
}
?>


    </body>
</html>
