
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <ul>
                <li class="home"> <a href="<?php echo base_url();?>" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
                <li class=""> <a href="<?php $main_category_info=$this->onlineshop_model->get_main_category_name_and_id($product_info->main_category_id); echo base_url().'onlineshop/product_main_category/'. $main_category_info->main_category_id?>" title="Go to Home Page"><?php echo $main_category_info->main_category_name;?></a><span>&mdash;›</span></li>
                <li class="category13"><strong> <?php echo $product_info->product_name;?> </strong></li>
            </ul>
        </div>
    </div>
</div>

<section class="main-container col1-layout" ng-controller="productDetails">
    <div class="main container">
        <div class="col-main">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">
                            <div class="product-img-box col-sm-5 wow bounceInRight animated">
                                <div class="new-label new-top-left"> New </div>
                                <div class="product-image">
                                    <div class="large-image"> <a href="<?php echo base_url() . $product_info->image_path; ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img src="<?php echo base_url() . $product_info->image_path; ?>"> </a> </div>
                                    <div class="flexslider flexslider-thumb">
                                        <ul class="previews-list slides">        
                                            <li ng-repeat="image in images"><a href='<?php echo base_url(); ?>{{image.image_path}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>{{image.image_path}}' "><img src="<?php echo base_url(); ?>{{image.image_path}}" alt = "Thumbnail 1"/></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- end: more-images -->

                                <div class="clear"></div>
                            </div>
                            <div class="product-shop col-sm-7 wow bounceInLeft animated">
                                <div class="product-name">
                                    <h2><?php echo $product_info->product_name;?></h2>
                                </div>
                               
                                <br>
                                <p class="availability in-stock"><span>In Stock</span></p>
                                <div class="price-block">
                                    <div class="price-box">
                                        <?php if(isset($product_info->discount)){ ?>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> Tk. <?php echo $product_info->product_price;?> </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> Tk. <?php echo $product_info->discount;?> </span> </p>
                                        <?php }else { ?>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> Tk. <?php echo $product_info->price;?> </span> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div class="short-description">
                                    <h2><strong>Size:</strong></h2> 
                                    <div class="input-group uol">
                                        <div class="l12" ng-repeat="size in sizes">
                                            <input class="radiosize" type='radio'  name='size' value="{{size.size_name}}" id='{{size.size_id}}' required/>
                                            <label for='{{size.size_id}}' class="rediolabel">{{size.size_name}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <label for="qty">Quantity:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <input type="number" class="input-text qty" value="{{qty}}" title="Qty" name="qty" maxlength="12" id="qty">
                                                <button ng-click="qty= qty + 1" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                <button ng-click="decrement()" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        <div class="">
                                            <input type="hidden" value="<?php echo $product_id;?>" name="product_id">
                                            <button class="button btn-cart" title="Add to Cart" type="submit"><span><i class="icon-basket"></i> Add to Cart</span></button>
                                        </div>
                                    </div>
                                    <div class="email-addto-box">
                                        <ul class="add-to-links">
                                            <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                                            <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Order Now</span></a></li>
                                        </ul>
                                        <p class="email-friend"><a href="#" class=""><span>Share on Facebook</span></a></p>
                                    </div>
                                </div>
                                <!--                  <br>
                                                  <div class="actions">
                                                      <button type="button" value="save" class="button btn-cart"><a href="#"><span>Add to Cart</span></a></button>
                                                      <button type="button" value="save" class="button btn-app"><span>Add to Wishlist</span></button>
                                                      <button type="button" value="save" class="button btn-checkout"><span>Order Now</span></button>
                                                  </div>-->
                            </div>
                        </form>
                    </div>
                    <div class="product-collateral">
                        <div class="col-sm-12 wow bounceInUp animated">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                               

                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        <label> Product Model:</label>
                                     <br><img style="margin-left: 20px;width: 20px; height: 20px;"src="<?php echo base_url();?>images/products/pdma1.png"> Good Product
                                   </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="box-additional">
                <div class="related-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Related Products</h2>
                        </div>
                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4"> 

                                <!-- Item -->
                                <div class="item">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/products-images/p3.jpg" class="img-responsive" alt="a" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a href="#l" title=" Sample Product"> Sample Product </a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <!--actions-->

                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item --> 



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br><br>
    </div>
    <!-- JavaScript --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/parallax.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/common.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/cloud-zoom.js"></script>
</section>
<!--End main-container --> 
<script>
    client.controller('productDetails', function($scope, $http) {
        $scope.images = <?php echo $product_image; ?>;
        $scope.sizes=<?php echo $product_size;?>;
        $scope.qty = 1;
        var min = $scope.qty;
        $scope.decrement = function() {
            if ($scope.qty <= min) {
                return;
            }
            $scope.qty--;
        };
    });
</script>

