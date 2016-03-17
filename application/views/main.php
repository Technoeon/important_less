<!DOCTYPE html>
<html ng-app="client">
    <head>
        <meta charset="utf-8">
        <title>Somoyer Deal</title>

        <!-- Favicons Icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo base_url(); ?>favicon/manifest.json">
        <!-- Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS Style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/index-2-css/revslider.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main_product.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/home-category-block.css" type="text/css">

        <!-- Google Fonts -->
        <link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.js"></script>
        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>
        <script>
            var client = angular.module('client', ['ngSanitize', 'ui.bootstrap']);
            client.directive('loading', function () {
                return {
                    restrict: 'E',
                    replace: true,
                    template: '<div class="loading"><img src="<?php echo base_url() ?>images/ajax-loader.gif" width="50" height="50" />LOADING...</div>',
                    link: function (scope, element, attr) {
                        scope.$watch('loading', function (val) {
                            if (val)
                                $(element).show();
                            else
                                $(element).hide();
                        });
                    }
                };
            })

        </script>
        <style>.loading { text-align: center; border:0px solid #ddd; padding:20px; margin:40px 333px; width:200px;}
            .uol {
                list-style: none;
            }
            .l12 {
                display: inline-block;
                margin-right: -10px;
            }
            .radiosize {
                visibility:hidden;
            }
            .rediolabel {
                text-align: center;
                min-width: 25px;
                cursor: pointer;
                padding: 5px;
                box-shadow: 1px 1px 0px #DEB;
            }
            .radiosize:checked + .rediolabel {
                background: #6dbe14;
            }
            [uib-typeahead-popup].dropdown-menu {
                display: block;
                max-height: 250px;
                overflow: auto;
                width: 440px;
            }
        </style>
        
    </head>
<?php
//position 1 start
$main_menu_1 = $this->onlineshop_model->get_main_menu_by_position(1);
//echo '<pre>';
//print_r($main_menu_1);
//exit();
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
    <body ng-controller="cart">

        <div class="page">
            <header class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row"> 
                            <!-- Header Language -->
                            <div class="col-xs-6">

                                <!-- End Header Language --> 

                                <!-- Header Currency -->


                                <!-- End Header Currency -->


                            </div>
                            <div class="col-xs-6"> 

                                <!-- Header Top Links -->
                                <div class="toplinks">
                                    <div class="links">
                                        <div class="myaccount"><a title="About Us" href="<?php echo base_url(); ?>onlineshop/user_account"><span class="hidden-xs">About Us</span></a></div>
                                        <div class="myaccount"><a title="Contact Us" href="<?php echo base_url(); ?>onlineshop/user_account"><span class="hidden-xs">Contact Us</span></a></div>
                                        <div class="myaccount"><a title="My Account" href="<?php echo base_url(); ?>onlineshop/user_account"><span class="hidden-xs">My Account</span></a></div>
                                        <div class="wishlist"><a title="My Wishlist"  href="<?php echo base_url(); ?>onlineshop"><span class="hidden-xs">Wishlist</span></a></div>
                                        <div class="check">


                                        </div>
                                        <div class="login">
                                            <?php
                                            $customer_id = $this->session->userdata('customer_id');
                                            if ($customer_id != NULL) {
                                                ?>
                                                <a title="Checkout" href="<?php echo base_url(); ?>onlineshop/user_checkout"><span class="hidden-xs">Checkout</span></a>
                                                <a title="Login" href="<?php echo base_url(); ?>onlineshop/customer_logout"><span  class="hidden-xs">Log out</span></a>
                                            <?php } else {
                                                ?>
                                                <a title="Login" href="<?php echo base_url(); ?>onlineshop/user_login"><span  class="hidden-xs">Log in</span></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Header Top Links --> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 col-md-2"> 
                            <!-- Header Logo --> 
                            <a class="logo" title="Somoyer Deal" href="<?php echo base_url(); ?>onlineshop"><img alt="Somoyer Deal" src="<?php echo base_url(); ?>images/logo.png"></a> 
                            <!-- End Header Logo --> 
                        </div>
                        <div class="col-lg-8 col-sm-6 col-md-8"> 
                            <!-- Search-col -->
                            <div class="search-box" >
                                <?php $all_main_category = $this->onlineshop_model->get_all_main_category_name_and_id(); ?>
                                <form action="<?php echo base_url() . 'onlineshop/search' ?>" method="POST" id="search_mini_form" name="Categories">
                                    
                                    <div ng-controller="TypeaheadCtrl">
                                        <script type="text/ng-template" id="customTemplate.html">
                                            <a href="<?php echo base_url().'onlineshop/product_details/'; ?>{{match.model.product_id}}" style="text-decoration : none; height:60px;">
                                                <img class="img-responsive" style="float: left; margin: 2px;" ng-src="<?php echo base_url(); ?>{{match.model.image_path}}" width="40" height="40">
                                                <div>
                                                    <span ng-bind-html="match.label | uibTypeaheadHighlight:query"></span><br>
                                                    Pirce : Tk. <span ng-bind-html="match.model.price"></span> 
                                                </div>
                                            </a>
                                        </script>
                                        <input type="text" ng-model="customSelected" placeholder="Search product..." uib-typeahead="state as state.product_name for state in statesWithFlags | filter:{product_name:$viewValue}" typeahead-template-url="customTemplate.html" class="form-control" typeahead-show-hint="true" typeahead-min-length="2" maxlength="70" name="product_name" id="search">
                                        <select name="main_category_id" class="cate-dropdown hidden-xs">
                                            <option value="0">All Categories</option>
                                            <?php foreach ($all_main_category as $value) { ?>
                                                <option value="<?php echo $value->main_category_id;  ?>"><?php echo $value->main_category_name;  ?></option>
                                            <?php } ?>
                                        </select>
                                        <button type="submit" id="submit-button" class="search-btn-bg" onclick="document.getElementById('search').value='';"><span>Search</span></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search-col --> 
                        </div>
                        <!-- Top Cart -->
                        <div class="col-lg-2 col-sm-3 col-md-2">
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                                            <div class="cart-box"><span class="title">cart</span><span id="cart-total">{{totalItems}} item</span></div>
                                        </a></div>
                                    <div>
                                        <div style="display: none;" class="top-cart-content arrow_box">
                                            <div class="block-subtitle">Recently added item</div>
                                            <ul id="cart-sidebar" class="mini-products-list">

                                                <li class="item even" ng-repeat="content in contents"> <a class="product-image" href="#" title="{{content.name}}"><img alt="{{content.name}}" src="<?php echo base_url() ?>{{content.image}}" width="80"></a>
                                                    <div class="detail-item">
                                                        <div class="product-details"><?php if (empty($cart_del_disable)) { ?> <a href="" title="Remove This Item" ng-click="removeItem(content.rowid)" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="" title="Edit item" href="#">&nbsp;</a><?php } ?>
                                                            <p class="product-name"> <a href="#" title="{{content.name}}">{{content.name}}</a> </p>
                                                        </div>
                                                        <div class="product-details-bottom"> <span class="price">Tk. {{content.price}}</span> <span class="title-desc">Qty:</span> <strong>{{content.qty}}</strong> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">Total: <span class="price">Tk. {{totalAmount}}</span></div>
                                            <div class="actions" ng-hide="totalItems == 0">
                                                <?php
                                                $customer_id = $this->session->userdata('customer_id');
                                                if ($customer_id != NULL) {
                                                    ?>
                                                    <form action="<?php echo base_url() . 'onlineshop/user_checkout'; ?>" method="post"><button class="btn-checkout" type="submit"><a href="<?php echo base_url(); ?>onlineshop/user_checkout"><span>Checkout</span></a></button></form>

                                                    <form action="<?php echo base_url() . 'cart/show_cart'; ?>" method="post"><button class="view-cart" type="submit"><span>View Cart</span></button></form>
                                                <?php } else {
                                                    ?>
                                                    <form action="<?php echo base_url() . 'onlineshop/user_login'; ?>" method="post"><button class="btn-checkout" type="submit"><a title="Login" href="<?php echo base_url(); ?>onlineshop/user_login"><span  class="hidden-xs">Checkout</span></a></button> 
                                                        <form action="<?php echo base_url() . 'cart/show_cart'; ?>" method="post"><button class="view-cart" type="submit"><span>View Cart</span></button></form>

                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                                    <input value="" type="hidden">
                                    <input id="enable_module" value="1" type="hidden">
                                    <input class="effect_to_cart" value="1" type="hidden">
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                </div>
                            </div>
                        </div>
                        <!-- End Top Cart --> 
                    </div>
                </div>
            </header>
            <!-- end header -->
            <nav>
                <div class="container">
                    <div class="nav-inner"> 
                        <!-- mobile-menu -->
                        <div class="hidden-desktop" id="mobile-menu">
                            <ul class="navmenu">
                                <li>
                                    <div class="menutop">
                                        <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                                        <h2>Menu</h2>
                                    </div>
                                    <ul style="display:none;" class="submenu">
                                        <li>
                                            <ul class="topnav">
                                                <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="#"> <span>Pages</span> </a>
                                                    <ul class="level0">
                                                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                                                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                                                        <li class="level1 nav-10-3"> <a href="product-detail.html"> <span>Product Detail</span> </a> </li>
                                                        <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Shopping Cart</span> </a> </li>
                                                        <li class="level1 first"><a href="checkout.html"><span>Checkout</span></a> </li>
                                                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                                                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                                                        <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                                                        <li class="level1"> <a href="about.html"> <span>About us</span> </a> </li>
                                                        <li class="level1"><a href="blog.html"><span>Blog</span></a> </li>
                                                        <li class="level1"><a href="contact.html"><span>Contact us</span></a> </li>

                                                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                                                    </ul>
                                                </li>
                                                <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Fashion</span> </a> </li>
                                                <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a> </li>
                                                <li class="level0 nav-10 level-top "> <a class="level-top" href="blog.html"> <span>Blog</span> </a> </li>
                                                <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="contact.html"> <span>Contact</span> </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!--navmenu--> 
                        </div>


                        <!--End mobile-menu -->
                        <ul id="nav" class="hidden-xs">

    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop"><span>Home</span> </a></li>



    <?php
    $sub_menu_id = NULL;
    $main_menu_1_img;
    $main_menu_product_id_1;
    $main_menu_product_name_1;
    
    ?>    
    <?php
    foreach ($main_menu_1 as $value) {
        if (isset($value->product_id)) {
            $main_menu_1_img = $value->menu_image;
            $main_menu_product_id_1 = $value->product_id;
            $main_menu_product_name_1 = $value->product_name;
        }
        ?>
       <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id; ?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_1 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_1 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_1)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo base_url().'onlineshop/product_details/'.$main_menu_product_id_1?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_1_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_1 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>

    <?php
    $sub_menu_id = NULL;
    $main_menu_2_img;
    $main_menu_product_id_2;
    $main_menu_product_name_2;
    ?>    
    <?php
    foreach ($main_menu_2 as $value) {
        if (isset($value->product_id)) {
            $main_menu_2_img = $value->menu_image;
            $main_menu_product_id_2 = $value->product_id;
            $main_menu_product_name_2 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_2 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_2 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_2)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_2 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_2_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_2 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_3_img;
    $main_menu_product_id_3;
    $main_menu_product_name_3;
    ?>    
    <?php
    foreach ($main_menu_3 as $value) {
        if (isset($value->product_id)) {
            $main_menu_3_img = $value->menu_image;
            $main_menu_product_id_3 = $value->product_id;
            $main_menu_product_name_3 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_3 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_3 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_3)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_3 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_3_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_3 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_4_img;
    $main_menu_product_id_4;
    $main_menu_product_name_4;
    ?>    
    <?php
    foreach ($main_menu_4 as $value) {
        if (isset($value->product_id)) {
            $main_menu_4_img = $value->menu_image;
            $main_menu_product_id_4 = $value->product_id;
            $main_menu_product_name_4 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_4 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_4 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_4)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_4 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_4_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_4 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_5_img;
    $main_menu_product_id_5;
    $main_menu_product_name_5;
    ?>    
    <?php
    foreach ($main_menu_5 as $value) {
        if (isset($value->product_id)) {
            $main_menu_5_img = $value->menu_image;
            $main_menu_product_id_5 = $value->product_id;
            $main_menu_product_name_5 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_5 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_5 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_5)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_5 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_5_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_5 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_6_img;
    $main_menu_product_id_6;
    $main_menu_product_name_6;
    ?>    
    <?php
    foreach ($main_menu_6 as $value) {
        if (isset($value->product_id)) {
            $main_menu_6_img = $value->menu_image;
            $main_menu_product_id_6 = $value->product_id;
            $main_menu_product_name_6 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_6 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_6 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_6)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_6 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_6_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_6 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_7_img;
    $main_menu_product_id_7;
    $main_menu_product_name_7;
    ?>    
    <?php
    foreach ($main_menu_7 as $value) {
        if (isset($value->product_id)) {
            $main_menu_7_img = $value->menu_image;
            $main_menu_product_id_7 = $value->product_id;
            $main_menu_product_name_7 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_7 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_7)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_7 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_7_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_7 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_8_img;
    $main_menu_product_id_8;
    $main_menu_product_name_8;
    ?>    
    <?php
    foreach ($main_menu_8 as $value) {
        if (isset($value->product_id)) {
            $main_menu_8_img = $value->menu_image;
            $main_menu_product_id_8 = $value->product_id;
            $main_menu_product_name_8 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_8 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_8 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_8)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_8 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_8_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_8 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_9_img;
    $main_menu_product_id_9;
    $main_menu_product_name_9;
    ?>    
    <?php
    foreach ($main_menu_9 as $value) {
        if (isset($value->product_id)) {
            $main_menu_9_img = $value->menu_image;
            $main_menu_product_id_9 = $value->product_id;
            $main_menu_product_name_9 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_9 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_9 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_9)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_9 ?>"><img style="width: 210px;height: 287px;" src="<?php echo base_url() . $main_menu_9_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="text-align: center;"><?php echo $main_menu_product_name_9 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop/discount"><span>Discount</span> </a></li>
  

</ul>
                    </div>
                </div>

            </nav>
            <!-- end nav -->
            <?php
            echo $user_main;
            ?>


            <footer class="footer bounceInUp animated">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-7">
                                <div class="block-subscribe">
                                    <div class="newsletter">
                                        <form>
                                            <h4>newsletter</h4>
                                            <input type="text" placeholder="Enter your email address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email">
                                            <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-5">
                                <div class="social">
                                    <ul>
                                        <li class="fb"><a href="#"></a></li>
                                        <li class="tw"><a href="#"></a></li>
                                        <li class="googleplus"><a href="#"></a></li>
                                        <li class="rss"><a href="#"></a></li>
                                        <li class="pintrest"><a href="#"></a></li>
                                        <li class="linkedin"><a href="#"></a></li>
                                        <li class="youtube"><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-logo"><a href="<?php echo base_url(); ?>onlineshop" title="Logo"><img src="<?php echo base_url(); ?>images/logo.png" alt="logo"></a></div>

                        <div class="payment-accept">
                            <a href="<?php echo base_url(); ?>onlineshop/user_login"><img src="<?php echo base_url(); ?>images/products/payment.png" alt="payment"></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>Shopping Guide</h4>
                        <ul class="links">
                            <li class="first"><a href="#" title="How to buy">How to buy</a></li>
                            <li><a href="#" title="FAQs">FAQs</a></li>
                            <li><a href="#" title="Payment">Payment</a></li>
                            <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
                            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                            <li class="last"><a href="#" title="Return policy">Return policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>Style Advisor</h4>
                        <ul class="links">
                            <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
                            <li><a title="Information" href="#">Information</a></li>
                            <li><a title="Addresses" href="#">Addresses</a></li>
                            <li><a title="Discount Products" href="<?php echo base_url() . 'onlineshop/discount'; ?>">Discount</a></li>
                            <li><a title="Orders History" href="#">Orders History</a></li>
                            <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>Information</h4>
                        <ul class="links">
                            <li class="first"><a href="#" title="Site Map">Site Map</a></li>
                            <li><a href="#/" title="Search Terms">Search Terms</a></li>
                            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                            <li><a href="contact.html" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Suppliers">Suppliers</a></li>
                            <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h4>Contact us</h4>
                        <div class="contacts-info">
                            <address>
                                <i class="add-icon">&nbsp;</i>Mirpur-10,Dhaka-1216 <br>
                                &nbsp;Bangladesh
                            </address>
                            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +88 01711 267842</div>
                            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="#">support@somoyerdeal.com</a> </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="col-sm-5 col-xs-12 coppyright">&copy; 2016 Somoyer Deal, Developed by Techno Eon.</div>

                </div>
            </footer>
            <!-- End Footer --> 
        </div>

        <!-- JavaScript -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/parallax.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/common.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/revslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
        <script type="text/javascript">
                                                                jQuery(document).ready(function () {
                                                                    jQuery('#rev_slider_4').show().revolution({
                                                                        dottedOverlay: 'none',
                                                                        delay: 5000,
                                                                        startwidth: 585,
                                                                        startheight: 460,
                                                                        hideThumbs: 200,
                                                                        thumbWidth: 200,
                                                                        thumbHeight: 50,
                                                                        thumbAmount: 2,
                                                                        navigationType: 'thumb',
                                                                        navigationArrows: 'solo',
                                                                        navigationStyle: 'round',
                                                                        touchenabled: 'on',
                                                                        onHoverStop: 'on',
                                                                        swipe_velocity: 0.7,
                                                                        swipe_min_touches: 1,
                                                                        swipe_max_touches: 1,
                                                                        drag_block_vertical: false,
                                                                        spinner: 'spinner0',
                                                                        keyboardNavigation: 'off',
                                                                        navigationHAlign: 'center',
                                                                        navigationVAlign: 'bottom',
                                                                        navigationHOffset: 0,
                                                                        navigationVOffset: 20,
                                                                        soloArrowLeftHalign: 'left',
                                                                        soloArrowLeftValign: 'center',
                                                                        soloArrowLeftHOffset: 20,
                                                                        soloArrowLeftVOffset: 0,
                                                                        soloArrowRightHalign: 'right',
                                                                        soloArrowRightValign: 'center',
                                                                        soloArrowRightHOffset: 20,
                                                                        soloArrowRightVOffset: 0,
                                                                        shadow: 0,
                                                                        fullWidth: 'on',
                                                                        fullScreen: 'off',
                                                                        stopLoop: 'off',
                                                                        stopAfterLoops: -1,
                                                                        stopAtSlide: -1,
                                                                        shuffle: 'off',
                                                                        autoHeight: 'off',
                                                                        forceFullWidth: 'on',
                                                                        fullScreenAlignForce: 'off',
                                                                        minFullScreenHeight: 0,
                                                                        hideNavDelayOnMobile: 1500,
                                                                        hideThumbsOnMobile: 'off',
                                                                        hideBulletsOnMobile: 'off',
                                                                        hideArrowsOnMobile: 'off',
                                                                        hideThumbsUnderResolution: 0,
                                                                        hideSliderAtLimit: 0,
                                                                        hideCaptionAtLimit: 0,
                                                                        hideAllCaptionAtLilmit: 0,
                                                                        startWithSlide: 0,
                                                                        fullScreenOffsetContainer: ''
                                                                    });
                                                                });
        </script>
        <?php
        $all_products = json_encode($this->onlineshop_model->get_all_products());
        $contents = json_encode($this->cart->contents());
        $total_item = $this->cart->total_items();
        $total_amount = $this->cart->total();
        ?>
        <script>
                            client.controller('cart', function ($scope, $rootScope, $http) {
                                $rootScope.contents =<?php echo $contents; ?>;
                                $rootScope.totalItems =<?php echo $total_item; ?>;
                                $rootScope.totalAmount =<?php echo $total_amount; ?>;
                                $rootScope.removeItem = function (rowid) {
                                    $rootScope.code = null;
                                    $rootScope.response = null;
                                    $rootScope.url = '<?php echo base_url() ?>cart/remove_from_cart/';
                                    $rootScope.urltotalItems = '<?php echo base_url() ?>cart/total_items_remain';
                                    $rootScope.urltotalAmount = '<?php echo base_url() ?>cart/total_amount';
                                    $http({method: $rootScope.method, url: $rootScope.url + rowid}).
                                            then(function (response) {
                                                $rootScope.status = response.status;
                                                $rootScope.contents = response.data;
                                                $http({method: $rootScope.method, url: $rootScope.urltotalItems}).
                                                        then(function (response) {
                                                            $rootScope.status = response.status;
                                                            $rootScope.totalItems = response.data;
                                                        }, function (response) {
                                                            $rootScope.data = response.data || "Request failed";
                                                            $rootScope.status = response.status;
                                                        });
                                                $http({method: $rootScope.method, url: $rootScope.urltotalAmount}).
                                                        then(function (response) {
                                                            $rootScope.status = response.status;
                                                            $rootScope.totalAmount = response.data;
                                                        }, function (response) {
                                                            $rootScope.data = response.data || "Request failed";
                                                            $rootScope.status = response.status;
                                                        });
                                            }, function (response) {
                                                $rootScope.data = response.data || "Request failed";
                                                $rootScope.status = response.status;
                                            });
                                };
                            });
        </script>
        <script>
                            client.controller('TypeaheadCtrl', function ($scope, $http) {

                                var _selected;

                                $scope.selected = undefined;
                                $scope.ngModelOptionsSelected = function (value) {
                                    if (arguments.length) {
                                        _selected = value;
                                    } else {
                                        return _selected;
                                    }
                                };

                                $scope.modelOptions = {
                                    debounce: {
                                        default: 500,
                                        blur: 250
                                    },
                                    getterSetter: true
                                };

                                $scope.statesWithFlags = <?php echo $all_products; ?>;
                            });
        </script>

    </body>
</html>
