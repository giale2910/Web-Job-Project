<!-- <div class="modal fade" id="changePasswordModal" role="dialog">
    <div class="modal-dialog  modal-dialog-centered"> -->
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <h2 class="modal-title">Change Password</h2>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            <form action="/user/change-password" method="POST">
                
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Current password:</label>
                        <input type="password" class="form-control inputFocus" name="currentPwd" id="currentPwd" placeholder="Current password">
                    </div>
                    <div class="form-group">
                        <label for="pwd">New password:</label>
                        <input type="password" class="form-control inputFocus" name="newPwd" id="newPwd" placeholder="New password" autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm new password:</label>
                        <input type="password" class="form-control inputFocus" name="confirmPwd" id="confirmPwd" placeholder="Confirm new password" autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn pull-right" style="background-color:orange;color:black;border-radius:5px;">Submit</button>
                </div>
            </form> 
        </div>
    <!-- </div>
</div>   -->

