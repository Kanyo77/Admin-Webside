<?php
 include "Database/about.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">About</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit about</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                   <?php  while($ro =mysqli_fetch_array($row)) {?>                          
                                 

                                    <div class="form-group">                           
                            <label>Contact</label>
                            <textarea name="content" class="form-control" id="content" ><?php echo $ro["content"]; ?></textarea>
                        </div>

                        <div class="form-group">                           
                            <label>Footer</label>
                            <textarea name="footer" class="form-control" id="footer" ><?php echo $ro["footer"]; ?></textarea>
                        </div>
                        <?php } ?>  

                                      
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

