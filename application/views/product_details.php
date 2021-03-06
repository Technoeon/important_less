
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
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:60%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
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
                                                <input type="number" class="input-text qty" value="{{qty}}" title="Qty" name="qty" maxlength="12" id="qty" min="1">
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
                                            <li> <a class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a></li>
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
                                <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>

                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        <label>Product Model:</label>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews_tabs">
                                    <div class="box-collateral box-reviews" id="customer-reviews">
                                        <div class="box-reviews1">
                                            <div class="form-add">
                                                <form id="review-form" method="post" action="#">
                                                    <h3>Write Your Own Review</h3>
                                                    <fieldset>
                                                        <h4>How do you rate this product? <em class="required">*</em></h4>
                                                        <span id="input-message-box"></span>
                                                        <table id="product-review-table" class="data-table">
                                                            <colgroup>
                                                                <col>
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 *</span></th>
                                                                    <th><span class="nobr">2 *</span></th>
                                                                    <th><span class="nobr">3 *</span></th>
                                                                    <th><span class="nobr">4 *</span></th>
                                                                    <th><span class="nobr">5 *</span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="first odd">
                                                                    <th>Price</th>
                                                                    <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Value</th>
                                                                    <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Quality</th>
                                                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                        <div class="review1">
                                                            <ul class="form-list">
                                                                <li>
                                                                    <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text required-entry" id="nickname_field" name="nickname">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label class="required" for="summary_field">Summary<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text required-entry" id="summary_field" name="title">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review2">
                                                            <ul>
                                                                <li>
                                                                    <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="box-reviews2">
                                            <h3>Customer Reviews</h3>
                                            <div class="box visible">
                                                <ul>
                                                    <li>
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#/catalog/product/view/id/61/">Excellent</a></h6>
                                                            <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                                                            <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                                                        </div>
                                                    </li>
                                                    <li class="even">
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                                                            <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                                            <div class="review-txt"> Minimalism is the online ! </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                                            <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                                            <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
                                        </div>
                                        <div class="clear"></div>
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

