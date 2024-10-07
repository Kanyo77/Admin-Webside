<?php
include "Database/links.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-13">
    <div class="card-header">       
    <h2 class="page-header">Link</h2>
    </div>

    <div class="card-body">
    
    <a class="btn btn-outline-primary" href="index.php?page=links_add">Add</a>  
    
</div>
    <div class="card-body">
   
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>icon</th>
                                <th> Title </th>
                                <th>  url </th>
                                <th>Created at</th> 
                                <th>Updated at</th>                 
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  while($ro =mysqli_fetch_array($link)) {?>   
                            
                            <tr>
                                <th><?php echo $ro["id"]; ?></th>      
                              
                                <th><?php echo $ro["title"]; ?></th> 
                                <th><?php echo $ro["url"]; ?></th>                        
                                <th><?php echo $ro["created_at"]; ?></th>
                                <th><?php echo $ro["updated_at"]; ?> </th>
                            
                            <th>
                                <a href="include/webside/links_delete.php?recordId=<?php echo $ro["id"]; ?>" class="btn btn-danger btn-sm">Delete</a> 
                                <a href="index.php?page=links_edit&recordId=<?php echo $ro["id"]; ?>" class="btn btn-success btn-sm">edit</a>                     
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