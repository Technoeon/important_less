<?php
//position 1 start
$main_menu_1 = $this->onlineshop_model->get_main_menu_by_position(1);
//echo '<pre>';
//print_r($main_menu_1);
//exit();
$sub_menu_1 = $this->onlineshop_model->get_sub_menu_by_position(1);
$menu_1 = $this->onlineshop_model->get_menu_by_position(1);
//position 1 end
//position 2 start
$main_menu_2 = $this->onlineshop_model->get_main_menu_by_position(2);
$sub_menu_2 = $this->onlineshop_model->get_sub_menu_by_position(2);
$menu_2 = $this->onlineshop_model->get_menu_by_position(2);
//position 2 end
//position 3 start
$main_menu_3 = $this->onlineshop_model->get_main_menu_by_position(3);
$sub_menu_3 = $this->onlineshop_model->get_sub_menu_by_position(3);
$menu_3 = $this->onlineshop_model->get_menu_by_position(3);
//position 3 end
//position 4 start
$main_menu_4 = $this->onlineshop_model->get_main_menu_by_position(4);
$sub_menu_4 = $this->onlineshop_model->get_sub_menu_by_position(4);
$menu_4 = $this->onlineshop_model->get_menu_by_position(4);
//position 4 end
//position 5 start
$main_menu_5 = $this->onlineshop_model->get_main_menu_by_position(5);
$sub_menu_5 = $this->onlineshop_model->get_sub_menu_by_position(5);
$menu_5 = $this->onlineshop_model->get_menu_by_position(5);
//position 5 end
//position 6 start
$main_menu_6 = $this->onlineshop_model->get_main_menu_by_position(6);
$sub_menu_6 = $this->onlineshop_model->get_sub_menu_by_position(6);
$menu_6 = $this->onlineshop_model->get_menu_by_position(6);

//position 6 end
//position 7 start
$main_menu_7 = $this->onlineshop_model->get_main_menu_by_position(7);
$sub_menu_7 = $this->onlineshop_model->get_sub_menu_by_position(7);
$menu_7 = $this->onlineshop_model->get_menu_by_position(7);
//position 7 end
//position 8 start
$main_menu_8 = $this->onlineshop_model->get_main_menu_by_position(8);
$sub_menu_8 = $this->onlineshop_model->get_sub_menu_by_position(8);
$menu_8 = $this->onlineshop_model->get_menu_by_position(8);

//position 8 end
//position 9 start
$main_menu_9 = $this->onlineshop_model->get_main_menu_by_position(9);
$sub_menu_9 = $this->onlineshop_model->get_sub_menu_by_position(9);
$menu_9 = $this->onlineshop_model->get_menu_by_position(9);
//position 9 end
?>
<ul id="nav" class="hidden-xs">

    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop"><span>Home</span> </a></li>



    <?php
    $sub_menu_id = NULL;
    $main_menu_1_img;
    $main_menu_product_id_1;
    $main_menu_product_name_1;
    
    ?>    
    <?php
    foreach ($main_menu_1 as $value) {
        if (isset($value->product_id)) {
            $main_menu_1_img = $value->menu_image;
            $main_menu_product_id_1 = $value->product_id;
            $main_menu_product_name_1 = $value->product_name;
        }
        ?>
       <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id; ?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_1 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_1 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_1)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="#"><img style="width: 200px;height: 180px;" src="<?php echo base_url() . $main_menu_1_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_1 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>

    <?php
    $sub_menu_id = NULL;
    $main_menu_2_img;
    $main_menu_product_id_2;
    $main_menu_product_name_2;
    ?>    
    <?php
    foreach ($main_menu_2 as $value) {
        if (isset($value->product_id)) {
            $main_menu_2_img = $value->menu_image;
            $main_menu_product_id_2 = $value->product_id;
            $main_menu_product_name_2 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_2 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_2 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_2)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_2 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_2_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_2 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_3_img;
    $main_menu_product_id_3;
    $main_menu_product_name_3;
    ?>    
    <?php
    foreach ($main_menu_3 as $value) {
        if (isset($value->product_id)) {
            $main_menu_3_img = $value->menu_image;
            $main_menu_product_id_3 = $value->product_id;
            $main_menu_product_name_3 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_3 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_3 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_3)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_3 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_3_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_3 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_4_img;
    $main_menu_product_id_4;
    $main_menu_product_name_4;
    ?>    
    <?php
    foreach ($main_menu_4 as $value) {
        if (isset($value->product_id)) {
            $main_menu_4_img = $value->menu_image;
            $main_menu_product_id_4 = $value->product_id;
            $main_menu_product_name_4 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_4 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_4 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_4)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_4 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_4_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_4 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_5_img;
    $main_menu_product_id_5;
    $main_menu_product_name_5;
    ?>    
    <?php
    foreach ($main_menu_5 as $value) {
        if (isset($value->product_id)) {
            $main_menu_5_img = $value->menu_image;
            $main_menu_product_id_5 = $value->product_id;
            $main_menu_product_name_5 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_5 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_5 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_5)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_5 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_5_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_5 ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_6_img;
    $main_menu_product_id_6;
    $main_menu_product_name_6;
    ?>    
    <?php
    foreach ($main_menu_6 as $value) {
        if (isset($value->product_id)) {
            $main_menu_6_img = $value->menu_image;
            $main_menu_product_id_6 = $value->product_id;
            $main_menu_product_name_6 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_6 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_6 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_6)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_6 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_6_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_6 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_7_img;
    $main_menu_product_id_7;
    $main_menu_product_name_7;
    ?>    
    <?php
    foreach ($main_menu_7 as $value) {
        if (isset($value->product_id)) {
            $main_menu_7_img = $value->menu_image;
            $main_menu_product_id_7 = $value->product_id;
            $main_menu_product_name_7 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_7 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href=" <?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_7)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_7 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_7_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_7 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_8_img;
    $main_menu_product_id_8;
    $main_menu_product_name_8;
    ?>    
    <?php
    foreach ($main_menu_8 as $value) {
        if (isset($value->product_id)) {
            $main_menu_8_img = $value->menu_image;
            $main_menu_product_id_8 = $value->product_id;
            $main_menu_product_name_8 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_8 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_8 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">

                    </div>
                </div>
                <?php if (isset($main_menu_product_id_8)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_8 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_8_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_8 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <?php
    $sub_menu_id = NULL;
    $main_menu_9_img;
    $main_menu_product_id_9;
    $main_menu_product_name_9;
    ?>    
    <?php
    foreach ($main_menu_2 as $value) {
        if (isset($value->product_id)) {
            $main_menu_9_img = $value->menu_image;
            $main_menu_product_id_9 = $value->product_id;
            $main_menu_product_name_9 = $value->product_name;
        }
        ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo base_url().'onlineshop/product_main_category/'.$value->id;?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_9 as $sub_menu_value) { ?>
                            <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                <li class="level1 nav-5">

                                    <a href="<?php echo base_url().'onlineshop/product_sub_category/'.$sub_menu_value->sub_menu_id ?>"> 
                                        <span><?php
                                            echo $sub_menu_value->sub_menu_name;
                                            $sub_menu_id = $sub_menu_value->sub_menu_id;
                                            ?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_9 as $menu_value) { ?>
                                            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                <li><a href="<?php echo base_url().'onlineshop/product_category/'. $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                            <?php }
                                            ?>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                    </div>
                </div>
                <?php if (isset($main_menu_product_id_9)) { ?>
                    <div class="nav-block nav-block-right std grid12-4">
                        <div class="static-img-block"><a href="<?php echo $main_menu_product_id_9 ?>"><img style="width: 300px;height: 280px;" src="<?php echo base_url() . $main_menu_9_img; ?>" alt="Responsive"></a></div>
                        <h3 class="heading" style="margin-left: 100px;"><?php echo $main_menu_product_name_9 ?></h3>
                    </div>
                <?php } ?></div>
        </div>
    </li>
    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop"><span>Discount</span> </a></li>
    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop"><span>About Us</span> </a></li>



</ul>
