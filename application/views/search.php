<!-- Two columns content -->
<section class="main-container col2-left-layout" ng-controller="searchdisplay">
    <div class="main container">
        <div class="row">
            <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
                <div class="category-title">
                    <h1>SHOWING <span class="text-warning"><?php echo $counter; ?></span> IN : <?php echo $search_name; ?></h1>
                </div>

                <div class="category-products">
                    <div class="toolbar">
                        <div class="pager">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="products-grid">
                        <loading></loading>
                        <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6" ng-repeat="product in products">
                            <div class="col-item">
                                <div class="sale-label sale-top-right">Sale</div>
                                <div class="product-image-area"> <a class="product-image" title="Sample Product" ng-href="<?php echo base_url().'onlineshop/product_details/'?>{{product.product_id}}"> <img src="<?php echo base_url(); ?>{{product.image_path}}" class="img-responsive" alt="{{product.product_name}}" /> </a></div>
                                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="<?php echo base_url(); ?>quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                <div class="info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{product.product_name}}" ng-href="<?php echo base_url().'onlineshop/product_details/'?>{{product.product_id}}">{{product.product_name}}</a></div>
                                        <!--item-title-->
                                        <div class="item-content">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:60%" class="rating"></div>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price" ng-if="product.discount == NULL"> <span class="price"> Tk. {{product.product_price}}</span> </p>
                                                <p class="special-price" ng-if="product.discount != NULL"> <span class="price"> Tk. {{product.discount}}</span> </p>
                                                <p class="old-price" ng-if="product.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{product.product_price}} </span> </p>
                                            </div>
                                        </div>
                                        <!--item-content--> 
                                    </div>
                                    <!--info-inner-->
                                    <div class="actions">
                                        <button type="submit" title="Add to Cart" ng-click="productdetails(product.product_id)"  class="button btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <!--actions-->

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <div class="toolbar">
                        <div class="pager">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
            </section>
            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">

                
                <div class="block block-cart">
                    <div class="block-title ">My Cart</div>
                    <div class="block-content">
                        <div class="summary">
                            <p class="amount">There are <a href="#">{{totalItems}} items</a> in your cart.</p>
                            <p class="subtotal"> <span class="label">Cart Total:</span> <span class="price">Tk. {{totalAmount}}</span> </p>
                        </div>
                        <div class="ajax-checkout"><?php
                                            $customer_id = $this->session->userdata('customer_id');
                                            if ($customer_id != NULL) {
                                                ?>
                                                <form action="<?php echo base_url() . 'onlineshop/user_checkout'; ?>" method="post"><button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button></form>
                                               
                                         
                                            <?php } else {
                                                 ?>
                                                <form action="<?php echo base_url() . 'onlineshop/user_login'; ?>" method="post"><button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button></form> 
                                               
                                            
                                                    <?php } ?>
                        </div>
                        <p class="block-subtitle">Recently added item(s) </p>
                        <ul>
                            <li class="item" ng-repeat="content in contents"> <a class="product-image" title="{{content.name}}" href="#"><img width="80" alt="{{content.name}}" src="<?php echo base_url(); ?>{{content.image}}"></a>
                                <div class="product-details">
                                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="" ng-click="removeItem(content.rowid)"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="#">{{content.name}}</a> </p>
                                    <strong>{{content.qty}}</strong> x <span class="price">Tk. {{content.price}}</span> </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<script>
   client.controller('searchdisplay', function($scope, $http) {
        $scope.products = <?php echo $search_product; ?>; 
        $scope.productdetails=function(product_id){
           window.location = "<?php echo base_url().'onlineshop/product_details/'?>"+product_id; 
        };

    });
</script>

