<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <div class="portlet">
                <div class="portlet-heading dark">
                    <div class="portlet-title">
                        <h4>Add Manufacture</h4>
                    </div>
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion" href="#f-1"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <h5 style="color: green;text-align: center;">
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
                        <form class="form-horizontal" action="<?php echo base_url(); ?>te_admin/save_manufacturer" method="post" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="space-4"></div>
                                    <input type="text" name="manufacturer_name" class="form-control" placeholder="Enter manufacture name........" required="1">
                                     <div class="space-4"></div>
                                    <div class="space-4"></div>
                                    <div class="tcb">
                                        <label class="tcb-inline">
                                            <input type="radio" name="manufacturer_status" id="optionsRadios2" value="1" class="tc">
                                            <span class="labels">PUBLISHED</span>
                                        </label>
                                        <label class="tcb-inline">
                                            <input type="radio" name="manufacturer_status" id="optionsRadios3" value="0" class="tc">
                                            <span class="labels">UNPUBLISHED</span>
                                        </label>
                                    </div>
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
