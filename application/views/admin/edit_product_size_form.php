<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="portlet">
                <div class="portlet-heading dark">
                    <div class="portlet-title">
                        <h4></h4>
                    </div>
                   
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion" href="#f-1"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                
                <div id="f-1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/update_size" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="space-4"></div>
                                    <input type="text" name="size_name" class="form-control" value="<?php echo $product_size;?>"required>
                                    <input type="hidden" name="size_id" class="form-control" value="<?php echo $size_id;?>"required>
                                    <div class="space-6"></div>
                                    <button type="submit" value="save"class="pull-right btn btn-primary">Submit</button>
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
