<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">

        <!-- PAGE LEVEL PLUGINS STYLES -->	
        <link href="<?php echo base_url(); ?>assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/plugins/morris/morris.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/bootstrap-datepicker/datepicker.css">
        <!-- REQUIRE FOR SPEECH COMMANDS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/gritter/jquery.gritter.css" />

        <!-- Tc core CSS -->
        <link id="qstyle" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/style.css">


        <!-- Add custom CSS here -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/only-for-demos.css">
        <!-- Add Angular JS CDN Link--->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>

    <body ng-app="te">
        <div id="wrapper">
            <div id="main-container">		
                <!-- BEGIN TOP NAVIGATION -->
                <nav class="navbar-top" role="navigation">
                    <!-- BEGIN BRAND HEADING -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".top-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="navbar-brand">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>/images/logo.png" alt="logo" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- END BRAND HEADING -->
                    <div class="nav-top">
                        <!-- BEGIN RIGHT SIDE DROPDOWN BUTTONS -->
                        <ul class="nav navbar-right">
                            <li class="dropdown">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </li>
                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> <span class="user-info"><?php echo $user_name = $this->session->userdata('name') ?></span> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li>
                                        <a href="profile.html">
                                            <i class="fa fa-user"></i> My Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(); ?>te_admin/logout">
                                            <i class="fa fa-power-off"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Search Box-->
                            <li class="dropdown nav-search-icon">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-search">
                                    <li>
                                        <div class="search-box">
                                            <form class="" role="search">
                                                <input type="text" class="form-control" placeholder="Search" />
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--Search Box-->
                        </ul>
                        <!-- END RIGHT SIDE DROPDOWN BUTTONS -->

                    </div><!-- /.nav-top -->
                </nav><!-- /.navbar-top -->
                <!-- END TOP NAVIGATION -->


                <!-- BEGIN SIDE NAVIGATION -->				
                <nav class="navbar-side" role="navigation">							
                    <div class="navbar-collapse sidebar-collapse collapse">

                        <!-- BEGIN SHORTCUT BUTTONS -->
                        <div class="media">							
                            <ul class="sidebar-shortcuts">
                                <li><a class="btn"><i class="fa fa-user icon-only"></i></a></li>
                                <li><a class="btn"><i class="fa fa-envelope icon-only"></i></a></li>
                                <li><a class="btn"><i class="fa fa-th icon-only"></i></a></li>
                                <li><a class="btn"><i class="fa fa-gear icon-only"></i></a></li>
                            </ul>	
                        </div>
                        <!-- END SHORTCUT BUTTONS -->	

                        <!-- BEGIN FIND MENU ITEM INPUT -->
                        <div class="media-search">	
                            <input type="text" class="input-menu" id="input-items" placeholder="Find...">
                        </div>						
                        <!-- END FIND MENU ITEM INPUT -->

                        <ul id="side" class="nav navbar-nav side-nav">
                            <!-- BEGIN SIDE NAV MENU -->							
                            <!-- Navigation category -->
                            <li>
                                <h4>Navigation</h4> 								
                            </li>
                            <!-- END Navigation category -->

                            <li>
                                <a class="active" href="index-2.html">
                                    <i class="fa fa-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <!-- Main Menu Manager End-->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#components">
                                    <i class="fa fa-bars"></i>Menu Manager<span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="components">
                                    <li>

                                        <a href="<?php echo base_url(); ?>te_admin/add_main_menu">
                                            <i class="fa fa-angle-double-right"></i>Add Main Menu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>te_admin/add_sub_menu">
                                            <i class="fa fa-angle-double-right"></i>Add Sub Menu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>te_admin/add_menu">
                                            <i class="fa fa-angle-double-right"></i> Add Menu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>te_admin/manage_menu_grid">
                                            <i class="fa fa-angle-double-right"></i>Manage All Menu
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Main Menu Manager End-->

                            <!-- Product Manager start -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                                    <i class="fa fa-barcode"></i>Product Manager<span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="charts">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Add Manufacturer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Manage manufacturer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Add Product 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Manage Product 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Product Manager End -->
                            <!-- END COMPONENTS DROPDOWN -->							

                            <!-- BEGIN FORMS Order Manager -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                                    <i class="fa fa-inbox"></i>Order Manager<span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="forms">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Pending Order 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i> Accepted Order
                                        </a>
                                    </li>										
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Rejected Order 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>All Order 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End FORMS Order Manager -->

                            <!-- BEGIN MORE PAGES DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#e-pages">
                                    <i class="fa fa-users"></i>Employee Manage<span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="e-pages">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Add Employee 

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Manage Employee
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!-- END MORE PAGES DROPDOWN -->

                            <!-- BEGIN CUSTOMER INFO  START-->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#pages">
                                    <i class="fa fa-users"></i>Customer Info<span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="pages">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-double-right"></i>Customer Review
                                        </a>
                                    </li>

                                    <li>
                                        <a href="">
                                            <i class="fa fa-angle-double-right"></i>Customer Details
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!-- BEGIN CUSTOMER INFO END -->

                        </ul><!-- /.side-nav -->

                    </div><!-- /.navbar-collapse -->
                </nav><!-- /.navbar-side -->
                <!-- END SIDE NAVIGATION -->
                <!-- BEGIN MAIN PAGE CONTENT -->
                <div id="page-wrapper">
                    <!-- BEGIN PAGE HEADING ROW -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- BEGIN BREADCRUMB -->
                            <div class="breadcrumbs">
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="<?php echo base_url() ?>te_admin">Home</a>
                                    </li>
                                    <li class="active">Dashboard</li>
                                </ul>
                            </div>
                            <!-- END BREADCRUMB -->	

                            <div class="page-header title">
                                <!-- PAGE TITLE ROW -->
                                <h1>Dashboard <span class="sub-title">Content Overview</span></h1>									
                            </div>

                            <!-- /#ek-layout-button -->	
                            <div class="qs-layout-menu">

                                <div class="qs-setting-box" id="qs-setting-box">

                                    <div class="hidden-xs hidden-sm">
                                        <span class="bigger-120">Layout Options</span>

                                        <div class="hr hr-dotted hr-8"></div>
                                        <label>
                                            <input type="checkbox" class="tc" id="fixed-navbar" />
                                            <span id="fixed-navbar" class="labels"> Fixed NavBar</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="fixed-sidebar" />
                                            <span id="fixed-sidebar" class="labels"> Fixed NavBar+SideBar</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="sidebar-toggle" />
                                            <span id="sidebar-toggle" class="labels"> Sidebar Toggle</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="in-container" />
                                            <span id="in-container" class="labels"> Inside<strong>.container</strong></span>
                                        </label>

                                        <div class="space-4"></div>
                                    </div>

                                    <span class="bigger-120">Color Options</span>

                                    <div class="hr hr-dotted hr-8"></div>

                                    <label>
                                        <input type="checkbox" class="tc" id="side-bar-color" />
                                        <span id="side-bar-color" class="labels"> SideBar (Light)</span>
                                    </label>

                                    <ul>									
                                        <li><button class="btn" style="background-color:#d15050;" onclick="swapStyle('assets/css/themes/style.css')"></button></li>
                                        <li><button class="btn" style="background-color:#86618f;" onclick="swapStyle('assets/css/themes/style-1.css')"></button></li> 
                                        <li><button class="btn" style="background-color:#ba5d32;" onclick="swapStyle('assets/css/themes/style-2.css')"></button></li>
                                        <li><button class="btn" style="background-color:#488075;" onclick="swapStyle('assets/css/themes/style-3.css')"></button></li>
                                        <li><button class="btn" style="background-color:#4e72c2;" onclick="swapStyle('assets/css/themes/style-4.css')"></button></li>
                                    </ul>

                                </div>
                            </div>
                            <!-- /#ek-layout-button -->		

                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <!-- END PAGE HEADING ROW -->					
                    <div class="row">
                        <div class="col-lg-12">

                            <?php if (isset($main_content)) echo $main_content; ?>

                            <!-- END YOUR CONTENT HERE -->

                        </div>
                    </div>

                    <!-- BEGIN FOOTER CONTENT -->		
                    <div class="footer">
                        <div class="footer-inner">
                            <!-- basics/footer -->
                            <div class="footer-content">
                                &copy; 2016 <a href="#">Shomoyerdeal</a>, All Rights Reserved.
                            </div>
                            <!-- /basics/footer -->
                        </div>
                    </div>
                    <button type="button" id="back-to-top" class="btn btn-primary btn-sm back-to-top">
                        <i class="fa fa-angle-double-up icon-only bigger-110"></i>
                    </button>
                    <!-- END FOOTER CONTENT -->

                </div><!-- /#page-wrapper -->	  
                <!-- END MAIN PAGE CONTENT -->
            </div>  
        </div>
        <!-- core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

        <!-- PAGE LEVEL PLUGINS JS -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryui/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryui/jquery.ui.touch-punch.min.js"></script>	
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>	
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/easypiechart/excanvas.compiled.js"></script>	
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Themes Core Scripts -->	
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- REQUIRE FOR SPEECH COMMANDS -->
        <script src="<?php echo base_url(); ?>assets/js/speech-commands.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>		

        <!-- initial page level scripts for examples -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/home-page.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-sparkline/jquery.sparkline.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/easypiechart/jquery.easypiechart.init.js"></script>

        <script type="text/javascript">
                                            //Live Chat
                                            jQuery(function ($) {
                                                $('#live-chat-ui header').on('click', function () {
                                                    $('.chat').slideToggle(300, 'swing');
                                                    $('.chat-message-counter').fadeToggle(300, 'swing');

                                                });

                                                $('.chat-close').on('click', function (e) {
                                                    e.preventDefault();
                                                    $('#live-chat-ui').fadeOut(300);
                                                });

                                            })

                                            $('#minicalendar').datepicker();
                                            

        </script>
    </body>


</html>