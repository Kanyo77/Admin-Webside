<?php
include "Database/sliders.php";

$rollon=$_GET['recordId'];
$query2 = "SELECT * from sliders where id='".$rollon."'"; 
$data = mysqli_query($conn,$query2);

?>
<div class="row">
<div class="col-md-12">
  <div class="col-xl-12">
    <div class="card-header">       
    <h2 class="page-header">Sliders</h2>
    </div>
    
    <br>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Sliders</h3></div>
                                    <div class="card-body">
                                    <form role="form" method="Post" action="" enctype="multipart/form-data">
                                    <?php  while($ro =mysqli_fetch_array($data)) {?>                                              
                                          
                                    <label for="inputEmail">Enter your Title</label>
                                        <input class="form-control" id="title" name="title" type="text" value="<?php echo $ro["title"]; ?>" />
                                        <br>
                       <div class="form-group">                           
                    <label>Image</label>
                    <br>
                    <th> <img src="<?php echo $ro["image"]; ?>" width=200 alt=""> </th>
                    <br>
                    <input type="file" name="image" value="<?php echo $ro["image"]; ?>">     
                                    
                </div>
                <?php }?>                                       
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

