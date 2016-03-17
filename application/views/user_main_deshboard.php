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
            <?php foreach ($new_arivel as $value) { ?>
                
            
            <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInLeft animated"><a href="<?php echo base_url().'onlineshop/product_details/'.$value->product_id; ?>"><img alt="new arrivals and discount offer" src="<?php echo base_url().$value->slider_image; ?>"></a></div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
$sub_menu_id = NULL;
$p1 = 0;
$main_menu_1_img;

foreach ($main_menu_1 as $value) {

    if (isset($value->product_id)) {
        $main_menu_1_img = $value->menu_image;
        $main_menu_product_id_1 = $value->product_id;
    }
}
if ($main_menu_1 != null) {
    ?>

    <div class='home-first-category-block-men-fasion' ng-controller="userProduct1">
        <div class='home-01-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-men-fasion'>

                <div class='home-13-0-block-category-menu-header-men-fasion'>
                    <h1><?php foreach ($main_menu_1 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p1 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>


                <div class='home-13-0-block-category-menu-wrapper-men-fasion'>

                    <div class='home-13-0-block-subcategory-name-men-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_1"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-men-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_1)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_1?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_1_img; ?>'/>
                    </a>
                </div>
            <?php } ?>

            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_1 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product1">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="{{x.product_name}}" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <input type="hidden" value="<?php echo $main_menu_product_id_1;?>" name="main_menu_product_id_1">
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
                                            </div>
                                            <!--actions-->

                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>

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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p2 = 0;
$main_menu_2_img;

foreach ($main_menu_2 as $value) {

    if (isset($value->product_id)) {
        $main_menu_2_img = $value->menu_image;
        $main_menu_product_id_2 = $value->product_id;
    }
}
if ($main_menu_2 != null) {
    ?>
    <div class='home-first-category-block-manu2-fasion' ng-controller="userProduct2">
        <div class='home-56-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-manu2-fasion'>

                <div class='home-13-0-block-category-menu-header-manu2-fasion'>
                    <h1><?php foreach ($main_menu_2 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p2 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>


                <div class='home-13-0-block-category-menu-wrapper-manu2-fasion'>

                    <div class='home-13-0-block-subcategory-name-manu2-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_2"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-manu2-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_2)) { ?>
                <div class='first-block-image-container-manu2-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_2?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_2_img; ?>'/>
                    </a>
                </div>
            <?php } ?>

            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_2 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product2">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                               <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
                                            </div>
                                            <!--actions-->

                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>

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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p3 = 0;
$main_menu_3_img;
foreach ($main_menu_3 as $value) {

    if (isset($value->product_id)) {
        $main_menu_3_img = $value->menu_image;
        $main_menu_product_id_3 = $value->product_id;
    }
}
if ($main_menu_3 != NULL) {
    ?>
    <div class='home-first-category-block-menu3-fasion' ng-controller="userProduct3">
        <div class='home-02-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu3-fasion'>


                <div class='home-13-0-block-category-menu-header-menu3-fasion'>
                    <h1><?php foreach ($main_menu_3 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p3 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu3-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu3-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_3"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>


                <div class='home-13-0-block-category-menu-bottom-menu3-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_3)) { ?>
                <div class='first-block-image-container-manu2-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_3?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_3_img; ?>'/>
                    </a>
                </div>
            <?php } ?>
            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_3 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product3">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p4 = 0;
$main_menu_4_img;
foreach ($main_menu_4 as $value) {

    if (isset($value->product_id)) {
        $main_menu_4_img = $value->menu_image;
        $main_menu_product_id_4 = $value->product_id;
    }
}
if ($main_menu_4 != NULL) {
    ?>
    <div class='home-first-category-block-menu4-fasion'ng-controller="userProduct4">
        <div class='home-03-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu4-fasion'>


                <div class='home-13-0-block-category-menu-header-menu4-fasion'>
                    <h1><?php foreach ($main_menu_4 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p4 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu4-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu4-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_4"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-menu4-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_4)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_4?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_4_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_4 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product4">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p5 = 0;
$main_menu_5_img;
foreach ($main_menu_5 as $value) {

    if (isset($value->product_id)) {
        $main_menu_5_img = $value->menu_image;
        $main_menu_product_id_5 = $value->product_id;
    }
}
if ($main_menu_5 != NULL) {
    ?>



    <div class='home-first-category-block-menu5-fasion'ng-controller="userProduct5">
        <div class='home-04-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu5-fasion'>
                <div class='home-13-0-block-category-menu-header-menu5-fasion'>
                    <h1><?php foreach ($main_menu_5 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p5 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu5-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu5-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_5"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-menu5-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_5)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_5?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_5_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_5 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product5">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p6 = 0;
$main_menu_6_img;
foreach ($main_menu_6 as $value) {

    if (isset($value->product_id)) {
        $main_menu_6_img = $value->menu_image;
        $main_menu_product_id_6 = $value->product_id;
    }
}
if ($main_menu_6 != NULL) {
    ?>
    <div class='home-first-category-block-menu6-fasion' ng-controller="userProduct6">
        <div class='home-05-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu6-fasion'>


                <div class='home-13-0-block-category-menu-header-menu6-fasion'>
                    <h1><?php foreach ($main_menu_6 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p6 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu6-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu6-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_6"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-menu6-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_6)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_6?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_6_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_6 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product6">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p7 = 0;
$main_menu_7_img;
foreach ($main_menu_7 as $value) {

    if (isset($value->product_id)) {
        $main_menu_7_img = $value->menu_image;
        $main_menu_product_id_7 = $value->product_id;
    }
}
if ($main_menu_7 != NULL) {
    ?> 

    <div class='home-first-category-block-menu7-fasion' ng-controller="userProduct7">
        <div class='home-06-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu7-fasion'>
                <?php
                $sub_menu_id = NULL;
                $p7 = 0;
                $main_menu_7_img;
                ?> 

                <div class='home-13-0-block-category-menu-header-menu7-fasion'>
                    <h1><?php foreach ($main_menu_7 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p7 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu7-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu7-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_7"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-menu7-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_7)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_1?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_7_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_7 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product7">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p8 = 0;
$main_menu_8_img;
foreach ($main_menu_8 as $value) {

    if (isset($value->product_id)) {
        $main_menu_8_img = $value->menu_image;
        $main_menu_product_id_8 = $value->product_id;
    }
}
if ($main_menu_8 != NULL) {
    ?> 

    <div class='home-first-category-block-menu8-fasion' ng-controller="userProduct8">
        <div class='home-07-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu8-fasion'>

                <div class='home-13-0-block-category-menu-header-menu8-fasion'>
                    <h1><?php foreach ($main_menu_8 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p8 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu8-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu8-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_8"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>

                <div class='home-13-0-block-category-menu-bottom-menu8-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_8)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_1?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_8_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_8 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product8">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$sub_menu_id = NULL;
$p9 = 0;
$main_menu_9_img;
foreach ($main_menu_9 as $value) {

    if (isset($value->product_id)) {
        $main_menu_9_img = $value->menu_image;
        $main_menu_product_id_9 = $value->product_id;
    }
}
if ($main_menu_9 != NULL) {
    ?> 
    <div class='home-first-category-block-menu9-fasion' ng-controller="userProduct9">
        <div class='home-08-0-block-category-border-div'>
        </div>
        <div class=''>
            <div class='first-block-category-menu-container-menu9-fasion'>


                <div class='home-13-0-block-category-menu-header-menu9-fasion'>
                    <h1><?php foreach ($main_menu_9 as $value) { ?> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$p9 = $value->id; ?>"><span class="menu-title"><?php echo $value->main_menu_name; ?></span></a>  <?php } ?></h1>
                </div>
                <div class='home-13-0-block-category-menu-wrapper-menu9-fasion'>

                    <div class='home-13-0-block-subcategory-name-menu9-fasion'>
                        <h3 ng-repeat="s1 in j_sub_category_9"><a href="<?php echo base_url() . 'onlineshop/product_sub_category/' ?>{{s1.sub_category_id}}">{{s1.sub_category_name}}</a></h3>
                    </div>

                </div>
                <div class='home-13-0-block-category-menu-bottom-menu9-fasion' onclick='ShowHideSubCategory( & #39; home - 13 - 0BlockCategoryMenuWrapper & #39; , 13);'>
                    More Winter Product  &nbsp;<img id='subcategoryExpandCollaps13' src='images/winter_product/E13.png' width='15' style='padding-bottom:1px;' />
                </div>
            </div>
            <?php if (isset($main_menu_product_id_9)) { ?>
                <div class='first-block-image-container-men-fasion' >
                    <a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_1?>" title='more women'  target='_blank'>
                        <img style="width: 287px;height: 387px;" src='<?php echo base_url() . $main_menu_9_img; ?>'/>
                    </a>
                </div>
            <?php } ?>


            <div class="col-md-7">
                <div class="shoes-product-slider small-pr-slider wow bounceInRight animated">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2><?php foreach ($main_menu_9 as $value) { ?><span><?php echo $value->main_menu_name; ?></span><?php } ?></h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3"> 

                                <!-- Item -->
                                <div class="item" ng-repeat="x in product9">
                                    <div class="col-item">
                                        <div class="sale-label sale-top-right">Sale</div>
                                        <div class="product-image-area"> <a class="product-image" title="Sample Product" href="<?php echo base_url().'onlineshop/product_details/'?>{{x.product_id}}"> <img src="<?php echo base_url(); ?>{{x.image_path}}" class="img-responsive" alt="{{x.product_name}}" /> </a></div>
                                        <div class="actions-links"><span class="add-to-links"> <a title="Add to Wishlist" class="link-wishlist" href="" ng-click="add_to_wishlist(x.product_id)"><span>Add to Wishlist</span></a> </span> </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{x.product_name}}" href="product-detail.html">{{x.product_name}}</a> </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:60%" class="rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <p class="special-price" ng-if="x.discount == NULL"> <span class="price"> Tk. {{x.product_price}}</span> </p>
                                                        <p class="special-price" ng-if="x.discount != NULL"> <span class="price"> Tk. {{x.discount}}</span> </p>
                                                        <p class="old-price" ng-if="x.discount != NULL"><span class="price-sep">-</span> <span class="price">TK. {{x.product_price}} </span> </p>
                                                    </div>
                                                </div>
                                                <!--item-content--> 
                                            </div>
                                            <!--info-inner-->
                                            <div class="actions">
                                                <form method="post" action="<?php echo base_url().'onlineshop/go_for_cart_from_home'; ?>">
                                                    <input type="hidden" value="{{x.product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="qty">
                                                    <button type="submit" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                                </form>
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
<?php } ?>
<?php
$main_category_id1 = $this->onlineshop_model->get_product_by_main_category_id($p1);
$j_sub_category_1 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p1));
//echo $j_sub_category_1;
$product1 = json_encode($main_category_id1);
//echo $product1;
//echo '</br>';
//echo $j_sub_category_1;

$main_category_id2 = $this->onlineshop_model->get_product_by_main_category_id($p2);
$j_sub_category_2 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p2));
$product2 = json_encode($main_category_id2);
$main_category_id3 = $this->onlineshop_model->get_product_by_main_category_id($p3);
$j_sub_category_3 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p3));
$product3 = json_encode($main_category_id3);
$main_category_id4 = $this->onlineshop_model->get_product_by_main_category_id($p4);
$j_sub_category_4 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p4));
$product4 = json_encode($main_category_id4);
$main_category_id5 = $this->onlineshop_model->get_product_by_main_category_id($p5);
$j_sub_category_5 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p5));
$product5 = json_encode($main_category_id5);
$main_category_id6 = $this->onlineshop_model->get_product_by_main_category_id($p6);
$j_sub_category_6 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p6));
$product6 = json_encode($main_category_id6);
$main_category_id7 = $this->onlineshop_model->get_product_by_main_category_id($p7);
$j_sub_category_7 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p7));
$product7 = json_encode($main_category_id7);
$main_category_id8 = $this->onlineshop_model->get_product_by_main_category_id($p8);
$j_sub_category_8 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p8));
$product8 = json_encode($main_category_id8);
$main_category_id9 = $this->onlineshop_model->get_product_by_main_category_id($p9);
$j_sub_category_9 = json_encode($this->onlineshop_model->get_sub_category_by_main_category_id($p9));
$product9 = json_encode($main_category_id9);
?>
<script>
            client.controller('userProduct1', function($scope) {
            $scope.product1 = <?php echo $product1; ?>;
                    $scope.j_sub_category_1 = <?php echo $j_sub_category_1; ?>;
                    //return (val.j_sub_category_1 != 2);

            });
            client.controller('userProduct2', function($scope) {
            $scope.product2 = <?php echo $product2; ?>;
                    $scope.j_sub_category_2 = <?php echo $j_sub_category_2; ?>;
            });
            client.controller('userProduct3', function($scope) {
            $scope.product3 = <?php echo $product3; ?>;
                    $scope.j_sub_category_3 = <?php echo $j_sub_category_3; ?>;
            });
            client.controller('userProduct4', function($scope) {
            $scope.product4 = <?php echo $product4; ?>;
                    $scope.j_sub_category_4 = <?php echo $j_sub_category_4; ?>;
            });
            client.controller('userProduct5', function($scope) {
            $scope.product5 = <?php echo $product5; ?>;
                    $scope.j_sub_category_5 = <?php echo $j_sub_category_5; ?>;
            });
            client.controller('userProduct6', function($scope) {
            $scope.product6 = <?php echo $product6; ?>;
                    $scope.j_sub_category_6 = <?php echo $j_sub_category_6; ?>;
            });
            client.controller('userProduct7', function($scope) {
            $scope.product7 = <?php echo $product7; ?>;
                    $scope.j_sub_category_7 = <?php echo $j_sub_category_7; ?>;
            });
            client.controller('userProduct8', function($scope) {
            $scope.product8 = <?php echo $product8; ?>;
                    $scope.j_sub_category_8 = <?php echo $j_sub_category_8; ?>;
            });
            client.controller('userProduct9', function($scope) {
            $scope.product9 = <?php echo $product9; ?>;
                    $scope.j_sub_category_9 = <?php echo $j_sub_category_9; ?>;
            });
</script>
