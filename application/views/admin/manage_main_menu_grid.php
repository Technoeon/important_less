
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit"></i> Manage Main Menu</h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body no-padding-top no-padding-bottom">												
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>
                                <th class="center"data-hide="phone,tablet">ID</th>
                                <th class="center"data-class="expand">Menu Name</th>

                                <th class="center">Position</th>
                                <th class="center"data-hide="phone">Status</th>
                                <th class="center">Action</th>
                                <th class="center">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($main_menu as $v_main_menu) {
                                ?>
                                <tr>
                                    <td><?php echo $v_main_menu->main_category_id; ?></td>
                                    <td><?php echo $v_main_menu->main_category_name; ?></td>
                                    <td><?php echo $v_main_menu->main_category_position; ?></td>
                                    <td>
                                        <?php
                                        if ($v_main_menu->main_category_status == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>te_admin/unpublished_main_menu/<?php echo $v_main_menu->main_category_id; ?>"><span class="label label-active"title="Disable">Active</span></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>te_admin/published_main_menu/<?php echo $v_main_menu->main_category_id; ?>"><span class="label label-inverse"title="Active">Disable</span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs ">  
                                            <a href="<?php echo base_url(); ?>te_admin/edit_main_menu/<?php echo $v_main_menu->main_category_id; ?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($v_main_menu->other_image_id == 0) { ?>
                                            <div class="btn-group btn-group-sm ">  
                                                <a href="<?php echo base_url(); ?>te_admin/set_main_menu_image/<?php echo $v_main_menu->main_category_id; ?>" class="btn btn-info"><i class="fa fa-image icon-only"></i></a>
                                            </div>
                                        <?php } else {
                                            $image=$this->admin_model->get_main_menu_image($v_main_menu->other_image_id);
                                            ?>
                                            <div>
                                                <a href="<?php echo base_url(); ?>te_admin/set_main_menu_image/<?php echo $v_main_menu->main_category_id; ?>"><img class="img-responsive" src="<?php echo base_url().$image ?>" alt="" style="width:60px; height: 50px;"></a>
                                            </div>
                                        <?php } ?>
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







