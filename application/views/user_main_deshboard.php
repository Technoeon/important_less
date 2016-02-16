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
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_1 as $value) { ?> <a href="<?php echo $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_1 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
<div class='home-first-category-block'>
    <div class='home-13-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            <div class='home-13-0-block-category-menu-header'>
                <h1> <?php foreach ($main_menu_2 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
            <div class='home-13-0-block-category-menu-wrapper'>
                <?php foreach ($sub_menu_2 as $sub_menu_value) { ?>
                 <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                <div class='home-13-0-block-subcategory-name'>
                    <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
                </div>
                 <?php } ?>
                <?php } ?>
               
            </div>
            <div class='home-13-0-block-category-menu-bottom' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
            </div>
        </div>
        <div class='first-block-image-container' >
            <a href='Product/153357/full-sleeve-gents-sweater.html' title='More Winter'  target='_blank'>
                <img src='<?php echo base_url(); ?>images/men/Offer1153.jpg'/>
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
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/men/smallImage1.jpg" class="img-responsive" alt="a" /> </a></div>
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
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>images/men/smallImage1_glase.jpg" class="img-responsive" alt="a" /> </a></div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>images/men/smallImage1_paint.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
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
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>images/men/smallImage1_rejer"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:50%"></div>
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

                            <!-- Item -->
                            <div class="item">
                                <div class="col-item">
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p63.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0%"></div>
                                                    </div>
                                                </div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
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
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img alt="a" class="img-responsive" src="<?php echo base_url(); ?>products-images/p64.jpg"> </a></div>
                                    <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title=" Sample Product" href="product-detail.html"> Sample Product </a> </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:50%"></div>
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
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_3 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_3 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_4 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_4 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_5 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_5 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_6 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_6 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_7 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_8 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_8 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='home-first-category-block-men-fasion'>
    <div class='home-56-0-block-category-border-div'>
    </div>
    <div class=''>
        <div class='first-block-category-menu-container-men-fasion'>
             <?php
            $sub_menu_id = NULL;
            ?> 
            
            <div class='home-13-0-block-category-menu-header-men-fasion'>
                <h1><?php foreach ($main_menu_9 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
            </div>
          
               
                    <div class='home-13-0-block-category-menu-wrapper-men-fasion'>
                        <?php foreach ($sub_menu_9 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                        <div class='home-13-0-block-subcategory-name-men-fasion'>
                            <h3><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></h3>
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
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 home-show-more-men-fasion'>
        <a href='Category/13/0/winter-collection.html' title='view more' target='_blank'>More >>
        </a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

