<?php
 include "Database/socials.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">Socials</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add socials</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                            
                                 
      
                 
                    <div class="form-group">                           
                            <label>Title</label>
                            <input class="form-control" name="title">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Icon</label>
                            <input class="form-control" name="icon">                            
                        </div>

                        <div class="form-group">                           
                            <label>Url</label>
                            <input class="form-control" name="url"> 
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

