<div class="main-container col2-right-layout">
    <div class="main container">
        <form action="<?php echo base_url(); ?>onlineshop/user_account" method="post">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">

                    <div class="my-account">
                        <div class="page-title">
                            <h2>My Address Book</h2>
                        </div>
                        <div class="dashboard">
                            <div class="welcome-msg"> <strong>Hello, <?php echo $this->session->userdata('customer_name'); ?>!</strong></div>
                            <div class="col2-set">
                                    <h4>Address Book</h4>
                                    <div class="manage_add"></div>
                                    <div class="col-1">
                                        <h5>Primary Billing Address</h5>
                                        <address>
                                            <?php echo $customer_info->customer_name; ?><br>
                                            <?php echo $customer_info->customer_email; ?><br>
                                            <?php echo $customer_info->customer_location; ?><br>
                                            Mobile #: <?php echo $customer_info->customer_mobile; ?> <br>
                                            
                                        </address>
                                    </div>
                                    <?php foreach ($shiping as $value) { ?>
                                                                        
                                                                    
                                    <div class="col-1">
                                        <h5>My Shipping Address</h5>
                                        <address>
                  
                                            <?php echo $value->address; ?><br>
                                            <?php echo $value->district; ?><br>
                                           Mobile #: <?php echo $value->alter_mobile_no; ?> <br>
                                            
                                        </address>
                                        
                                    </div>
                                    <hr>
                                    <?php }?>
                                   
                                </div>
                            
                    </div>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>somoyer_user">Account Dashboard</a></li>
                                <li class="current"><a href="<?php echo base_url().'somoyer_user/address_book/'.$customer_info->customer_id;?>">Address Book</a></li>
                                <li><a href="<?php echo base_url(); ?>somoyer_user/my_orders">My Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>somoyer_user/wishlist">My Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </aside>
            </div>
        </form>
    </div>
</div>


