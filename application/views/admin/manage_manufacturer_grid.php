
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit"></i> Manage Manufacturer</h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body no-padding-top no-padding-bottom">												
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>
                                <th class="center"data-hide="phone,tablet">ID</th>
                                <th class="center"data-class="expand">Manufacturer Name</th>
                                <th class="center"data-hide="phone">Status</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($manufacturer as $v_brand) {
                                ?>
                                <tr>
                                    <td><?php echo $v_brand->manufacturer_id; ?></td>
                                    <td><?php echo $v_brand->manufacturer_name; ?></td>
                                    
                                    <td>
                                        <?php
                                        if ($v_brand->manufacturer_status == 1) {
                                            ?>
                                        <a href="<?php echo base_url(); ?>te_admin/unpublished_manufacturer/<?php echo $v_brand->manufacturer_id; ?>"><span class="label label-active"title="Disable">Active</span></a>
                                        <?php
                                        } else {
                                            ?>
                                        <a href="<?php echo base_url(); ?>te_admin/published_manufacturer/<?php echo $v_brand->manufacturer_id; ?>"><span class="label label-inverse"title="Active">Disable</span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs ">  
                                            <a href="<?php echo base_url();?>te_admin/edit_manufacturer/<?php echo $v_brand->manufacturer_id;?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a>
                                        </div>
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







