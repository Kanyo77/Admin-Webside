<?php
include "Database/user.php";

$rollon=$_GET['recordId'];
$query2 = "SELECT * from user where id='".$rollon."'"; 
$data = mysqli_query($conn,$query2);
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">User edit</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">   
<?php  while($ro =mysqli_fetch_array($data)) {?>                 
                    <div class="form-group">                           
                            <label>Name</label>
                            <input class="form-control" name="name" value="<?php echo $ro["name"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Username</label>
                            <input class="form-control" name="username" value="<?php echo $ro["username"]; ?>"> 
                        </div>

                        <div class="form-group">                           
                            <label>Password</label>
                            <input class="form-control" name="password" value="<?php echo $ro["username"]; ?>"> 
                        </div>

                        <div class="form-group">                           
                            <label>Phone</label>
                            <input class="form-control" name="phone" value="<?php echo $ro["phone"]; ?>"> 
                        </div>
                        
                        <div class="form-group">                           
                            <label>Email</label>
                            <input class="form-control" name="email" value="<?php echo $ro["email"]; ?>"> 
                        </div>

                        
                        <div class="form-group">                           
                            <label>Role</label>
                            <select name="id_category" class="form-control">
                            <option value="<?php echo $ro["role"]; ?>"><?php echo $ro["role"]; ?></option>                  
                            <option value="admin">ADMIN</option>
                            <option value="mod">Mod</option>
                            <option value="user">USER</option>
        
                            </select>
                        </div>
<br>
                     <div class="checkbox">
                      <label>status</label>
                          <input <?php echo  $ro["status"]?"checked":""; ?> name="status" type="checkbox"  >                       
                    
                  </div>
                        <br>
                        <div class="form-group">                           
                            <label>Image</label>
                            <br>
                            <img src="<?php echo $ro["image"]; ?>" width=200 alt=""> 
                            <br>
                            <input type="file" name="image">                            
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

