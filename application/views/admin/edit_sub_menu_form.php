<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="portlet">
                <div class="portlet-heading dark">
                    <div class="portlet-title">
                        <h4>Update Sub Menu</h4>
                    </div>
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion" href="#f-1"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <h5 style="color: green; text-align: center;">
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message) {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h5>
                <div id="f-1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/update_sub_menu" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        
                                    </div>
                                    <div class="space-4"></div>
                                    <level>Sub menu name:</level><br><br>
                                    <input type="text" name="sub_category_name" class="form-control" value="<?php echo $sub_menu_name;?>"required="1">
                                    <input type="hidden" name="sub_category_id" class="form-control" value="<?php echo $sub_category_id;?>"required="1">
                                    
                                    <div class="space-6"></div>
                                    <button type="submit" value="update"class="pull-right btn btn-primary">Update</button>
                                </div>
                            </div>											
                        </form>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
