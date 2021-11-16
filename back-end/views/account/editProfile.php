<?php 
    // include SITE_PATH . "controllers/customer/JobController.php" ;
    // $jobController = new JobController();
    // $categoryList = $jobController -> getCategoryList();
?>

<!-- <div class="modal fade" id="editProfileModal" role="dialog" >
    <div class="modal-dialog  modal-dialog-centered modal-lg"> -->
        <!-- Modal content-->
        <div class="modal-content container " >
            <div class="modal-header ">
                <h2 class="modal-title">Edit Profile</h2>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            <form action="user/edit-profile" method="POST"> 
                <div class="modal-body  row " >
                    <div class="col-lg-3 col-md-3" >
                        <div class="edit-profile-photo">
                            <img src="http://placehold.it/198x165" alt="company-logo" class="img-fluid">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i></span>
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-9 column" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6">      
                                <div class="form-group ">
                                    <label >Name</label>
                                    <input type="text" name="nameProfile" class="form-control inputFocus" placeholder="Name">
                                </div>
                                <div class="form-group">
                                        <label >Category</label>
                                        <select class="form-control inputFocus"name="categoryProfile" id="categoryProfile" placeholder="Category">
                                            <option>Category</option>
                                            <?php foreach ($categoryList as $category) { ?>
                                                <option><?php echo $category["category"];?></option>
                                            <?php } ?>
                                        </select>       
                                </div>  
                                <div class="form-group ">
                                    <label >Email</label>
                                    <input type="email" name="emailProfile" class="form-control inputFocus" placeholder="Email">
                                </div>  
                            </div>

                            <div class="col-lg-6 col-md-6">      
                                <div class="form-group ">
                                    <label >Phone</label>
                                    <input type="text" name="phoneProfile" class="form-control inputFocus" placeholder="Phone">
                                </div>
                                
                                <?php
                                    $role = 'user';
                                    if ($role == 'manager') { ?>
                                        <div class="form-group ">
                                            <label >Facebook Link</label>
                                            <input type="text" name="fbProfile" class="form-control inputFocus" placeholder="Facebook Link">
                                        </div> 
                                        <div class="form-group ">
                                            <label >Web Link</label>
                                            <input type="text" name="webProfile" class="form-control inputFocus" placeholder="Web Link">
                                        </div> 
                                    <?php } else { ?>
                                        <div class="form-group ">
                                            <label >CV Link</label>
                                            <input type="text" name="cvProfile" class="form-control inputFocus" placeholder="CV Link">
                                        </div> 
                                    <?php }
                                ?>
                            
                            </div>
                                 
                        </div>

                        <div class="form-group ">
                            <label >Address</label>
                            <input type="text" name="addressProfile" class="form-control inputFocus" placeholder="Address">
                        </div> 
                         
                        <div class="form-group">
                            <label >About us</label>
                            <textarea class="form-control inputFocus" name="aboutProfile" rows="3"></textarea>
                        </div>

                    </div>                 
                </div>       
                <button type="submit" class="btn pull-right " data-dismiss="modal" >Submit</button>


            </form> 
        </div>
    <!-- </div>
</div>   -->
