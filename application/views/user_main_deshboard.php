<?php
//position 1 start
$main_menu_1 = $this->onlineshop_model->get_main_menu_by_position(1);
$sub_menu_1 = $this->onlineshop_model->get_sub_menu_by_position(1);
$menu_1 = $this->onlineshop_model->get_menu_by_position(1);
//position 1 end
//position 2 start
$main_menu_2 = $this->onlineshop_model->get_main_menu_by_position(2);
$sub_menu_2 = $this->onlineshop_model->get_sub_menu_by_position(2);
$menu_2 = $this->onlineshop_model->get_menu_by_position(2);
//position 2 end
//position 3 start
$main_menu_3 = $this->onlineshop_model->get_main_menu_by_position(3);
$sub_menu_3 = $this->onlineshop_model->get_sub_menu_by_position(3);
$menu_3 = $this->onlineshop_model->get_menu_by_position(3);
//position 3 end
//position 4 start
$main_menu_4 = $this->onlineshop_model->get_main_menu_by_position(4);
$sub_menu_4 = $this->onlineshop_model->get_sub_menu_by_position(4);
$menu_4 = $this->onlineshop_model->get_menu_by_position(4);
//position 4 end
//position 5 start
$main_menu_5 = $this->onlineshop_model->get_main_menu_by_position(5);
$sub_menu_5 = $this->onlineshop_model->get_sub_menu_by_position(5);
$menu_5 = $this->onlineshop_model->get_menu_by_position(5);
//position 5 end
//position 6 start
$main_menu_6 = $this->onlineshop_model->get_main_menu_by_position(6);
$sub_menu_6 = $this->onlineshop_model->get_sub_menu_by_position(6);
$menu_6 = $this->onlineshop_model->get_menu_by_position(6);

//position 6 end
//position 7 start
$main_menu_7 = $this->onlineshop_model->get_main_menu_by_position(7);
$sub_menu_7 = $this->onlineshop_model->get_sub_menu_by_position(7);
$menu_7 = $this->onlineshop_model->get_menu_by_position(7);
//position 7 end
//position 8 start
$main_menu_8 = $this->onlineshop_model->get_main_menu_by_position(8);
$sub_menu_8 = $this->onlineshop_model->get_sub_menu_by_position(8);
$menu_8 = $this->onlineshop_model->get_menu_by_position(8);

//position 8 end
//position 9 start
$main_menu_9 = $this->onlineshop_model->get_main_menu_by_position(9);
$sub_menu_9 = $this->onlineshop_model->get_sub_menu_by_position(9);
$menu_9 = $this->onlineshop_model->get_menu_by_position(9);
//position 9 end
?>            


<?php
echo $leftside_manu;
?>

<div class="offer-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInLeft animated"><a href="#"><img alt="offer banner1" src="<?php echo base_url(); ?>images/offer-banner1.png"></a></div>
            <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInUp animated"><a href="#"><img alt="offer banner2" src="<?php echo base_url(); ?>images/offer-banner2.png"></a></div>
            <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInRight animated"><a href="#"><img alt="offer banner3" src="<?php echo base_url(); ?>images/offer-banner3.png"></a></div>
        </div>
    </div>
</div>
<div class='home-first-category-block-men-fasion' ng-controller="userProduct">
    <div class='home-01-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
            <?php
            $sub_menu_id = NULL;
            $p1=0;
            ?> 

            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_1 as $value) { ?> <a href="<?php echo $p1=$value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                <?php foreach ($sub_menu_1 as $sub_menu_value) { ?>
                    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                $sub_menu_id = $sub_menu_value->sub_menu_id;
                        ?></a></h3>
                        </div>
                    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-men-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-men-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_1 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item" ng-repeat="x in product">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html">{{x.product_name}}</a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <p class="special-price"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> TK. {{x.product_price}} </span> </p>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-manu2-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-manu2-fasion'>
            <?php
            $sub_menu_id = NULL;
            ?> 

            <div class='home-13-0-block-category-menu-header-manu2-fasion'>
                <h1><?php foreach ($main_menu_2 as $value) { ?> <a href="<?php echo $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-manu2-fasion'>
                <?php foreach ($sub_menu_2 as $sub_menu_value) { ?>
    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-manu2-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                            ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-manu2-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-manu2-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_2 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu3-fasion'>
    <div class='home-02-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu3-fasion'>
            <?php
            $sub_menu_id = NULL;
            ?> 

            <div class='home-13-0-block-category-menu-header-menu3-fasion'>
                <h1><?php foreach ($main_menu_3 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu3-fasion'>
<?php foreach ($sub_menu_3 as $sub_menu_value) { ?>
                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu3-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                                    $sub_menu_id = $sub_menu_value->sub_menu_id;
                                    ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu3-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu3-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_3 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu4-fasion'>
    <div class='home-03-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu4-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu4-fasion'>
                <h1><?php foreach ($main_menu_4 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu4-fasion'>
                            <?php foreach ($sub_menu_4 as $sub_menu_value) { ?>
                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu4-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                $sub_menu_id = $sub_menu_value->sub_menu_id;
                                    ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu4-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu4-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_4 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu5-fasion'>
    <div class='home-04-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu5-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu5-fasion'>
                <h1><?php foreach ($main_menu_5 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu5-fasion'>
                            <?php foreach ($sub_menu_5 as $sub_menu_value) { ?>
                    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu5-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                $sub_menu_id = $sub_menu_value->sub_menu_id;
                ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu5-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu5-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_5 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu6-fasion'>
    <div class='home-05-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu6-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu6-fasion'>
                <h1><?php foreach ($main_menu_6 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu6-fasion'>
                <?php foreach ($sub_menu_6 as $sub_menu_value) { ?>
                    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu6-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                $sub_menu_id = $sub_menu_value->sub_menu_id;
                ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu6-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu6-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_6 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-menu6-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu7-fasion'>
    <div class='home-06-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu7-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu7-fasion'>
                <h1><?php foreach ($main_menu_7 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu7-fasion'>
                <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu7-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
                $sub_menu_id = $sub_menu_value->sub_menu_id;
                ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu7-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu7-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_7 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-menu7-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu8-fasion'>
    <div class='home-07-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu8-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu8-fasion'>
                <h1><?php foreach ($main_menu_8 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu8-fasion'>
                <?php foreach ($sub_menu_8 as $sub_menu_value) { ?>
    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu8-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
        $sub_menu_id = $sub_menu_value->sub_menu_id;
        ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu8-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu8-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_8 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-menu8-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-menu9-fasion'>
    <div class='home-08-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-menu9-fasion'>
<?php
$sub_menu_id = NULL;
?> 

            <div class='home-13-0-block-category-menu-header-menu9-fasion'>
                <h1><?php foreach ($main_menu_9 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>


            <div class='home-13-0-block-category-menu-wrapper-menu9-fasion'>
<?php foreach ($sub_menu_9 as $sub_menu_value) { ?>
    <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-menu9-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name;
        $sub_menu_id = $sub_menu_value->sub_menu_id;
        ?></a></h3>
                        </div>
    <?php } ?>
<?php } ?>
            </div>

            <div class='home-13-0-block-category-menu-bottom-menu9-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container-menu9-fasion' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/winter_product/Offer1094.jpg'/>
            </a>
        </div>


        <div class="col-md-7">
            <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2><?php foreach ($main_menu_9 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                    </div>
                    <div id="shoes-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col3"> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url(); ?>onlineshop/product_details"> <img src="<?php echo base_url(); ?>images/winter_product/s1/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/winter_product/s2/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:60%" class="rating"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
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


                            <!-- End Item --> 


                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p61.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
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
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <!--actions-->

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item --> 

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="new-label new-top-right">New</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p62.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                            </div>
                                            <!--item-content--> 
                                        </div>
                                        <!--info-inner-->
                                        <div class="actions">
                                            <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-menu9-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$main_category_id1 = $this->onlineshop_model->get_product_by_main_category_id($p1);
$product1 = json_encode($main_category_id1);
echo $product1;
?>
<script>
            client.controller('userProduct', function($scope) {
            $scope.product = <?php echo $product1; ?>;
            });
</script>
