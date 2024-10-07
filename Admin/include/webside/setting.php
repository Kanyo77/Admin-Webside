<?php
 include "Database/setting.php";
?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">Setting pages</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Setting pages</h3></div>
                                    <div class="card-body">

                                    <form role="form" method="Post" action="" enctype="multipart/form-data">                                              
                                    <?php  while($ro =mysqli_fetch_array($setting)) {?>              
                    <div class="form-group">                           
                            <label>Site name</label>
                            <input class="form-control" name="name" value="<?php echo $ro["site_name"]; ?>">                            
                        </div>   

                        <br>

                        <div class="form-group"> 
                    
                        <img src="<?php echo $ro["site_logo"]; ?>" width=200 alt="">  
                        <br>                   
                            <label>Image</label><br>
                            <input type="file" name="image">                            
                        </div>

                        <br>

                        <div class="form-group">   
                        <img src="<?php echo $ro["site_favicon"]; ?>" width=200 alt=""> 
                        <br>                            
                            <label>Site favicon</label> <br>
                            <input type="file" name="favicon">                            
                        </div> 
                        
                        <div class="form-group">                           
                            <label>Site Map</label>
                            <input class="form-control" name="map" value="<?php echo $ro["site_map"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Site Timezone</label>
                            <input class="form-control" name="timezone" value="<?php echo $ro["site_timezone"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Footer</label>
                            <input class="form-control" name="footer" value="<?php echo $ro["site_footer"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Email</label>
                            <input class="form-control" name="email" value="<?php echo $ro["contact_email"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Site Phone</label>
                            <input class="form-control" name="Phone" value="<?php echo $ro["contact_phone"]; ?>">                            
                        </div>   

                        <div class="form-group">                           
                            <label>Address</label>
                            <input class="form-control" name="address" value="<?php echo $ro["contact_address"]; ?>">                            
                        </div>   
                        <?php }?>                        
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

