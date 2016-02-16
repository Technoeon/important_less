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
                <a href="<?php echo base_url(); ?>te_admin/edit_manufacturer/<?php echo $v_brand->manufacturer_id; ?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a>
            </div>
        </td>
    </tr>
<?php } ?>