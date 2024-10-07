<?php
 include "Database/blogcategories.php";
 include "Database/blog.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">blog</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add blog</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                            
                                 
      
                             <div class="form-group">                           
                             <label>Blog categories</label>
                             <select name="id_category" class="form-control">
                            <?php  while($ro =mysqli_fetch_array($name)) {?>  
                                <option value="<?php echo $id=$ro['id'] ?>"  ><?php echo $id=$ro['title'] ?></option>
                                <?php }?>
                            </select>
                        </div>
                 
                    <div class="form-group">                           
                            <label>Title</label>
                            <input class="form-control" name="title">                            
                        </div>
                        <div class="form-group">                           
                            <label>Content</label>
                            <textarea name="content" class="form-control" id="content"></textarea>
                        </div>
                        <br>
                        <div class="form-group">                           
                            <label>Image</label>
                            <input type="file" name="image">                            
                        </div>
                                                
                                         
                                        
                                            <div class="mt-4 mb-0">                                       
                                                    <div class="d-grid">
                                                    <button type="submit" value="new" name="btn_new" class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
</div> 

</div>
</div>

