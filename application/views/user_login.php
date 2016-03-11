 
<section class="main-container col1-layout" ng-controller="registration">
    <div class="main container" >

        <div class="account-login">
            <div class="page-title">
                <h2>Login or Create an Account</h2>
            </div>

            <fieldset class="col2-set">
                <form action="<?php echo base_url(); ?>onlineshop/customer_info_save" method="post">
                    <legend>Login or Create an Account</legend>
                    <div class="col-1 new-users"><strong>New Customers</strong>
                        <div class="content">
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <div class="buttons-set">
                                <button ng-hide="showform" ng-click="showform = true; hideform()" class="button create-account" type="button"><span>Create an Account</span></button>
                                <div ng-show="showform">
                                    <ul class="form-list">
                                        <li>
                                            <label for="name">Name <span class="required">*</span></label>
                                            <br>
                                            <input type="text" title="Name" class="input-text required-entry" id="email" value="" name="customer_name">
                                        </li>
                                        <li>
                                            <label for="mobile">Mobile Number <span class="required">*</span></label>
                                            <br>
                                            <input type="text" title="Mobile Number" class="input-text required-entry" id="email" value="" name="customer_mobile">
                                        </li>
                                        <li>
                                            <label for="mobile">Location <span class="required">*</span></label>
                                            <br>
                                            <input type="text" title="Location" class="input-text required-entry" id="email" value="" name="customer_location">
                                        </li>
                                        <li>
                                            <label for="email">Email Address <span class="required">*</span></label>
                                            <br>
                                            <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="customer_email">
                                        </li>
                                        <li>
                                            <label for="pass">Password <span class="required">*</span></label>
                                            <br>
                                            <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="customer_passowrd">
                                        </li>
                                    </ul>
                                    <button type="submit" class="button btn bg-danger" >Submit</button>						

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="<?php echo base_url(); ?>onlineshop/customer_login_check" method="post">
                    <div class="col-2 registered-users"><strong>Registered Customers</strong>
                        <div class="content">

                            <?php
                            $ecception = $this->session->userdata('ecception');
                            if ($ecception) {
                                ?>
                                <p class="text-danger"><?php
                                    echo $ecception;
                                    $this->session->unset_userdata('ecception');
                                    ?> 
                                </p>

                            <?php } else { ?>
                                <p class="text-info"><?php echo 'If you have an account with us, please log in.'; ?></p>
<?php } ?>

                            <ul class="form-list">
                                <li>
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="customer_email">
                                </li>
                                <li>
                                    <label for="pass">Password <span class="required">*</span></label>
                                    <br>
                                    <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="customer_passowrd">
                                </li>
                            </ul>
                            <p class="required">* Required Fields</p>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                                <a class="forgot-word" href="">Forgot Your Password?</a> </div>
                        </div>
                    </div>
                </form>
            </fieldset>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>      
</section>
<script>
    client.controller('registration', function ($scope) {
         $scope.hideform = function(){
            $scope.hide();
        };
    });
</script>

