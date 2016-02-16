<?php 
  
        //position 1 start
        $main_menu_1 = $this->onlineshop_model->get_main_menu_by_position(1);
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
<div class="magik-slideshow" id="magik-slideshow">
    <div class="container">
        <div class="row">
            <div class="LHS-nav col-lg-3 col-md-4">
                <div id="magik-verticalmenu" class="block magik-verticalmenu">
                    <div class="nav-title"> <span>Categories</span> </div>
                    <div class="nav-content">
                        <div class="navbar navbar-inverse">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <div class="navbar">
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                        <ul class="nav navbar-nav verticalmenu">
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_1 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px; height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_1 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_1 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_2 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_2 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_2 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_3 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px; height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_3 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_3 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_4 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px; height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_4 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_4 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_5 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_5 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_5 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_6 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_6 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_6 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_7 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_7 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_8 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_8 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_8 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $sub_menu_id = NULL;
                                            ?>    
                                            <li class="parent dropdown "> <?php foreach ($main_menu_9 as $value) { ?> <a href="<?php echo $value->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title"><?php echo $value->main_menu_name; ?></span><b class="round-arrow"></b></a>  <?php } ?>

                                                <div class="dropdown-menu" style="width:620px;height: 460px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <?php foreach ($sub_menu_9 as $sub_menu_value) { ?>
                                                                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                                                                    <div class="mega-col col-sm-66 " data-widgets="wid-5" data-colwidth="6">
                                                                        <div class="mega-col-inner">
                                                                            <div class="ves-widget">
                                                                                <div class="menu-title"><a href="<?php echo $sub_menu_value->sub_menu_id ?>"><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id; ?></a></div>
                                                                                <div class="widget-html">
                                                                                    <div class="widget-inner">
                                                                                        <ul>
                                                                                            <?php foreach ($menu_9 as $menu_value) { ?>
                                                                                                <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                                                                                  <li><a href="<?php echo $menu_value->menu_id ?>"><span><?php echo $menu_value->menu_name; ?></span></a> </li>

                                                                                                <?php } ?>
                                                                                             <?php } ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 col-md-9 bounceInUp animated">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo base_url(); ?>images/slider_img_2.html'><img src='<?php echo base_url(); ?>images/index-2-img/slide-img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner1"  />
                                <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>Welcome To</div>
                                <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>SOMOYERDEAL.COM</div>
                                <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                                <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Biggest online market places,<br>
                                    All are original product .</div>
                              </li>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo base_url(); ?>images/slider_img_2.jpg' class="black-text"><img src='<?php echo base_url(); ?>images/index-2-img/slide-img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"  />
                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>Women Sale</div>
                                <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Go Lightly</div>
                                <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                                <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                                    augue facilisis facilisis.</div>
                                <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </li>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo base_url(); ?>images/slider_img_2.html'><img src='<?php echo base_url(); ?>images/index-2-img/slide-img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner1"  />
                                <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>Exclusive of designer</div>
                                <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Handbags & Purses</div>
                                <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                                <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='150'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                                    augue facilisis facilisis.</div>
                                <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </li>
                            
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>