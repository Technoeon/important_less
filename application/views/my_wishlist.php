<div class="main-container col2-right-layout">
    <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">

                    <div class="my-account">
                        <div class="page-title">
                            <h2>My Wishlist</h2>
                        </div>
                        <div class="dashboard">
                            <div class="welcome-msg"> <strong>Hello, <?php echo $this->session->userdata('customer_name'); ?>!</strong>
                                
                                
                            </div>
                            <div class="box-account">
                                <div class="page-title">
                                    <h2>
                                        <?php
                                $message = $this->session->userdata('message');
                                if ($message) {
                                    echo $message;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                                    </h2>
                                </div>
                                <div class="my-wishlist">
                                    <div class="table-responsive">
                                        
                                            <fieldset>
                                                <input type="hidden" value="ROBdJO5tIbODPZHZ" name="form_key">
                                                <table id="wishlist-table" class="clean-table linearize-table data-table">
                                                    <thead>
                                                        <tr class="first last">
                                                            <th class="customer-wishlist-item-image"></th>
                                                            <th class="customer-wishlist-item-info">Product Name</th>
                                                            <th class="customer-wishlist-item-quantity">Quantity</th>
                                                            <th class="customer-wishlist-item-price">Price</th>
                                                            <th class="customer-wishlist-item-cart"></th>
                                                            <th class="customer-wishlist-item-remove"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($wishlist as $value) { ?>
                                                        <tr id="item_31" class="first odd">
                                                            <td class="wishlist-cell0 customer-wishlist-item-image"><a title="<?php echo $value->product_name ?>" href="<?php echo base_url() . 'onlineshop/product_details/'.$value->product_id; ?>" class="product-image"> <img width="150" height="150" alt="<?php echo $value->product_name ?>" src="<?php echo base_url() . $value->image_path; ?>"> </a></td>
                                                            <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a title="<?php echo $value->product_name ?>" href="<?php echo base_url() . 'onlineshop/product_details/'.$value->product_id ?>"><?php echo $value->product_name ?></a></h3>
                                                                
                                                                </td>
                                                    <form method="post" action="<?php echo base_url() . 'somoyer_user/go_for_cart_from_wishlist' ?>">
                                                            <td data-rwd-label="Quantity" class="wishlist-cell2 customer-wishlist-item-quantity"><div class="cart-cell">
                                                                    <div class="add-to-cart-alt">
                                                                        <input type="hidden" value="<?php echo $value->product_id; ?>" name="product_id">
                                                                        <input type="number" value="1" min="1" name="qty" class="input-text qty validate-not-negative-number">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price"><div class="cart-cell">
                                                                    <div class="price-box"> <span id="product-price-39" class="regular-price"> <span class="price"><?php echo $value->price ?></span> </span> </div>
                                                                </div></td>
                                                            <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                                                                    <button class="button btn-cart" title="Add to Cart" type="submit"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <p></p>
                                                            </td>
                                                    </form>
                                                    
                                                            <td class="wishlist-cell5 customer-wishlist-item-remove last"><a class="remove-item" title="Clear Wish" onclick="return clearwish();" href="<?php echo base_url() . 'somoyer_user/clear_wish/'.$value->product_id ?>"><span><span></span></span></a></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                        
                                    </div>
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
                                <li><a href="<?php echo base_url(); ?>somoyer_user">Account Dashboard</a></li>
                                <li><a href="<?php echo base_url().'somoyer_user/address_book/'.$customer_info->customer_id;?>">Address Book</a></li>
                                <li><a href="<?php echo base_url(); ?>somoyer_user/my_orders">My Orders</a></li>
                                <li class="current"><a href="<?php echo base_url(); ?>somoyer_user/wishlist">My Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </aside>
            </div>
    </div>
</div>
<script type="text/javascript">
            function clearwish()
            {
                var result = confirm('Are You Sure To Clear This ?');
                if (result)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

</script>