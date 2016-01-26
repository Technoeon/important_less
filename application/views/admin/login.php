<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 11:59:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>Login to authentications </title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	
	<!-- PAGE LEVEL PLUGINS STYLES -->
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

  <body class="login">
	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index-2.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive"></a><!-- can use your logo-->
				</h2>
				<!-- BEGIN LOGIN BOX -->
				<div id="login-box" class="login-box visible">					
					<p class="bigger-110">
						<i class="fa fa-key"></i> Please Enter Your Information
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<form method="post" action="<?php echo base_url()?>te_admin/check_login">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" class="form-control" placeholder="your password">
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc">
								<span class="labels"> Remember me</span>
							</label>
                                                    <input type="submit" class="pull-right btn btn-primary">Login<i class="fa fa-key icon-on-right"></i>
							<div class="clearfix"></div>
						</div>				
						
						<div class="social-or-login">
							<span class="text-primary">Or Login Using</span>
						</div>
							
						<div class="space-4"></div>
						
						<div class="text-center">
							<a href="#" class="btn btn-twitter btn-sm btn-circle"><i class="fa fa-twitter icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-googleplus btn-sm btn-circle"><i class="fa fa-google-plus icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-facebook btn-sm btn-circle"><i class="fa fa-facebook icon-only bigger-130"></i></a>
						</div>

						<div class="footer-wrap">
							<span class="pull-left">
								<a href="#" onclick="show_box('forgot-box'); return false;"><i class="fa fa-angle-double-left"></i> Forgot password?</a>
							</span>
							
							<span class="pull-right">
								<a href="#" onclick="show_box('registration-box'); return false;">Register here <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
						</div>							
					</form>
				</div>
				<!-- END LOGIN BOX -->
				
				<!-- BEGIN FORGOT BOX -->
				<div id="forgot-box" class="login-box">				
					<p class="bigger-110">
						<i class="fa fa-key"></i> Retrieve Password
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<form method="post" action="http://qsthemes.com/demo/ekoders/1.0.5/admin/index.html">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input type="email" class="form-control" placeholder="Email">
								<span class="help-block">Enter your email and to receive instructions</span>
							</div>
						</div>
						<a href="#" class="pull-right btn btn-danger">Submit</a>
						
						<div class="clearfix"></div>
						
						<div class="footer-wrap">
								<a href="#" onclick="show_box('login-box'); return false;">Back to login <i class="fa fa-angle-double-right"></i></a>
						</div>							
					</form>					
				</div>
				<!-- END FORGOT BOX -->
				
				<!-- BEGIN REGISTRATION BOX -->
				<div id="registration-box" class="login-box">				
					<p class="bigger-110">
						<i class="fa fa-users"></i> New User Registration
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<form method="post" action="#">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-user text-gray"></span>
								<input type="text" class="form-control" placeholder="Full Name">
							</div>
						</div>					
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" class="form-control" placeholder="your password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-repeat text-gray"></span>
								<input type="password" class="form-control" placeholder="confirm password">
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc">
								<span class="labels"> I accept the <a href="#" data-toggle="modal" data-target="#Myterms">Terms of Servcies</a></span>
							</label>
						</div>				
						
						<p><a href="#" class="btn btn-success">Register<i class="fa fa-angle-double-right icon-on-right"></i></a></p>
						
						<div class="footer-wrap">
								<a href="#" onclick="show_box('login-box'); return false;"><i class="fa fa-angle-double-left"></i> Back to login</a>
						</div>							
					</form>
				</div>
				<!-- END REGISTRATION BOX -->
			</div>
			
			<!-- Modal For Terms and Conditions -->
			<div class="modal fade" id="Myterms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
						</div>
						<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


			<!-- END MAIN PAGE CONTENT --> 
	</div> 
	 
    <!-- core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>
	
	<!-- PAGE LEVEL PLUGINS JS -->
	
    <!-- Themes Core Scripts -->	
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<script src="<?php echo base_url();?>assets/js/speech-commands.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>	
	
	<!-- initial page level scripts for examples -->	
	<script type="text/javascript">
		function show_box(id) {
			jQuery('.login-box.visible').removeClass('visible');
			jQuery('#'+id).addClass('visible');
		}
	</script>
  </body>

<!-- Mirrored from qsthemes.com/demo/ekoders/1.0.5/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 11:59:20 GMT -->
</html>