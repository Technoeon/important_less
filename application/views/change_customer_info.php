 
<section class="main-container col1-layout">
    <div class="main container" >

        <div class="account-login">
            <div class="page-title">
                <h2>Change your information</h2>
            </div>

            <fieldset class="col2-set">
                <form action="<?php echo base_url(); ?>somoyer_user/customer_info_save" method="post">
                    <legend>Change your information</legend>
                    <div class="col-1 new-users"><strong></strong>
                        <div class="content">
                            <p></p>
                            <div class="buttons-set">
                                
                                <div>
                                    <ul class="form-list">
                                        <input type="hidden" title="Name" class="input-text required-entry" id="email" value="<?php echo $customer_id;?>" name="customer_id">
                                        
                                        <li>
                                            <label for="name">Name <span class="required">*</span></label>
                                            <br>
                                            <input type="text" title="Name" class="input-text required-entry" id="email" value="<?php echo $customer_info->customer_name; ?>" name="customer_name">
                                        </li>
                                        
                                        <li>
                                            <label for="mobile">Location <span class="required">*</span></label>
                                            <br>
                                            <textarea title="Location" class="required-entry" name="customer_location" cols="54" required><?php echo $customer_info->customer_location; ?></textarea>
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

