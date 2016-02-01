<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- REQUIRE FOR SPEECH COMMANDS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/gritter/jquery.gritter.css" />	

    <!-- Tc core CSS -->
    <link id="qstyle" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/style.css">	
  </head>

  <body class="login">
      <div id="wrapper">
          <!-- BEGIN MAIN PAGE CONTENT -->

          <div class="login-container">
              <h2>
                  <a href="#"><img src="<?php echo base_url(); ?>images/logo.png" alt="logo" class="img-responsive"></a><!-- can use your logo-->
              </h2>
              <!-- BEGIN LOGIN BOX -->
              <div id="login-box" class="login-box visible">					
                  <p class="bigger-110">
      
                      <i class="fa fa-key">
  
                      </i> 
                      
                       <?php
                       
                         $exception = $this->session->userdata('exception');
                            if (empty($exception)) {
                                
                                echo'Please Enter Yours Valid Information';
                                
                            } 
                               else { 
                                echo $exception;
                                $this->session->unset_userdata('exception');
                               }
                     
                            ?>
                  </p>

                  <div class="hr hr-8 hr-double dotted"></div>

                  <form method="post" action="<?php echo base_url() ?>te_somoyerdeal/check_login_authentication">
                      <div class="form-group">
                          <div class="input-icon right">
                              <span class="fa fa-key text-gray"></span>
                              <input type="text" name="email"class="form-control" placeholder="Your Email">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-icon right">
                              <span class="fa fa-lock text-gray"></span>
                              <input type="password" name="password" class="form-control" placeholder="Your password">
                          </div>
                      </div>
                      <div class="tcb">

                          <input type="submit" class="pull-right btn btn-primary" value="login">
                          <div class="clearfix"></div>
                      </div>	

                  </form>
              </div>
              <!-- END LOGIN BOX -->
          </div>
      </div> 
	 
    <!-- core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	
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
</html>