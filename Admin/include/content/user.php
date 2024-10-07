<?php
include "Database/user.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-10">
    <div class="card-header">       
    <h2 class="page-header">User</h2>
    </div>

    <div class="card-body">
    
    <a class="btn btn-outline-primary" href="index.php?page=user_add">Add</a>  
    
</div>
    <div class="card-body">
   
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th> Image </th>
                                <th>Name</th> 
                                <th>Username</th> 
                                <th> Role </th>
                                <th> Status </th>                        
                                <th> created at </th>
                                <th> updated at </th>                              
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  while($ro =mysqli_fetch_array($row)) {?>   
                            
                            <tr>
                                <th><?php echo $ro["id"]; ?></th>      
                                <th> <img src="<?php echo $ro["image"]; ?>" width=200 alt=""> </th>
                                <th><?php echo $ro["name"]; ?></th> 
                                <th><?php echo $ro["username"]; ?></th>
                                <th><?php echo $ro["role"]; ?></th>
                                <th style="text-align: center;"> <input type="checkbox" <?php echo $ro['status']==1?"checked":"" ?> > </th>   
                                <th><?php echo $ro["created_at"]; ?></th>
                                <th><?php echo $ro["updated_at"]; ?> </th>
                            
                            <th>
                                <a href="include/content/user_delete.php?recordId=<?php echo $ro["id"]; ?>" class="btn btn-danger btn-sm">Delete</a> 
                                <a href="index.php?page=user_edit&recordId=<?php echo $ro["id"]; ?>" class="btn btn-success btn-sm">edit</a>                     
                            </th>
                            </tr>
                            
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                
            </div>
    
    

</div>

</div>
</div>