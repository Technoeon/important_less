<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 11:56:58 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Admin Master </title>

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

        <!-- End custom CSS here -->

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <!--[if lte IE 8]>
        <script src="assets/js/plugins/easypiechart/easypiechart.ie-fix.js"></script>
        <![endif]-->

    </head>

    <body>
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
                            <a href="index-2.html">
                                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" class="img-responsive">
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
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope"></i> <span class="badge up badge-primary">2</span></a>
                                <ul class="dropdown-menu dropdown-scroll dropdown-messages">
                                    <li class="dropdown-header">
                                        <i class="fa fa-envelope"></i> 2 New Messages
                                    </li>
                                    <li id="messageScroll">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="row">
                                                        <div class="col-xs-2">
                                                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/user-profile-1.jpg" alt="">
                                                        </div>
                                                        <div class="col-xs-10">
                                                            <p>
                                                                <strong>John Smith</strong>: Hi again! I wanted to let you know that the order...
                                                            </p>
                                                            <p class="small">
                                                                <i class="fa fa-clock-o"></i> 5 minutes ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="row">
                                                        <div class="col-xs-2">
                                                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/user-profile-2.jpg" alt="">
                                                        </div>
                                                        <div class="col-xs-10">
                                                            <p>
                                                                <strong>Roddy Austin</strong>: Thanks for the info, if you need anything...
                                                            </p>
                                                            <p class="small">
                                                                <i class="fa fa-clock-o"></i> 3:39 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">
                                            Read All Messages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i> <span class="badge up badge-success">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-scroll dropdown-alerts">
                                    <li class="dropdown-header">
                                        <i class="fa fa-bell"></i> 3 New Alerts
                                    </li>
                                    <li id="alertScroll">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="alert-icon bg-info pull-left">
                                                        <i class="fa fa-download"></i>
                                                    </div>
                                                    Downloads <span class="badge badge-info pull-right">16</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="alert-icon bg-success pull-left">
                                                        <i class="fa fa-cloud-upload"></i>
                                                    </div>
                                                    Server #8 Rebooted <span class="small pull-right"><strong><em>12 hours ago</em></strong></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="alert-icon bg-danger pull-left">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    Server #8 Crashed <span class="small pull-right"><strong><em>12 hours ago</em></strong></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">
                                            View All Alerts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-tasks"></i> <span class="badge up badge-info">7</span>
                                </a>
                                <ul class="dropdown-menu dropdown-scroll dropdown-tasks">
                                    <li class="dropdown-header">
                                        <i class="fa fa-tasks"></i> 10 Pending Tasks
                                    </li>
                                    <li id="taskScroll">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <p>
                                                        Purchase Order #439 <span class="pull-right"><strong>52%</strong></span>
                                                    </p>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <p>
                                                        March Content Update <span class="pull-right"><strong>14%</strong></span>
                                                    </p>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%;"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <p>
                                                        Client #42 Data Scrubbing <span class="pull-right"><strong>68%</strong></span>
                                                    </p>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <p>
                                                        PHP Upgrade Server #6 <span class="pull-right"><strong>85%</strong></span>
                                                    </p>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <p>
                                                        Malware Scan <span class="pull-right"><strong>66%</strong></span>
                                                    </p>
                                                    <div class="progress progress-striped active">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">
                                            View All Tasks
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Speech Icon-->
                            <li class="dropdown">
                                <a href="#" class="speech-button">
                                    <i class="fa fa-microphone"></i>
                                </a>
                            </li>
                            <!--Speech Icon-->
                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img class="img-circle" src="<?php echo base_url(); ?>assets/images/user.jpg" alt=""> <span class="user-info">John Smith</span> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li>
                                        <a href="profile.html">
                                            <i class="fa fa-user"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-tasks"></i> My Tasks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-gear"></i> Settings
                                        </a>
                                    </li>											
                                    <li>
                                        <a href="login.html">
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

                        <!-- BEGIN TOP MENU -->
                        <div class="collapse navbar-collapse top-collapse">
                            <!-- .nav -->
                            <ul class="nav navbar-left navbar-nav">
                                <li><a href="index-2.html">Dashboard</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Components <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="elements-ui.html">Elements</a></li>
                                        <li><a href="button-ui.html">Buttons & Icons</a></li>
                                        <li><a href="portlet.html">Portlet</a></li>
                                        <li><a href="jquery-ui.html">jQuery UI</a></li>
                                    </ul>
                                </li>
                                <li><a href="front/index.html">FrontEnd <span class="badge badge-primary">New</span></a></li>
                            </ul><!-- /.nav -->
                        </div>
                        <!-- END TOP MENU -->

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
                            <!-- BEGIN COMPONENTS DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#components">
                                    <i class="fa fa-cogs"></i> Components <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="components">
                                    <li>
                                        <a href="portlet.html">
                                            <i class="fa fa-angle-double-right"></i> Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-ui.html">
                                            <i class="fa fa-angle-double-right"></i> Elements <span class="label label-sm label-primary">New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tabs_accordions-ui.html">
                                            <i class="fa fa-angle-double-right"></i> Tabs & Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="button-ui.html">
                                            <i class="fa fa-angle-double-right"></i> Buttons & Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="jquery-ui.html">
                                            <i class="fa fa-angle-double-right"></i> JQuery UI
                                        </a>
                                    </li>
                                    <li>
                                        <a href="nestable-list.html">
                                            <i class="fa fa-angle-double-right"></i> Nestable Lists
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar.html">
                                            <i class="fa fa-angle-double-right"></i> Calendar
                                        </a>
                                    </li>
                                    <!-- BEGIN THREE LEVEL MENU -->
                                    <li>
                                        <a href="javascript:;" class="accordion-toggle" data-toggle="collapse"  data-target="#sub-menu">
                                            <i class="fa fa-angle-double-right"></i> Three Level Menu <span class="fa arrow"></span>
                                        </a>
                                        <ul class="collapse nav" id="sub-menu">
                                            <li>
                                                <a href="#" title="Title"><i class="fa fa-angle-double-right"></i> item <span class="badge badge-primary">3</span></a>
                                            </li>
                                            <!-- BEGIN 4th LEVEL MENU -->
                                            <li>
                                                <a href="javascript:;" class="accordion-toggle" data-toggle="collapse"  data-target="#sub-menu2">
                                                    <i class="fa fa-angle-double-right"></i> 4rth Level <span class="fa arrow"></span>
                                                </a>
                                                <ul class="collapse nav" id="sub-menu2">
                                                    <li>
                                                        <a href="#" title="Title"><i class="fa fa-angle-double-right"></i> item1 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Title"><i class="fa fa-angle-double-right"></i> item2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- END 4th LEVEL MENU -->
                                        </ul>
                                    </li>
                                    <!-- ENDTHREE LEVEL MENU -->
                                </ul>
                            </li>
                            <!-- END COMPONENTS DROPDOWN -->							
                            <li>
                                <a href="tables.html">
                                    <i class="fa fa-list"></i> Tables<span class="badge badge-primary">New</span> 
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <i class="fa fa-text-width"></i> Typography 
                                </a>
                            </li>
                            <!-- BEGIN FORMS DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                                    <i class="fa fa-edit"></i> Forms <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="forms">
                                    <li>
                                        <a href="forms.html">
                                            <i class="fa fa-angle-double-right"></i> Form Elements 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-tools.html">
                                            <i class="fa fa-angle-double-right"></i> Form Tools 
                                        </a>
                                    </li>										
                                    <li>
                                        <a href="form-wizard.html">
                                            <i class="fa fa-angle-double-right"></i> Wizard & Validation
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END FORMS DROPDOWN -->

                            <!-- BEGIN CHARTS DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                                    <i class="fa fa-bar-chart-o"></i> Charts <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="charts">
                                    <li>
                                        <a href="flot.html">
                                            <i class="fa fa-angle-double-right"></i> Flot Charts 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="morris.html">
                                            <i class="fa fa-angle-double-right"></i> Morris Charts 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END CHARTS DROPDOWN -->

                            <!-- Navigation category -->
                            <li>
                                <h4>Support</h4> 								
                            </li>
                            <!-- END Navigation category -->

                            <!-- BEGIN MORE PAGES DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#e-pages">
                                    <i class="fa fa-shopping-cart"></i> eCommerce <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="e-pages">
                                    <li>
                                        <a href="products.html">
                                            <i class="fa fa-angle-double-right"></i> Products Listing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END MORE PAGES DROPDOWN -->

                            <!-- BEGIN PAGES DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#pages">
                                    <i class="fa fa-list"></i> Additional Pages <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="pages">
                                    <li>
                                        <a href="profile.html">
                                            <i class="fa fa-angle-double-right"></i> User Profile 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html">
                                            <i class="fa fa-angle-double-right"></i> Inbox 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">
                                            <i class="fa fa-angle-double-right"></i> Pricing Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fa fa-angle-double-right"></i> Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href="timeline.html">
                                            <i class="fa fa-angle-double-right"></i> Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <i class="fa fa-angle-double-right"></i> Login & Register 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faqs.html">
                                            <i class="fa fa-angle-double-right"></i> FAQs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blank.html">
                                            <i class="fa fa-angle-double-right"></i> Blank Page
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END PAGES DROPDOWN -->
                            <!-- BEGIN MORE PAGES DROPDOWN -->
                            <li class="panel">
                                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-pages">
                                    <i class="fa fa-tag"></i> More Pages <span class="fa arrow"></span>
                                </a>
                                <ul class="collapse nav" id="m-pages">
                                    <li>
                                        <a href="gallery.html">
                                            <i class="fa fa-angle-double-right"></i> Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error-404.html">
                                            <i class="fa fa-angle-double-right"></i> Error 404
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error-500.html">
                                            <i class="fa fa-angle-double-right"></i> Error 505
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END MORE PAGES DROPDOWN -->
                        </ul><!-- /.side-nav -->

                        <div class="sidebar-labels">
                            <h4>Labels</h4>							
                            <ul>
                                <li><a href="#"><i class="fa fa-circle-o text-primary"></i> My Recent <span class="badge badge-primary">3</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-success"></i> Background</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-alerts">							
                            <div class="alert fade in">
                                <span>Sales Report</span>
                                <div class="progress progress-mini progress-striped active no-margin-bottom">
                                    <div class="progress-bar progress-bar-primary" style="width: 36%"></div>
                                </div>
                                <small>Calculating daily bias... 36%</small>
                            </div>
                        </div>

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
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active">Dashboard</li>
                                </ul>

                                <div class="b-right hidden-xs">
                                    <ul>
                                        <li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
                                        <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Tasks</span></a>
                                            <ul class="dropdown-menu dropdown-primary dropdown-menu-right">
                                                <li><a href="#">Add new task</a></li>
                                                <li><a href="#">Statement</a></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END BREADCRUMB -->	

                            <div class="page-header title">
                                <!-- PAGE TITLE ROW -->
                                <h1>Dashboard <span class="sub-title">Content Overview</span></h1>									
                            </div>

                            <!-- /#ek-layout-button -->	
                            <div class="qs-layout-menu">
                                <div class="btn btn-gray qs-setting-btn" id="qs-setting-btn">
                                    <i class="fa fa-cog bigger-150 icon-only"></i>
                                </div>
                                <div class="qs-setting-box" id="qs-setting-box">

                                    <div class="hidden-xs hidden-sm">
                                        <span class="bigger-120">Layout Options</span>

                                        <div class="hr hr-dotted hr-8"></div>
                                        <label>
                                            <input type="checkbox" class="tc" id="fixed-navbar" />
                                            <span id="#fixed-navbar" class="labels"> Fixed NavBar</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="fixed-sidebar" />
                                            <span id="#fixed-sidebar" class="labels"> Fixed NavBar+SideBar</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="sidebar-toggle" />
                                            <span id="#sidebar-toggle" class="labels"> Sidebar Toggle</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="tc" id="in-container" />
                                            <span id="#in-container" class="labels"> Inside<strong>.container</strong></span>
                                        </label>

                                        <div class="space-4"></div>
                                    </div>

                                    <span class="bigger-120">Color Options</span>

                                    <div class="hr hr-dotted hr-8"></div>

                                    <label>
                                        <input type="checkbox" class="tc" id="side-bar-color" />
                                        <span id="#side-bar-color" class="labels"> SideBar (Light)</span>
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

                            <!-- START YOUR CONTENT HERE -->
                            <div class="row">
                                <div class="col-lg-9 col-sm-12">

                                    <div class="row">

                                        <div class="col-lg-4 col-sm-4">
                                            <a href="#" class="tile-button btn btn-primary">
                                                <div class="tile-content-wrapper">
                                                    <i class="fa fa-users"></i>
                                                    <div class="tile-content">
                                                        475
                                                    </div>
                                                    <small>
                                                        New Signup
                                                    </small>
                                                </div>
                                            </a>												
                                        </div>

                                        <div class="col-lg-4 col-sm-4">
                                            <a href="#" class="tile-button btn btn-inverse">
                                                <div class="tile-content-wrapper">
                                                    <i class="glyphicon glyphicon-gift"></i>
                                                    <div class="tile-content">
                                                        70
                                                    </div>
                                                    <small>
                                                        My Domains
                                                    </small>												
                                                </div>
                                            </a>												
                                        </div>


                                        <div class="col-lg-4 col-sm-4">
                                            <a href="#" class="tile-button btn btn-white">
                                                <div class="tile-content-wrapper">
                                                    <i class="fa fa-warning text-primary"></i>
                                                    <div class="tile-content text-primary">
                                                        <span>$</span>270
                                                    </div>
                                                    <small>
                                                        Due Invoices
                                                    </small>
                                                </div>
                                            </a>												
                                        </div>


                                    </div>

                                    <!-- Server Info Charts .morris -->
                                    <div class="portlet">
                                        <div class="portlet-heading inverse">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-line-chart"></i> Server Statics</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
                                                <span class="divider"></span>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="m-charts" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <h4>CPU percentage today</h4>
                                                        <div class="chart-holder" id="morris-chart-1" style="height: 220px!important; min-height:220px;"></div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h4>Resources</h4>
                                                        <hr class="separator" />

                                                        <!-- Progress bars 1-->
                                                        <div class="clearfix">
                                                            <span class="pull-left">Memory</span>
                                                            <small class="pull-right">307.5/1024 GB</small>
                                                        </div>
                                                        <div class="progress progress-mini">
                                                            <div class="progress-bar progress-bar-success" style="width: 30%;"></div>
                                                        </div>

                                                        <!-- Progress bars 2-->
                                                        <div class="clearfix">
                                                            <span class="pull-left">IP Address</span>
                                                            <small class="pull-right">900/1000</small>
                                                        </div>
                                                        <div class="progress progress-mini">
                                                            <div class="progress-bar progress-bar-danger" style="width: 90%;"></div>
                                                        </div>

                                                        <!-- Progress bars 3-->
                                                        <div class="clearfix">
                                                            <span class="pull-left">Storage</span>
                                                            <small class="pull-right">3.5/5 TB</small>
                                                        </div>
                                                        <div class="progress progress-mini">
                                                            <div class="progress-bar progress-bar-warning" style="width: 70%;"></div>
                                                        </div>

                                                        <!-- Progress bars 4-->
                                                        <div class="clearfix">
                                                            <span class="pull-left">Bandwidth</span>
                                                            <small class="pull-right">3/30 TB</small>
                                                        </div>
                                                        <div class="progress progress-mini">
                                                            <div class="progress-bar progress-bar-info" style="width: 10%;"></div>
                                                        </div>

                                                        <!-- Buttons -->
                                                        <button class="btn btn-sm btn-primary"><i class="fa fa-file-pdf-o"></i>Generate PDF</button>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Server Info Charts .morris -->

                                    <div class="portlet">
                                        <div class="portlet-heading inverse">
                                            <div class="portlet-title">
                                                <h4><i class="glyphicon glyphicon-sort-by-attributes"></i> Statics</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#jq-spark"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="jq-spark" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-6 text-center">
                                                        <div class="sparkline-chart">
                                                            <span class="sparkline-bar"></span>
                                                            <a href="#" class="title">CPU</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 text-center">
                                                        <div class="sparkline-chart">
                                                            <span class="sparkline-line"></span>
                                                            <a href="#" class="title">Bandwith Uses</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 text-center">
                                                        <div class="easy-pie-chart" id="easyPieChart-visit" data-percent="76">
                                                            <span class="number">7,397</span>
                                                            <a href="#" class="title">Visits</a>
                                                        </div>									
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 text-center">
                                                        <div class="easy-pie-chart"  id="easyPieChart-bounce" data-percent="80">
                                                            <span class="percent">80</span>
                                                            <a href="#" class="title">Bounce</a>																
                                                        </div>
                                                    </div>
                                                </div>										
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Statics Charts -->

                                    <!-- Recent Activities -->
                                    <div class="portlet no-border-bottom">
                                        <div class="portlet-heading dark">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-list-ul"></i> Recent Activities</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#recent"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="recent" class="panel-collapse collapse in">
                                            <div class="portlet-body no-padding">
                                                <div class="tc-tabs no-margin">
                                                    <ul class="nav nav-tabs tab-small-button no-padding">
                                                        <li class="active"><a href="#tab14" data-toggle="tab"><i class="fa fa-bell-o bigger-130"></i></a></li>
                                                        <li><a href="#tab15" data-toggle="tab"><i class="fa fa-ticket bigger-130"></i></a></li>
                                                        <li><a href="#tab16" data-toggle="tab"><i class="fa fa-users bigger-130"></i><span class="badge badge-primary">5</span></a></li>
                                                    </ul>

                                                    <div class="tab-content no-padding no-border-left no-border-right no-border-bottom">
                                                        <div class="tab-pane active" id="tab14">
                                                            <ul class="lists">
                                                                <li>
                                                                    <span class="date">17/7/2014 07:43</span>
                                                                    Cron Job: Starting Updating Product Pricing for Current Exchange Rates
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014 05:45</span>
                                                                    Email Sent to <a href="#">Maris Bradley</a>, answered <a href="#">[Ticket ID: 332335]</a>
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014 02:43</span>
                                                                    Module Suspend Successful - Reason: <a href="#">#827101</a>
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014 23:36</span>
                                                                    Cron Job: Starting Performing Automated Fixed Term Service Terminations
                                                                </li>
                                                                <li>
                                                                    <span class="date">18/7/2014 07:39</span>
                                                                    Email Sent to <a href="#">Jack Sparrow</a> (Invoice Payment Confirmation).
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="tab-pane" id="tab15">
                                                            <ul class="lists">
                                                                <li>
                                                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                                                    <a href="#">#808936</a> - Invoice has been paid please active my server
                                                                </li>
                                                                <li>
                                                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                                                    <a href="#">#857517</a> - New Server's Name Server IPs
                                                                </li>
                                                                <li>
                                                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                                                    <a href="#">#225310</a> - unsuspended reseller dineshrv all account urgent
                                                                </li>
                                                                <li>
                                                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                                                    <a href="#">#597608</a> - Mail Not Received
                                                                </li>
                                                                <li>
                                                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                                                    <a href="#">#597607</a> - Plase update my new mail address
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="tab-pane" id="tab16">
                                                            <ul class="lists">
                                                                <li>
                                                                    <span class="date">17/7/2014</span>
                                                                    <span class="icons"><i class="fa fa-user"></i></span>
                                                                    <a href="#">Elly Martel</a> afiliated by <a href="#">Johan Smith</a>.
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014</span>
                                                                    <span class="icons"><i class="fa fa-user"></i></span>
                                                                    <a href="#">Jack Sparrow</a> afiliated by <a href="#">Johan Smith</a>.
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014</span>
                                                                    <span class="icons"><i class="fa fa-user"></i></span>
                                                                    <a href="#">Maris Bradley</a> afiliated by <a href="#">Johan Smith</a>.
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014</span>
                                                                    <span class="icons"><i class="fa fa-user"></i></span>
                                                                    <a href="#">Roby Roy</a> afiliated by <a href="#">Johan Smith</a>.
                                                                </li>
                                                                <li>
                                                                    <span class="date">17/7/2014</span>
                                                                    <span class="icons"><i class="fa fa-user"></i></span>
                                                                    <a href="#">Rohan Jha</a> afiliated by <a href="#">Johan Smith</a>.
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Recent Activities -->

                                    <!-- Internal Chat -->
                                    <div class="portlet">
                                        <div class="portlet-heading dark">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-comments"></i> Internal Chat</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a href="javascript:;"><i class="fa fa-refresh"></i></a>
                                                <span class="divider"></span>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#i-chat"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="i-chat" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="in-chat">
                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="" src="<?php echo base_url(); ?>assets/images/user-profile-1.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="fa fa-clock-o"></i> 4 sec
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">John Smith</a>
                                                            </div>
                                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-xs btn-primary">
                                                                    <i class="icon-only fa fa-share"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="" src="<?php echo base_url(); ?>assets/images/user-profile-2.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="fa fa-clock-o"></i> 38 sec
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Elly Martel</a>
                                                            </div>
                                                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-xs btn-primary">
                                                                    <i class="icon-only fa fa-share"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="" src="<?php echo base_url(); ?>assets/images/user-profile-1.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="fa fa-clock-o"></i> 2 min
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">John Smith</a>
                                                            </div>
                                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-xs btn-primary">
                                                                    <i class="icon-only fa fa-share"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="" src="<?php echo base_url(); ?>assets/images/user-profile-2.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o"></i> 3 min
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Elly Martel</a>
                                                            </div>
                                                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-xs btn-primary">
                                                                    <i class="icon-only fa fa-share"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="" src="<?php echo base_url(); ?>assets/images/user-profile-1.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="fa fa-clock-o"></i> 4 min
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Elly Martel</a>
                                                            </div>
                                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-xs btn-primary">
                                                                    <i class="icon-only fa fa-share"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="portlet-footer">
                                                <div class="input-group">
                                                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here ..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info btn-sm" id="btn-chat"><i class="fa fa-send"></i> Send</button>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Internal Chat -->

                                </div><!-- //col-lg-9 -->

                                <div class="col-lg-3 col-sm-12">

                                    <!-- Users List -->
                                    <div class="portlet">
                                        <div class="portlet-heading inverse">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-list-alt"></i> Clients</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#qclients"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="qclients" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <input type="search" class="form-control input-sm" id="input-quicklist" placeholder="Search User..." >
                                                <div class="space-4"></div>

                                                <div class="quick-list">														
                                                    <a href="profile.html">
                                                        <div class="media items no-margin-top">
                                                            <span class="pull-left">
                                                                <img src="<?php echo base_url(); ?>assets/images/user-1.jpg" style="width: 37px;height:37px;" alt="#">
                                                            </span>
                                                            <div class="media-body">
                                                                John Smith<br /><small>Software Developer</small>
                                                            </div>
                                                            <div class="tools">
                                                                <i class="fa fa-share icon-only"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="media items">
                                                            <span class="pull-left">
                                                                <img src="<?php echo base_url(); ?>assets/images/user-4.jpg" style="width: 37px;height:37px;" alt="#">
                                                            </span>
                                                            <div class="media-body">
                                                                Elly Martel<br /><small>Software Developer</small>
                                                            </div>
                                                            <div class="tools">
                                                                <i class="fa fa-share icon-only"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="media items">
                                                            <span class="pull-left">
                                                                <img src="<?php echo base_url(); ?>assets/images/user-3.jpg" style="width: 37px;height:37px;" alt="#">
                                                            </span>
                                                            <div class="media-body">
                                                                Jack Sparrow<br /><small>Software Developer</small>
                                                            </div>
                                                            <div class="tools">
                                                                <i class="fa fa-share icon-only"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="media items">
                                                            <span class="pull-left">
                                                                <img src="<?php echo base_url(); ?>assets/images/user-5.jpg" style="width: 37px;height:37px;" alt="#">
                                                            </span>
                                                            <div class="media-body">
                                                                Maris Bradley<br /><small>Software Developer</small>
                                                            </div>
                                                            <div class="tools">
                                                                <i class="fa fa-share icon-only"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Users List -->

                                    <!-- Todo List -->
                                    <div class="portlet">
                                        <div class="portlet-heading inverse">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-edit"></i> To Do</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a href="javascript:;"><span class="badge badge-primary">6</span></a>
                                                <span class="divider"></span>
                                                <a href="#" class="tooltip-primary" data-placement="left" data-rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="portlet-body">
                                            <ul id="todo-sortlist" class="task-widget list-group task-lists">
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox" />
                                                            <span id="#checkbox" class="labels">
                                                                Updating server software <i class="fa fa-warning text-danger"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox1" />
                                                            <span id="#checkbox1" class="labels">
                                                                Fixing bugs
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox2" />
                                                            <span id="#checkbox2" class="labels">
                                                                Upgrading scripts in template
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox3" />
                                                            <span id="#checkbox3" class="labels">
                                                                Reporting to manager
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox4" />
                                                            <span id="#checkbox4" class="labels">
                                                                Pending Orders <span class="badge badge-success">3</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="tcb">
                                                        <label>
                                                            <input type="checkbox" class="tc" id="checkbox5" />
                                                            <span id="#checkbox5" class="labels">
                                                                Call to John Smith
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="portlet-footer">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-sm" placeholder="Add new Task..." />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success btn-sm"><i class="fa fa-plus icon-only"></i></button>
                                                </span>
                                            </div>
                                        </div>

                                    </div>										
                                    <!-- End Todo List -->


                                    <!-- Mini Calendar -->
                                    <div class="portlet hidden-widgets">
                                        <div class="portlet-heading inverse">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-calendar"></i> Calendar</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#mini-calendar"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="mini-calendar" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div id="minicalendar"></div>

                                                <div class="space-8"></div>

                                                <div class="notice bg-primary marker-on-top no-margin-bottom">
                                                    <h4>Today's Event</h4>
                                                    <ul class="list-unstyled smaller-90">
                                                        <li>10 Addons Due to Renew</li>
                                                        <li>2 Products/Services Due to Renew</li>
                                                        <li>6 Domains Due to Renew</li>
                                                    </ul>

                                                    <a href="#"><i class="fa fa-plus"></i> Add New Event</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                    <!-- End Mini Calendar -->

                                    <!-- World Map -->
                                    <div class="portlet hidden-widgets">
                                        <div class="portlet-heading dark">
                                            <div class="portlet-title">
                                                <h4><i class="fa fa-map-marker"></i> Visitors Map</h4>
                                            </div>
                                            <div class="portlet-widgets">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#v-map"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="v-map" class="panel-collapse collapse in">
                                            <div class="portlet-body no-padding">
                                                <div id="visitors-map" style="min-height: 150px!important; height: 150px;"></div>
                                                <!-- .table - Uses sparkline charts-->
                                                <table class="table table-bordered table-striped table-hover tc-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Country</th>
                                                            <th>Online</th>
                                                            <th>Page Views</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#">USA</a></td>
                                                            <td>209</td>
                                                            <td>239</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">India</a></td>
                                                            <td>131</td>
                                                            <td>958</td>
                                                        </tr>
                                                    </tbody>
                                                </table><!-- /.table -->
                                            </div>
                                        </div>
                                    </div>										
                                    <!-- End World Map -->


                                </div><!-- //col-lg-3 -->
                            </div>			
                            <!-- END YOUR CONTENT HERE -->

                        </div>
                    </div>

                    <!-- BEGIN FOOTER CONTENT -->		
                    <div class="footer">
                        <div class="footer-inner">
                            <!-- basics/footer -->
                            <div class="footer-content">
                                &copy; 2014 <a href="#">eKoders</a>, All Rights Reserved.
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

        <div id="live-chat-ui">
            <header class="clearfix">
                <a href="#" class="chat-close"><i class="fa fa-times"></i></a>
                <h4>John Doe</h4>
                <span class="chat-message-counter" style="display: inline;">3</span>
            </header>
            <div class="chat" style="display: none;">
                <div class="chat-history">
                    <div class="chat-message clearfix">
                        <img src="<?php echo base_url(); ?>assets/images/user-3.jpg" alt="" style="width: 37px;height:37px;">
                        <div class="chat-message-content clearfix">
                            <span class="chat-time">13:35</span>
                            <h5>John Doe</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>
                        </div> <!-- end chat-message-content -->
                    </div> <!-- end chat-message -->

                    <hr class="separator" />

                    <div class="chat-message clearfix">
                        <img src="<?php echo base_url(); ?>assets/images/user-4.jpg" alt="" style="width: 37px;height:37px;">
                        <div class="chat-message-content clearfix">
                            <span class="chat-time">13:37</span>
                            <h5>Roddy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>
                        </div> <!-- end chat-message-content -->
                    </div> <!-- end chat-message -->

                    <hr class="separator" />

                    <div class="chat-message clearfix">	
                        <img src="<?php echo base_url(); ?>assets/images/user-5.jpg" alt="" style="width: 37px;height:37px;">
                        <div class="chat-message-content clearfix">
                            <span class="chat-time">13:38</span>
                            <h5>Maris Bradley</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        </div> <!-- end chat-message-content -->
                    </div> <!-- end chat-message -->

                    <hr class="separator" />

                </div> <!-- end chat-history -->
                <p class="chat-feedback">Your partner is typing…</p>
                <form action="#" method="post">
                    <div class="input-icon right">	
                        <span class="fa fa-share"></span>
                        <input type="text" class="form-control" placeholder="Type your message…" autofocus>
                        <input type="hidden">
                    </div>
                </form>
            </div> <!-- end chat -->
        </div> <!-- end live-chat -->	

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

    <!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 11:58:32 GMT -->
</html>