<?php
include "Database/blogcategories.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-10">
    <div class="card-header">       
    <h2 class="page-header">blogcategories</h2>
    </div>

    <div class="card-body">
    
    <a class="btn btn-outline-primary" href="index.php?page=blogcategories_add">Add</a>  
    
</div>
    <div class="card-body">
   
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  while($ro =mysqli_fetch_array($row)) {?>   
                            
                            <tr>
                                <th><?php echo $ro["id"]; ?></th>
                                <th><?php echo $ro["title"]; ?></th>
                                <!-- <th style="text-align: center;"><?php echo $ro["status"]; ?></th> -->
                                <th style="text-align: center;"> <input type="checkbox" <?php echo $ro['status']==1?"checked":"" ?> > </th>
                                
                                <th style="text-align: center;"><?php echo $ro["created_at"]; ?></th>
                                
                                <th>
                               
                                <a href="include/content/blogcategories_delete.php?recordId=<?php echo $ro["id"]; ?>" class="btn btn-danger btn-sm">Delete</a> 
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