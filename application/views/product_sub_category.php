<!-- Two columns content -->
<form action="<?php echo base_url(); ?>onlineshop/product_category" method="post"></form>

<section class="main-container col2-left-layout" ng-controller="subCategoryProduct">
    <div class="main container">
        <div class="row">
            <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
                <div class="category-title">
                    <h1>Tops &amp; Tees</h1>
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

                <div class="block block-layered-nav">
                    <div class="block-title">Shop By</div>
                    <div class="block-content">
                        <p class="block-subtitle">Shopping Options</p>
                        <dl id="narrow-by-list">
                            <dt class="odd">Price</dt>
                            <dd class="odd">
                                <ol>
                                    <li> <a href="" ng-click="getPrice1()"><span class="price">TK 0.00</span> - <span class="price"> TK 500.00</span></a> (<?php echo $product_pf1;?>) </li>
                                    <li> <a href="" ng-click="getPrice2()"><span class="price">TK 501.00</span> - <span class="price"> TK 1000.00</span></a> (<?php echo $product_pf2;?>) </li>
                                    <li> <a href="" ng-click="getPrice3()"><span class="price">TK 1001.00</span> - <span class="price"> TK 2000.00</span></a> (<?php echo $product_pf3;?>) </li>
                                    <li> <a href="" ng-click="getPrice4()"><span class="price">TK 2001.00</span> - <span class="price"> TK 5000.00</span></a> (<?php echo $product_pf4;?>) </li>
                                    <li> <a href="" ng-click="getPrice5()"><span class="price">TK 5001.00</span> - <span class="price"> TK 10000.00</span></a> (<?php echo $product_pf5;?>) </li>
                                    <li> <a href="" ng-click="getPrice6()"><span class="price">TK 10001.00</span> and above</a> (<?php echo $product_pf6;?>) </li>
                                </ol>
                            </dd>
                            <dt class="even">Manufacturer</dt>
                            <dd class="even" ng-repeat="manufacturer in pmanufacturer">
                                <ol>
                                    <li> <a href="" ng-click="prbymnscid(manufacturer.manufacturer_id)">{{manufacturer.manufacturer_name}}</a> ({{manufacturer.have_product}}) </li>

                                </ol>
                            </dd>

                            <dt class="last even">Size</dt>
                            <dd class="last even" ng-repeat="size in psize">
                                <ol>
                                    <li> <a href="" ng-click="fpbysnsid(size.size_name)">{{size.size_name}}</a> ({{size.have_product}}) </li>

                                </ol>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="block block-cart">
                    <div class="block-title ">My Cart</div>
                    <div class="block-content">
                        <div class="summary">
                            <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                            <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
                        </div>
                        <div class="ajax-checkout">
                            <button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button>
                        </div>
                        <p class="block-subtitle">Recently added item(s) </p>
                        <ul>
                            <li class="item"> <a class="product-image" title="Fisher-Price Bubble Mower" href="#"><img width="80" alt="Fisher-Price Bubble Mower" src="products-images/p1.jpg"></a>
                                <div class="product-details">
                                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="#">Skater Dress In Leaf Print Grouped Product</a> </p>
                                    <strong>1</strong> x <span class="price">$19.99</span> </div>
                            </li>
                            <li class="item last"> <a class="product-image" title="Prince Lionheart Jumbo Toy Hammock" href="#"><img width="80" alt="Prince Lionheart Jumbo Toy Hammock" src="products-images/p48.jpg"></a>
                                <div class="product-details">
                                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="#"> Sample Fashion Product Prince Lionheart </a> </p>
                                    <strong>1</strong> x <span class="price">$8.00</span> 
                                    <!--access clearfix--> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<script>
    client.controller('subCategoryProduct', function($scope, $http) {
        $scope.products = <?php echo $product; ?>;       
        $scope.psize = <?php echo $size; ?>;
        $scope.pmanufacturer = <?php echo $manufacturer; ?>;
        var sub_category_id=<?php echo $sub_category_id; ?>;
        $scope.method = 'GET';
        $scope.getPrice1 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_l500/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.getPrice2 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_g500_to1000/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.getPrice3 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_g1000_to2000/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.getPrice4 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_g2000_to5000/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.getPrice5 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_g5000_to10000/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.getPrice6 = function() {
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/s_price_above10000/';
            $http({method: $scope.method, url: $scope.url+sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.prbymnscid = function(manufacturer_id) {
//            $scope.manufacturer_id=manufacturer_id;
//            alert($scope.manufacturer_id)
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/fp_by_menufactuer_n_sub_category/'+manufacturer_id+'/';
            $http({method: $scope.method, url: $scope.url + sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.fpbysnsid=function(size_name){
            $scope.loading = true;
            $scope.code = null;
            $scope.response = null;
            $scope.url = '<?php echo base_url() ?>onlineshop/fp_by_size_n_sub_category/'+size_name+'/';
            $http({method: $scope.method, url: $scope.url + sub_category_id}).
                    then(function(response) {
                        $scope.status = response.status;
                        $scope.products = response.data;
                    }, function(response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
            $scope.loading = false;
        };
        $scope.productdetails=function(product_id){
           window.location = "<?php echo base_url().'onlineshop/product_details/'?>"+product_id; 
        };

    });
</script>
