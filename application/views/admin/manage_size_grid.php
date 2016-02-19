
<!-- START YOUR CONTENT HERE -->										
<!-- //row -->
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="portlet">
                <div class="portlet-heading inverse">
                    <div class="portlet-title">
                        <h4><i class="fa fa-edit"></i><?php echo ' ' . $product_name; ?></h4>	
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                <div class="portlet-body no-padding-top no-padding-bottom">
                    <div class="btn-group btn-group-xs pull-right"><br>
                        <div class="btn-group ">
                            <form action="<?php echo base_url()?>te_admin/add_size" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product_id?>">
                                <input type="submit" value="Add More Size"class="btn btn-danger ">
                            </form>
                    </div>
                      
                    </div>
                    <br><br><br>
                    <table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
                        <thead>
                            <tr>

                                <th class="center"data-class="expand">Size</th>
                                <th class="center">Edit</th>
                                <th class="center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($product_size as $v_size) {
                                ?>
                                <tr>

                                    <td><?php echo $v_size->size_name ?></td>

                                    <td>
                                        <div class="btn-group btn-group-xs ">

                                            <a href="<?php echo base_url() ?>te_admin/edit_size/<?php echo $v_size->size_id; ?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"title="edit"></i></a>
                                      </td>      
                                      <td>
                                          <a href="<?php echo base_url();?>te_admin/delete_size/<?php echo $v_size->size_id;?>" class="btn btn-danger"><i class="fa fa-times icon-only"title="delete"></i></a>
                                      </td>
                                            </div>
                                    
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







