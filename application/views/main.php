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

        <!-- Google Fonts -->
        <link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.js"></script>
        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>
        <script>
            var client = angular.module('client', ['ngSanitize', 'ui.bootstrap']);
            client.directive('loading', function() {
                return {
                    restrict: 'E',
                    replace: true,
                    template: '<div class="loading"><img src="<?php echo base_url() ?>images/ajax-loader.gif" width="50" height="50" />LOADING...</div>',
                    link: function(scope, element, attr) {
                        scope.$watch('loading', function(val) {
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
                                        <div class="myaccount"><a title="My Account" href="<?php echo base_url(); ?>somoyer_user"><span class="hidden-xs">My Account</span></a></div>
                                        <div class="wishlist"><a title="My Wishlist"  href="<?php echo base_url(); ?>somoyer_user/wishlist"><span class="hidden-xs">Wishlist</span></a></div>
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
                                            <a href="<?php echo base_url() . 'onlineshop/product_details/'; ?>{{match.model.product_id}}" style="text-decoration : none; height:60px;">
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
                                                <option value="<?php echo $value->main_category_id; ?>"><?php echo $value->main_category_name; ?></option>
                                            <?php } ?>
                                        </select>
                                        <button type="submit" id="submit-button" class="search-btn-bg" onclick="document.getElementById('search').value = '';"><span>Search</span></button>
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



                        <!--End mobile-menu -->
                        <?php echo $nav_menu; ?>
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
                                                                jQuery(document).ready(function() {
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
                            client.controller('cart', function($scope, $rootScope, $http) {
                                $rootScope.contents =<?php echo $contents; ?>;
                                $rootScope.totalItems =<?php echo $total_item; ?>;
                                $rootScope.totalAmount =<?php echo $total_amount; ?>;
                                $rootScope.removeItem = function(rowid) {
                                    $rootScope.code = null;
                                    $rootScope.response = null;
                                    $rootScope.url = '<?php echo base_url() ?>cart/remove_from_cart/';
                                    $rootScope.urltotalItems = '<?php echo base_url() ?>cart/total_items_remain';
                                    $rootScope.urltotalAmount = '<?php echo base_url() ?>cart/total_amount';
                                    $http({method: $rootScope.method, url: $rootScope.url + rowid}).
                                            then(function(response) {
                                                $rootScope.status = response.status;
                                                $rootScope.contents = response.data;
                                                $http({method: $rootScope.method, url: $rootScope.urltotalItems}).
                                                        then(function(response) {
                                                            $rootScope.status = response.status;
                                                            $rootScope.totalItems = response.data;
                                                        }, function(response) {
                                                            $rootScope.data = response.data || "Request failed";
                                                            $rootScope.status = response.status;
                                                        });
                                                $http({method: $rootScope.method, url: $rootScope.urltotalAmount}).
                                                        then(function(response) {
                                                            $rootScope.status = response.status;
                                                            $rootScope.totalAmount = response.data;
                                                        }, function(response) {
                                                            $rootScope.data = response.data || "Request failed";
                                                            $rootScope.status = response.status;
                                                        });
                                            }, function(response) {
                                                $rootScope.data = response.data || "Request failed";
                                                $rootScope.status = response.status;
                                            });
                                };
                                $rootScope.add_to_wishlist = function(product_id) {
                                    $scope.loading = true;
                                    $rootScope.code = null;
                                    $rootScope.response = null;
                                    $rootScope.url = '<?php echo base_url() ?>onlineshop/add_to_wishlist/';
                                    $http({method: $rootScope.method, url: $rootScope.url + product_id}).
                                            then(function(response) {
                                                $rootScope.status = response.status;
                                                $rootScope.msg = response.data;
                                                alert($rootScope.msg);
                                            }, function(response) {
                                                $rootScope.data = response.data || "Request failed";
                                                $rootScope.status = response.status;
                                            });
                                    $scope.loading = false;
                                };
                            });
        </script>
        <script>
                            client.controller('TypeaheadCtrl', function($scope, $http) {

                                var _selected;

                                $scope.selected = undefined;
                                $scope.ngModelOptionsSelected = function(value) {
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
