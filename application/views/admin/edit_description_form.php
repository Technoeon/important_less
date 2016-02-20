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
                        <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/update_description" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="space-4"></div>
                                    <textarea rows="4" cols="4" name="description" class="form-control" ><?php echo $description;?></textarea>
                                    <input type="hidden" name="description_id" class="form-control" value="<?php echo $description_id;?>">
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
