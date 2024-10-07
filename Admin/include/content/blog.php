<?php
include "Database/blog.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-10">
    <div class="card-header">       
    <h2 class="page-header">Blog</h2>
    </div>

    <div class="card-body">
    
    <a class="btn btn-outline-primary" href="index.php?page=blog_add">Add</a>  
    
</div>
    <div class="card-body">
   
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>id user</th> 
                                <th> id category </th>
                                <th> Title </th>
                                <th> image </th>
                                <th> content </th>
                                <th> created at </th>
                                <th> updated at </th>
                               
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  while($ro =mysqli_fetch_array($row)) {?>   
                            
                            <tr>
                                
                            <th><?php echo $ro["id"]; ?></th>
                                <th><?php echo $ro["id_user"]; ?></th> 
                                <th><?php echo $ro["id_category"]; ?></th>
                                <th><?php echo $ro["title"]; ?></th>
                                <th> <img src="<?php echo $ro["image"]; ?>" width=200 alt=""> </th>
                            
                                <th><?php echo $ro["content"]; ?></th>
                                <th><?php echo $ro["created_at"]; ?></th>
                                <th><?php echo $ro["updated_at"]; ?> </th>
                            
                            <th>
                                <a href="include/content/blog_delete.php?recordId=<?php echo $ro["id"]; ?>" class="btn btn-danger btn-sm">Delete</a> 
                                <a href="index.php?page=blog_edit&recordId=<?php echo $ro["id"]; ?>" class="btn btn-success btn-sm">edit</a>                     
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