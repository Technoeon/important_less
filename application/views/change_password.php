 
<section class="main-container col1-layout">
    <div class="main container" >

        <div class="account-login">
            <div class="page-title">
                <h2 style="color: red;">
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message) {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h2>
            </div>

            <fieldset class="col2-set">
                <form action="<?php echo base_url(); ?>somoyer_user/new_password_save" method="post">
                    <legend>Change your information</legend>
                    <div class="col-1 new-users"><strong></strong>
                        <div class="content">
                            <p></p>
                            <div class="buttons-set">
                                
                                <div>
                                    <ul class="form-list">
                                        <input type="hidden" title="Name" class="input-text required-entry" id="email" value="<?php echo $customer_id;?>" name="customer_id">
                                        
                                        <li>
                                            <label for="pass">Current Password <span class="required">*</span></label>
                                            
                                            <input type="password" title="Password" class="input-text required-entry" id="pass" name="old_customer_passowrd">
                                        </li>
                                        <li>
                                            <label for="pass">New Password <span class="required">*</span></label>
                                            
                                            <input type="password" title="New Password" class="input-text required-entry" id="pass" name="new_customer_passowrd">
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                    <button type="submit" class="button btn bg-danger" >Update</button>						

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                    <div class="col-2 registered-users"><strong>Previous Information</strong>
                        <div class="content">

                            <ul class="form-list">
                                <li>
                                    <i class="fa fa-user fa-5x"></i>
                                </li>
                                <li>
                                    <?php echo $this->session->userdata('customer_name'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><?php echo $this->session->userdata('customer_mobile'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
            </fieldset>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>      
</section>



