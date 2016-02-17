
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12" ng-controller="productDescription">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit" ></i><?php echo ' '. $product_name;?></h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body no-padding-top no-padding-bottom">												
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>
                                <th class="center"data-class="expand">Description</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr ng-repeat="pdescription in pdescription">
                                <td>{{pdescription.description}}</td>
                               

                                <td>
                                    <div class="btn-group btn-group-xs ">
                                        <a href="#" class="btn btn-inverse"><i class="fa fa-pencil icon-only"title="edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-times icon-only"title="delete"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="btn-group pull-right">
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>

<!-- END YOUR CONTENT HERE -->
<script>
    te.controller('productDescription', function($scope) {
        $scope.pdescription = <?php echo $product_description; ?>;
        
    });
</script>







