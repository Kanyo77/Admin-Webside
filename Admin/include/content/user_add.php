<?php
include "Database/user.php";
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add user</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                            
                                 
      
                 
                    <div class="form-group">                           
                            <label>Name</label>
                            <input class="form-control" name="name">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Username</label>
                            <input class="form-control" name="username"> 
                        </div>

                        <div class="form-group">                           
                            <label>Password</label>
                            <input class="form-control" name="password"> 
                        </div>

                        <div class="form-group">                           
                            <label>Phone</label>
                            <input class="form-control" name="phone"> 
                        </div>
                        
                        <div class="form-group">                           
                            <label>Email</label>
                            <input class="form-control" name="email"> 
                        </div>

                        
                        <div class="form-group">                           
                            <label>Role</label>
                            <select name="id_category" class="form-control">
                            <option value="">Select Role </option>                  
                            <option value="admin">ADMIN</option>
                            <option value="mod">Mod</option>
                            <option value="user">USER</option>
        
                            </select>
                        </div>


                        <br>
                        <div class="form-group">                           
                            <label>Image</label>
                            <br>
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

