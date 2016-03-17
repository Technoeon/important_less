<div class="main-container col2-right-layout">
    <div class="main container">
        <form action="<?php echo base_url(); ?>onlineshop/user_account" method="post">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">

                    <div class="my-account">
                        <div class="page-title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="dashboard">
                            <div class="welcome-msg"> <strong>Hello, <?php echo $this->session->userdata('customer_name'); ?>!</strong>
                                <?php
                                $message = $this->session->userdata('message');
                                if ($message) {
                                    echo $message;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                            </div>
                            <div class="recent-orders">
                                <div class="title-buttons"><strong>Recent Orders</strong> <a href="<?php echo base_url();?>somoyer_user/my_orders">View All </a> </div>
                                <div class="table-responsive">
                                    <table class="data-table" id="my-orders-table">
                                        <col>
                                        <col>
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <thead>
                                            <tr class="first last">
                                                <th>Order #</th>
                                                <th>Date</th>
                                                <th>Ship to</th>
                                                <th><span class="nobr">Order Total</span></th>
                                                <th>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($my_order as $value) { ?>
                                                
                                            
                                            <tr class="first odd">
                                                <td><?php echo $value->invoice_no; ?></td>
                                                <td><?php echo $value->order_date_time; ?></td>
                                                <td><?php echo $value->address; ?></td>
                                                <td><span class="price"><?php echo $value->order_total; ?></span></td>
                                                <?php if($value->order_status==NULL){ ?>
                                                <td><em>Pending</em></td>
                                                <?php }elseif ($value->order_status==1) { ?>
                                                        <td><em>Accept</em></td>
                                                   <?php }  else { ?>
                                                        <td><em>Reject</em></td>       
                                                          <?php } ?>
                                                <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#"></a> </span></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-account">
                                <div class="page-title">
                                    <h2>Account Information</h2>
                                </div>
                                <div class="col2-set">
                                    <div class="col-1">
                                        <h5>Contact Information</h5>
                                        <a href="<?php echo base_url().'somoyer_user/change_info/'.$customer_info->customer_id;?>">Edit</a>
                                        <p> <?php echo $customer_info->customer_name; ?><br>
                                            <?php echo $customer_info->customer_mobile; ?><br>
                                            <?php echo $customer_info->customer_email; ?><br>
                                            <?php echo $customer_info->customer_location; ?><br>
                                            <a href="<?php echo base_url().'somoyer_user/change_password/'.$customer_info->customer_id;?>">Change Password</a> </p>
                                    </div>
                                </div>
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
                                        <a href="<?php echo base_url().'somoyer_user/address_book/'.$customer_info->customer_id;?>">More Address Book</a>
                                    </div>
                                    <?php }?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                            <ul>
                                <li class="current"><a href="<?php echo base_url(); ?>somoyer_user">Account Dashboard</a></li>
                                <li><a href="<?php echo base_url().'somoyer_user/address_book/'.$customer_info->customer_id;?>">Address Book</a></li>
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