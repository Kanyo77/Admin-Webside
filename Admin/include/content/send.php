<?php
include "Database/sendmail.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">Send email</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Send email</h3></div>
                                    <div class="card-body">
                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                            
                                    <?php  while($ro =mysqli_fetch_array($data)) {?>                                             
                                    <div class="form-group">                           
                            <label>Title</label>
                            <input class="form-control" name="titile" value="<?php echo $ro["title"]; ?>">                            
                        </div>   
                                                
                        <div class="form-group">                           
                            <label>Content</label>
                            <textarea name="content"  class="form-control" id="content" value="<?php echo $ro["content"]; ?>"><?php echo $ro["content"]; ?></textarea>
                        </div>                 
  <?php } ?>                                           
                                            <div class="mt-4 mb-0">                                       
                                                    <div class="d-grid">
                                                    <button type="submit" value="up" name="btn_up" class="btn btn-primary btn-block">Submit</button>
                                                    <a href='http://localhost:8080/Webblog/Admin/mail/sendmail.php' target='_blank'>Send Mail</a>
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

