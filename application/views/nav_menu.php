<ul id="nav" class="hidden-xs">

    <li id="nav-home" class="level0 parent drop-menu"><a href="<?php echo base_url(); ?>onlineshop"><span>Home</span> </a></li>



    <?php
    $sub_menu_id = NULL;
    ?>    
    <?php foreach ($main_menu_7 as $value) { ?>
        <li class="level0 nav-6 level-top parent"> <a href="<?php echo $value->id; ?>" class="level-top"> <span><?php echo $value->main_menu_name; ?></span> </a>
        <?php } ?>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <?php foreach ($sub_menu_7 as $sub_menu_value) { ?>
                         <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                            <li class="level1 nav-6">
                               
                                    <a href="<?php echo $sub_menu_value->sub_menu_id?>"> 
                                        <span><?php echo $sub_menu_value->sub_menu_name; $sub_menu_id = $sub_menu_value->sub_menu_id;?></span> 
                                    </a>
                                    <ul class="level1">
                                        <?php foreach ($menu_7 as $menu_value) { ?>
                                        <?php
                                    if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) {?>
                                        <li><a href="<?php echo $menu_value->menu_id ?>"><?php echo $menu_value->menu_name; ?></a></li>
                                        <?php } 
                                    ?>
                                        <?php } ?>
                                    </ul>
                                
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="fur-des">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa.</p>
                    </div>
                </div>
                <div class="nav-block nav-block-right std grid12-4">
                    <div class="static-img-block"><a href="#"><img src="<?php echo base_url(); ?>images/nav-img1.jpg" alt="Responsive"></a></div>
                    <h3 class="heading">Responsive Magento Theme</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
                    <a title="Shop collection now" href="#" class="btn-button-st">Shop collection now</a> </div>
            </div>
        </div>
    </li>

    <li class="level0 nav-6 level-top parent"> <a href="grid.html" class="level-top"> <span>WOMEN</span> </a>
        <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
            <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                    <ul class="level0">
                        <li class="level1 nav-7-1"> <a href="#"> <span>Women</span> </a>
                            <ul class="level1">
                                <li><a href="#">Skirts</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Premium Pants</a></li>
                                <li><a href="#">Khakis</a></li>
                                <li><a href="#">Casual Pants</a></li>
                            </ul>
                        </li>
                        <li class="level1 nav-7-1"> <a href="#"> <span>Men</span> </a>
                            <ul class="level1">
                                <li><a href="#">Casual Dresses</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Sport Shoes</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>
                        </li>
                        <li class="level1 nav-7-1"> <a href="#"> <span>Girls</span> </a>
                            <ul class="level1">
                                <li class="level2 nav-2-1-1 first"><a href="#"><span>Shirts</span></a></li>
                                <li class="level2 nav-2-1-2"><a href="#"><span>T-shirts</span></a></li>
                                <li class="level2 nav-2-1-3"><a href="#"><span>Suits</span></a></li>
                                <li class="level2 nav-2-1-4"><a href="#"><span>Blazers</span></a></li>
                                <li class="level2 nav-2-1-5 last"><a href="#"><span>Trousers</span></a></li>
                            </ul>
                        </li>
                        <li class="level1 nav-7-1"> <a href="#"> <span>Boys</span> </a>
                            <ul class="level1">
                                <li class="level2 first"><a href="#"><span>Dresses</span></a></li>
                                <li class="level2 nav-1-1-2"><a href="#"><span>Jumpsuits</span></a></li>
                                <li class="level2 nav-1-1-3"><a href="#"><span>Shirts &amp; Tops</span></a></li>
                                <li class="level2 nav-1-1-4"><a href="#"><span>Shorts &amp; Skirts</span></a></li>
                                <li class="level2 nav-1-1-5 last"><a href="#"><span>Sleepwear</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="fur-des">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa.</p>
                    </div>
                </div>
                <div class="nav-block nav-block-right std grid12-4">
                    <div class="static-img-block"><a href="#"><img src="<?php echo base_url(); ?>images/nav-img1.jpg" alt="Responsive"></a></div>
                    <h3 class="heading">Responsive Magento Theme</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
                    <a title="Shop collection now" href="#" class="btn-button-st">Shop collection now</a> </div>
            </div>
        </div>
    </li>

</ul>
