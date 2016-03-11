
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit"></i> Manage Order</h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body no-padding-top no-padding-bottom">												
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>
                                <th class="center"data-hide="phone,tablet">Order ID</th>
                                <th class="center"data-class="expand">Invoice No</th>
                                <th class="center">Customer Name</th>
                                <th class="center">Mobile</th>
                                <th class="center"data-hide="phone">Order Total</th>
                                <th class="center">Order Status</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($all_order as $value) { ?>
                                
                            
                                <tr>
                                    <td> <?php echo $value->order_id; ?></td>
                                    <td> <?php echo $value->invoice_no; ?></td>
                                    <td> <?php echo $value->customer_name; ?></td>
                                    <td> <?php echo $value->mobile_no; ?></td>
                                    <td> <?php echo $value->order_total; ?></td>
                                    <td> <?php if($value->order_status == NULL){echo 'pendding' ;} ?></td>
                                    <td> </td>
                                </tr>
                            <?php } ?>
                        
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







