        <?php $this->view('customers/acc-header', $data) ?>
        <br><br>  
        <?php $this->view('customers/acc-sidebar', $data) ?> 

        <div class="main-container"> 

        <!-- change password -->
        <div class="container">
            <div class="title">
                <h2>Change Password</h2>
            </div>

            <div class="content-change-password">
                <form method="post" action="<?= ROOT ?>/profile/myPhangepassword/<?= Auth::getCustomerId()?>">
                    <div class="field-change-password">
                        <label class="label-with-eye" for="current-password">
                            Current Password
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Enter your current password">
                                <div class="eye-icon" onclick="togglePasswordVisibility('current-password')">
                                    <i class="material-icons closed-eye">visibility_off</i>
                                    <i class="material-icons open-eye" style="display: none;">visibility</i>
                                </div>
                            </div>
                        </label>
                    </div>
        
                    <div class="field-change-password">
                        <label class="label-with-eye" for="new-password">
                            New Password
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Enter your new password">
                                <div class="eye-icon" onclick="togglePasswordVisibility('new-password')">
                                    <i class="material-icons closed-eye">visibility_off</i>
                                    <i class="material-icons open-eye" style="display: none;">visibility</i>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="field-change-password">
                        <label class="label-with-eye" for="retype-password">
                            Retype Password
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="retype-password" name="retype-password" placeholder="Retype your password">
                                <div class="eye-icon" onclick="togglePasswordVisibility('retype-password')">
                                    <i class="material-icons closed-eye">visibility_off</i>
                                    <i class="material-icons open-eye" style="display: none;">visibility</i>
                                </div>
                            </div>
                        </label>
                    </div>
        
                    <button type="submit" class="save-changes-edit-profile">SAVE CHANGES</button>
                    <a href="<?=ROOT?>/profile/myProfile/<?= Auth::getCustomerId()?>"><button type="button" class="cancel-edit-profile">CANCEL</button></a>
                </form>
            </div>
        </div>
    </main>

    <script src="manage-account.js"></script>

</body>

<?php $this->view('includes/footer', $data) ?>
</html>
</div></div>