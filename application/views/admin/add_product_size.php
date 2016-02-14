<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/form-tools.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 12:00:49 GMT -->
<head>
    <meta charset="utf-8">
    <title>Form Tools - eKoders Responsive Admin Theme</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	
	<!-- PAGE LEVEL PLUGINS STYLES -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/duallistbox/bootstrap-duallistbox.min.css">
	<link href="<?php echo base_url();?>assets/css/plugins/select2/select2.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-wysihtml/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/datetime/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-datepicker/datepicker.css">
	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/gritter/jquery.gritter.css" />

    <!-- Tc core CSS -->
	<link id="qstyle" rel="stylesheet" href="<?php echo base_url();?>assets/css/themes/style.css">
	
	
    <!-- Add custom CSS here -->

	<!-- End custom CSS here -->
	
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
								<img src="assets/images/logo.png" alt="logo" class="img-responsive">
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
																		<img class="img-circle" src="assets/images/user-profile-1.jpg" alt="">
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
																		<img class="img-circle" src="assets/images/user-profile-2.jpg" alt="">
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
										<img class="img-circle" src="assets/images/user.jpg" alt=""> <span class="user-info">John Smith</span> <b class="caret"></b>
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
								<a href="index-2.html">
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
							<li  class="panel open">
								<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
									<i class="fa fa-edit"></i> Forms <span class="fa arrow"></span>
								</a>
									<ul class="collapse nav in" id="forms">
										<li>
											<a href="forms.html">
												<i class="fa fa-angle-double-right"></i> Form Elements 
											</a>
										</li>
										<li>
											<a class="active" href="form-tools.html">
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
										<li><a href="#">Forms</a></li>
										<li class="active">Form Tools</li>
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
									<h1>Form Tools <span class="sub-title">included third party plugins</span></h1>								
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
							
								
								<div class="portlet">
									<div class="portlet-heading dark">
										<div class="portlet-title">
											<h4>Html Editors</h4>
										</div>
										<div class="portlet-widgets">
											<a data-toggle="collapse" data-parent="#accordion" href="#ft-6"><i class="fa fa-chevron-down"></i></a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div id="ft-6" class="panel-collapse collapse in">
										<div class="portlet-body">
											<form class="form-horizontal" role="form" method="post">
												<div class="form-group">
													<label class="col-sm-3 control-label">Wysihtml5:</label>
													<div class="col-sm-9">
														<textarea id="editor1" class="form-control"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Bootstrap MarkDown:</label>
													<div class="col-sm-9">
														<textarea data-provide="markdown" class="form-control" data-iconlibrary="fa"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Bootstrap Wysiwyg:</label>
													<div class="col-sm-9">
														<div class="wysiwyg-editor" id="editor-2" style="height: 150px;"></div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								
								
								<!-- END YOUR CONTENT HERE -->
					
							</div>
						</div>					
					
					<!-- BEGIN FOOTER CONTENT -->		
						
						
					<!-- END FOOTER CONTENT -->
						
				</div><!-- /#page-wrapper -->	  
			<!-- END MAIN PAGE CONTENT -->
		</div>  
	</div> 
	 
    <!-- core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>
		
	<!-- PAGE LEVEL PLUGINS JS -->
	<script src="<?php echo base_url();?>assets/js/plugins/duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/masked-input/jquery.maskedinput.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysihtml/wysihtml.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysihtml/bootstrap-wysihtml.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-markdown/markdown.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-markdown/bootstrap-markdown.js"></script>	
	<script src="<?php echo base_url();?>assets/js/plugins/bootbox/bootbox.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysiwyg/jquery.hotkeys.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysiwyg/ek-wysiwyg.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/datetime/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/fuelux/spinner.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-touchspin/bootstrap.touchspin.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-knob/jquery.knob.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/colorpickers/bootstrap-colorpicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/colorpickers/ek-colorpicker.js"></script>

    <!-- Themes Core Scripts -->	
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	
	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<script src="<?php echo base_url();?>assets/js/speech-commands.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>		
	
	<!-- initial page level scripts for examples -->
	<script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script>
	<script>
        $(document).ready(function() { 			
			//Dual listbox examples  for more information and options please visit http://www.virtuosoft.eu/code/bootstrap-duallistbox/
			var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-primary label-lg">Filtered</span>'});
			var container1 = demo1.bootstrapDualListbox('getContainer');
				
			//Select2 examples
			$("#e1, #e2, #e3").select2({
				width: 175
			});			
			$("#e4").select2({
				placeholder: "Select a Option",
				width: 375,
				allowClear: true
			});
			$("#e5").select2({tags:["red", "green", "blue"]});
			
			//Bootstrap Select enable
			$('.selectpicker').selectpicker('show');
			
			//Maxilength
			$('input[maxlength]').maxlength();
			
			$('input.maxL-1').maxlength({
				threshold: 17
			});
			
			$('input.maxL-2').maxlength({
				alwaysShow: true,
				warningClass: "label label-primary",
				limitReachedClass: "label label-danger",
				separator: ' of ',
				preText: 'You have ',
				postText: ' chars remaining.',
				validate: true,
				threshold: 10
			});
			
			$('textarea#maxL-3').maxlength({
				alwaysShow: true
			});
			
			$('input#maxL-4').maxlength({
				alwaysShow: true,
				placement: 'top-left'
			});	
					
			//Masked Input Uses http://digitalbush.com/projects/masked-input-plugin/			
			$.mask.definitions['~']='[+-]';
			$('.input-date').mask('99/99/9999');
			$('.input-phone').mask('(999) 999-9999');
			$(".input-key").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			$('.input-eyescript').mask('~9.99 ~9.99 999');
									
			//Bootstrap Datetimepicker
			$('.form_datetime').datetimepicker({
				//language:  'fr',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
			$('.form_date').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
			$('.form_time').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 1,
				minView: 0,
				maxView: 1,
				forceParse: 0
			});
			
			//Bootstrap Datepicker
			$('.datepicker').datepicker();
			
			//Wysihtml Editor
			$('#editor1').wysihtml5();
			
			//Bootstrap Wysiwyg Editor
			$('#editor-2').ek_wysiwyg({
				toolbar:
					[
						'font',
						null,
						'fontSize',
						null,
						'bold',
						'italic',
						'strikethrough',
						'underline',
						null,
						'justifyleft',
						'justifycenter',
						'justifyright',
						null,
						'createLink',
						'unlink',
						null,
						'insertImage',
						null,
						'undo',
						'redo'
					]
				}).prev().addClass('editor-style1 text-center');

					
			// Spinners
			$('#MySpinner-1').spinner();
			$('#MySpinner-2').spinner({disabled: true});
			$('#MySpinner-3').spinner({value:0, min: 0, max: 10});
			$('#MySpinner-4').spinner({value:0, step: 5, min: 0, max: 200});
			
			// Touchspinners
			$("#touchspin-demo1").TouchSpin({
				min: 0,
				max: 100,
				step: 1,
				decimals: 0,
				boostat: 5,
				maxboostedstep: 10,
				postfix: '$'
			});
			
			 $("#touchspin-demo2").TouchSpin({
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
				buttonup_class: 'btn btn-primary',
				buttondown_class: 'btn btn-primary',
				postfix: '%'
			});
						
			//jQuery knob for more option/help please visit https://github.com/aterrien/jQuery-Knob
			$(function() {
				$(".knob").knob();
			});
			
			//Color Picker
			$('#colorpicker1').colorpicker();
			
			//Custom Color Picker
			$('#ek-colorpicker').ek_colorpicker();
		});
    </script>
	
  </body>

<!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/form-tools.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 12:01:03 GMT -->
</html>