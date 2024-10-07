<?php
 include "Database/comment.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-13">
    <div class="card-header">       
    <h2 class="page-header">Comment</h2>
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
                                <th> Comment </th>
                                <th>Id Parent Comment</th> 
                                <th>Id Blog</th> 
                                <th> Email  </th>                  
                                <th> created at </th>
                                <th> updated at </th>                              
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  while($ro =mysqli_fetch_array($row)) {?>   
                            
                            <tr>
                                <th><?php echo $ro["id"]; ?></th>      
                              
                                <th><?php echo $ro["id_parent_comment"]; ?></th> 
                                <th><?php echo $ro["comment"]; ?></th>
                                <th><?php echo $ro["id_blog"]; ?></th> 
                                <th><?php echo $ro["name"]; ?></th>
                                <th><?php echo $ro["email"]; ?></th>
    
                                <th><?php echo $ro["created_at"]; ?></th>
                                <th><?php echo $ro["updated_at"]; ?> </th>
                            
                            <th>
                                <a href="includes/blogcategories_delete.php?recordId=<?php echo $ro["id"]; ?>" class="btn btn-danger btn-sm">Delete</a> 
                                <a href="index.php?page=blogcategories_edit&recordId=<?php echo $ro["id"]; ?>" class="btn btn-success btn-sm">edit</a>                     
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