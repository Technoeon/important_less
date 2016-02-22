<!-- Two columns content -->
<form action="<?php echo base_url(); ?>onlineshop/product_category" method="post"></form>

<section class="main-container col2-left-layout" ng-controller="categoryProduct">
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
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6" ng-repeat="product in products">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="<?php echo base_url(); ?>{{product.image_path}}" class="img-responsive" alt="a" /> </a></div>
                  <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="<?php echo base_url(); ?>quick-view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="product-detail.html">{{product.product_name}}</a> </div>
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
                      <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
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
                    <li> <a href="#" ng-click="getPrice1()"><span class="price">TK 0.00</span> - <span class="price"> TK 500.00</span></a> (6) </li>
                    <li> <a href="#" ng-click="getPrice2()"><span class="price">TK 501.00</span> - <span class="price"> TK 1000.00</span></a> (6) </li>
                    <li> <a href="#"><span class="price">TK 1001.00</span> - <span class="price"> TK 2000.00</span></a> (6) </li>
                    <li> <a href="#"><span class="price">TK 2001.00</span> - <span class="price"> TK 5000.00</span></a> (6) </li>
                    <li> <a href="#"><span class="price">TK 5001.00</span> - <span class="price"> TK 10000.00</span></a> (6) </li>
                    <li> <a href="#"><span class="price">TK 10001.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even" ng-repeat="manufacturer in pmanufacturer">
                  <ol>
                    <li> <a href="#">{{manufacturer.manufacturer_name}}</a> ({{manufacturer.have_product}}) </li>
                   
                  </ol>
                </dd>
                
                <dt class="last even">Size</dt>
                <dd class="last even" ng-repeat="size in psize">
                  <ol>
                    <li> <a href="#">{{size.size_name}}</a> ({{size.have_product}}) </li>
                    
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
 client.controller('categoryProduct', function($scope, $http) {
    $scope.products = <?php echo $product; ?>;
     $scope.psize = <?php echo $size; ?>;
    $scope.pmanufacturer = <?php echo $manufacturer; ?>;
    $scope.getPrice1=function(){
       $http.get("customers.php").then(function (response) {
      $scope.price1 = response.data.products;
  });}
  $scope.getPrice2=function(){
       $http.get("customers.php").then(function (response) {
      $scope.price2 = response.data.products;
  });}
   });
</script>