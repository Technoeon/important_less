
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit"></i> Manage Product</h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body no-padding-top no-padding-bottom">
                    <h5 style="color: green; text-align: center;">
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message) {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h5>
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>
                                <th class="center"data-hide="phone,tablet">Image</th>
                                <th class="center"data-class="expand">Product Name</th>
                                <th class="center"data-hide="phone">Model</th>
                                <th class="center"data-hide="phone">Code</th>
                                <th class="center"data-hide="phone">Quantity</th>
                                <th class="center"data-hide="phone">Price</th>
                                <th class="center"data-hide="phone">Discount</th>
                                <th class="center"data-hide="phone">Status</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_product as $v_product) {
                                ?>
                                <tr>
                                    <td><img src="<?php echo base_url() . $v_product->image_path; ?>"width="50" height="50" ></td>
                                    <td><?php echo $v_product->product_name; ?></td>
                                    <td><?php echo $v_product->product_model; ?></td>
                                    <td><?php echo $v_product->product_sku; ?></td>
                                    <td><?php echo $v_product->product_quantity; ?></td>
                                    <td><?php echo $v_product->product_price; ?></td>
                                    <td><?php echo $v_product->discount_price; ?></td>
                                    <td>
                                        <?php
                                        if ($v_product->product_status == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>te_admin/unpublished_product_info/<?php echo $v_product->product_id; ?>"><span class="label label-active"title="Disable">Active</span></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>te_admin/published_product_info/<?php echo $v_product->product_id; ?>"><span class="label label-inverse"title="Active">Disable</span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs ">  
                                            <a href="<?php echo base_url() ?>te_admin/edit_product/<?php echo $v_product->product_id; ?>" class="btn btn-inverse"title="Edit"><i class="fa fa-pencil icon-only"></i></a>
                                        </div
                                        
                                        <div class="btn-group btn-group-xs">
                                            <a href="<?php echo base_url()?>te_admin/manage_size/<?php echo $v_product->product_id; ?>/<?php echo $v_product->product_name; ?>">
                                                
                                                <button type="submit" class="btn btn-xs btn-success" title="size">SIZE</button>
                                            </a>
                                            <form action="<?php echo base_url()?>te_admin/manage_description" method="post"><input type="hidden" name="product_name" value="<?php echo $v_product->product_name; ?>">
                                                <input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>">
                                                <button type="submit" class="btn btn-xs btn-primary" title="description">DETAILS</button>
                                            </form>
                                            
                                        </div
                                        
                                    </td>
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








