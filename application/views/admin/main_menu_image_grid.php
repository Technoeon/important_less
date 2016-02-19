<form action="<?php echo base_url()?>te_admin/update_menu_image" method="post">
<div class="well white padding-25">
    <!-- Gallery Style 2-->
    
    <ul class="tc-gallery-2 clearfix">
        <?php foreach ($image as $value) { ?>
            
        
        <li class="thumbnail">
            <div class="thumb-preview">
                <div class="thumb-image">
                    <img src="<?php echo base_url().$value->menu_image ?>" alt="" style="width:160px; height: 120px;">
                </div>
                <div class="gl-thumb-options">
                   <div class="gl-toolbar">
                        <div class="gl-option checkbox-inline">
                            <input name="other_image_id" value="<?php echo $value->other_image_id; ?>"  class="tc tc-success valid" type="radio" id="file_8" >
                            <label class="labels" for="file_8">Select</label>
                        </div>
                        
                    </div>
                </div>
            </div>
            <h5 class="gl-title"><?php echo $value->product_name; ?><small>.jpg</small></h5>
        </li>
        <input type="hidden" name="main_category_id" value="<?php echo $value->main_category_id; ?>" >
       <?php }?> 
       
    </ul>
        <div class="space-6"></div>
        <input type="submit" value="Set As a Menu Image" class="pull-right btn btn-primary">
        <br><br>
</div>
<!-- END YOUR CONTENT HERE -->
    </form>

