<?php 
debugAlert("Info::");
debugAlert($userInfo);
?>

<!-- <div class="modal fade" id="editProfileModal" role="dialog" >
    <div class="modal-dialog  modal-dialog-centered modal-lg"> -->
        <!-- Modal content-->
        <div class="modal-content container " >
            <div class="modal-header ">
                <h2 class="modal-title">Edit Profile</h2>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            <!-- <form action="<?=$base_dir?>/user/edit-profile" method="POST">  -->
            <form  enctype="multipart/form-data" action="edit-profile" method="POST" > 
                <div class="modal-body  row " >
                    <div class="col-lg-3 col-md-3" >
                        <!-- <div class="edit-profile-photo">
                            <img src="http://placehold.it/198x165" alt="company-logo" class="img-fluid">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i></span>
                                    <input type="file" accept="image/*" class="upload">
                                </div>
                            </div>
                        </div> -->
                        <div >
                            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                            <!-- <p><img id="output" width="100%"  style="border-radius: 10px;" src="../../public/images/default-ava.jpeg"/></p> -->
                            <p><img id="output" width="100%"  style="border-radius: 10px;" 
                                src="<?php if($userInfo["image"] !== null){ ?> ../../public/images/uploadImage/<?= $userInfo["image"]?> <?php }else{ ?>  ../../public/images/default-ava.jpeg <?php }?> "/>
                            </p>
                            
                            <p style="display:flex;justify-content:center;"><label for="file" style="padding:0px 10px;cursor: pointer;border-radius: 50px; font-size: 13px; font-weight: 600; background-color:lightgray;">Upload Image</label></p>
                           
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-9 column" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6">      
                                <div class="form-group ">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="<?= $userInfo["first_name"]?>" class="form-control inputFocus" placeholder="Name">
                                </div>
                                <div class="form-group ">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="<?= $userInfo["last_name"]?>" class="form-control inputFocus" placeholder="Name">
                                </div>
                                <div class="form-group ">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?= $userInfo["email"]?>" class="form-control inputFocus" placeholder="Email">
                                </div>  
                            </div>

                            <div class="col-lg-6 col-md-6">      
                                <div class="form-group ">
                                    <label >Phone</label>
                                    <input type="text" name="phone" value="<?= $userInfo["phone"]?>" pattern="[0-9]*" class="form-control inputFocus" placeholder="Phone">
                                </div>
                                
                                <?php
                                    $role = $_SESSION["role"];
                                    if ($role == 'manager') { ?>
                                        <div class="form-group ">
                                            <label >Web Link</label>
                                    <?php } else { ?>
                                        <div class="form-group ">
                                            <label >CV Link</label>
                                    <?php }
                                ?>    
                                        <input type="text" name="profile_link" class="form-control inputFocus" placeholder="Profile Link" value="<?= $userInfo["profile_link"]?>">
                                        </div> 
                            
                            </div>
                                 
                        </div>

                        <div class="form-group ">
                            <label >Address</label>
                            <input type="text" name="address" class="form-control inputFocus" placeholder="Address" value="<?= $userInfo["address"]?>">
                        </div> 
                         
                        <div class="form-group">
                            <label >About</label>
                            <textarea class="form-control inputFocus" name="about" rows="3" value="<?= $userInfo["about"]?>"></textarea>
                        </div>

                    </div>                 
                </div>       
                <button type="submit" class="btn pull-right" style="background-color:orange;color:black;border-radius:5px;">Submit</button>

            </form> 
        </div>
    <!-- </div>
</div>   -->
