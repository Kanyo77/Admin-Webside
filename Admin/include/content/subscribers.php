<?php
include "Database/mailsetting.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">User</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit mailsetting</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
  <?php  while($ro =mysqli_fetch_array($row)) {?>                                               
                                 
      
                 
                    <div class="form-group">                           
                            <label>Email</label>
                            <input class="form-control" name="email" value="<?php echo $ro["email"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Mail Sever</label>
                            <input class="form-control" name="sever" value="<?php echo $ro["sever"]; ?>"> 
                        </div>

                        <div class="form-group">                           
                            <label>Mail Username</label>
                            <input class="form-control" name="username" value="<?php echo $ro["username"]; ?>"> 
                        </div>

                        <div class="form-group">                           
                            <label>Mail Password</label>
                            <input class="form-control" name="password" value="<?php echo $ro["password"]; ?>"> 
                        </div>
                        
                        <div class="form-group">                           
                            <label>Mail Post</label>
                            <input class="form-control" name="post" value="<?php echo $ro["post"]; ?>"> 
                        </div>

 <?php } ?>                        
                  
                                                
                                         
                                        
                                            <div class="mt-4 mb-0">                                       
                                                    <div class="d-grid">
                                                    <button type="submit" value="up" name="btn_up" class="btn btn-primary btn-block">Submit</button>
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

