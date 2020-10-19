<?php require_once('include/session.php');?>
<?php require_once('include/head.php');?>
<?php  session_start();?>
<?php require_once('include/header.php');?>
<?php require_once('include/asidebar.php');?>
 
<style>
  label{
      font-weight:bold;
  }
</style>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $fetch_data = "SELECT * FROM projects WHERE pro_id = $id";
        $execute_query = mysqli_query($db,$fetch_data);
        $assoc = mysqli_fetch_assoc($execute_query);
?>

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                      <img src="../assets/img/work/<?php echo $assoc['pro_img'];?>" style="width:90%" id="previmg" >
                        <h2 class="py-3">Preview Image</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill projects details</h4>
        
                <form class="form-group" action="update_project_post.php?id=<?= $id?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" type="text" placeholder="type your projects title" value="<?php echo $assoc['pro_title'];?>" autofocus />
                              <?php
                                if(isset($_SESSION['title_msg'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['title_msg']."</p>";
                                   unset($_SESSION['title_msg']);
                                   // session_unset();
                                }
                              ?>   
                        </div>
                        <div class="form-group col-md-3">
                             <label class="control-label">projects Image[360x346]</label>
                             <input id="image" name="image" class="form-control" type="file" 
                                    onchange="document.getElementById('previmg').src = window.URL.createObjectURL(this.files[0])"
                                    style=" padding: 0.21rem 0.25rem;" />
                            <?php
                                if(isset($_SESSION['img_msg'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['img_msg']."</p>";
                                   unset($_SESSION['img_msg']);
                                   // session_unset();
                                }
                              ?>  
                        </div>
                        <div class="form-group col-md-3">
                             <label class="control-label">Project Type</label>
                             <select name="type" class="form-control" type="text" style=" padding: 0.21rem 0.25rem;">
                               <option value="Template"
                                  <?php if($assoc['pro_type']=='Template' || $assoc['pro_type']=='template'){echo "selected";}
                                  ?>>Template
                                </option>
                               <option value="Script"
                                  <?php if($assoc['pro_type']=='Script' || $assoc['pro_type']=='script'){echo "selected";}
                                  ?>>Script</option>

                               <option value="WordPress"
                                  <?php if($assoc['pro_type']=='WordPress' || $assoc['pro_type']=='Wordpress'){echo "selected";}
                                  ?>>WordPress</option>

                               <option value="Graphics"
                                  <?php if($assoc['pro_type']=='Graphics' || $assoc['pro_type']=='graphics'){echo "selected";}
                                  ?>>Graphics</option>
                             </select>
                            <?php
                                if(isset($_SESSION['img_msg'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['img_msg']."</p>";
                                   unset($_SESSION['img_msg']);
                                }
                              ?>   
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Link</label>
                            <input type="text" class="form-control" name="link" type="text" placeholder="type your project link" value="<?php echo $assoc['pro_link'];?>" autofocus />
                              <?php
                                if(isset($_SESSION['link_msg'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['link_msg']."</p>";
                                   unset($_SESSION['link_msg']);
                                }
                              ?>   
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Short Description</label>
                            <textarea type="text" class="form-control" name="short_desc" id="short" type="text" placeholder="type your project Description"><?= $assoc['pro_short'];?></textarea> 
                              <?php
                                if(isset($_SESSION['short_desc'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['short_desc']."</p>";
                                   unset($_SESSION['short_desc']);
                                }
                              ?> 
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Description</label>
                            <textarea type="text" class="form-control" name="desc" id="editor" type="text" placeholder="type your project Description"><?= $assoc['pro_desc'];?></textarea> 
                              <?php
                                if(isset($_SESSION['desc_msg'])) {
                                   echo "<p class='pt-1 text-danger text-center'>".$_SESSION['desc_msg']."</p>";
                                   unset($_SESSION['desc_msg']);
                                }
                              ?> 
                        </div>
                    </div>    
                    <div class="form-row">
                        <button class="btn btn-danger btn-block" name="update_project">
                        <i class="fa fa-sign-in fa-lg fa-fw"> Update project</i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php   } require_once('include/footer.php');?>