<div class="col-lg-12" ng-controller="addDiscount">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="portlet">
                <div class="portlet-heading dark">
                    <div class="portlet-title">
                        <h4>Update Product</h4>
                    </div>
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion" href="#f-1"><i class="#"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>   
                <div id="f-1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/update_product" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="space-4"></div>
                                    <level>Product Name:</level><br><br>
                                    <input type="text" name="product_name" class="form-control" value="<?php echo $product_info->product_name; ?>">
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"class="form-control">
                                    <div class="space-4"></div>
                                    <level>Model:</level><br><br>
                                    <input type="text" name="product_model" class="form-control" value="<?php echo $product_info->product_model; ?>">
                                    <div class="space-4"></div>
                                    <level>Code:</level><br><br>
                                    <input type="text" name="product_sku" class="form-control" value="<?php echo $product_info->product_sku; ?>">
                                    <div class="space-4"></div>
                                    <level>Quantity:</level><br><br>
                                    <input type="text" name="product_quantity" class="form-control" value="<?php echo $product_info->product_quantity; ?>">
                                    <div class="space-4"></div>
                                    <level>Price:</level><br><br>
                                    <input type="text" name="product_price" class="form-control" value="<?php echo $product_info->product_price; ?>">
                                    <div class="space-4"></div><?php if (isset($product_info->discount_id)) { ?>
                                    <level>Discount:</level><br><br>
                                    <input type="text" name="discount_price" class="form-control" value="<?php echo $product_info->discount_price; ?>"><br>
                                    <level>Discount Start Date</level>
                                    <input type="date" name="start_date" class="form-control" value="<?php echo $product_info->start_date; ?>"><br>
                                    <level>Discount Ending Date</level>
                                    <input type="date" name="end_date" class="form-control" value="<?php echo $product_info->end_date; ?>"><br>
                                    <?php } ?>
                                    <div class="space-6"></div>
                                    <button type="submit" value="update"class="pull-right btn btn-primary">Update</button>
                                </div>
                            </div>											
                        </form>
                        <div class="portlet-body">
                            <div class="btn-group btn-group-xs pull-right">
                                <div class="btn-group ">
                                    <?php if (empty($product_info->discount_id)) { ?>
                                    <button class="btn btn-warning" ng-hide="showDiv" ng-click="showDiv = true;
                                        hideMe()">Add Discount</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div ng-show="showDiv">
                                <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/add_discount" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"class="form-control">
                                    <div class="space-4"></div>
                                    <level>Discount:</level><br><br>
                                    <input type="text" name="discount_price" class="form-control"><br>
                                    <level>Discount Start Date</level>
                                    <input type="date" name="start_date" class="form-control" ><br>
                                    <level>Discount Ending Date</level>
                                    <input type="date" name="end_date" class="form-control" ><br>
                                 
                                    <div class="space-6"></div>
                                    <input type="submit" value="save discount"class="pull-right btn btn-primary">
                                </div>
                            </div>											
                        </form>
                         </div>      
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<script>
    te.controller('addDiscount', function ($scope) {
         $scope.hideMe = function(){
    $scope.hide();
  };
    });
</script>