 
<section class="main-container col1-layout" ng-app="plunker">
    <div class="main container" >
     
      <div class="account-login">
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div>
       <form action="<?php echo base_url();?>onlineshop/user_login" method="post">
        <fieldset class="col2-set">
          <legend>Login or Create an Account</legend>
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set" ng-controller="MainCtrl">
                <button ng-hide="showDiv" ng-click="showDiv=true; hideMe()" class="button create-account" type="button"><span>Create an Account</span></button>
                <div ng-show="showDiv">
                    <ul class="form-list">
                     <li>
                       <label for="name">Name <span class="required">*</span></label>
                       <br>
                       <input type="text" title="Name" class="input-text required-entry" id="email" value="" name="user_name">
                     </li>
                     <li>
                       <label for="mobile">Mobile Number <span class="required">*</span></label>
                       <br>
                       <input type="text" title="Mobile Number" class="input-text required-entry" id="email" value="" name="user_mobile">
                     </li>
                     <li>
                       <label for="mobile">Location <span class="required">*</span></label>
                       <br>
                       <input type="text" title="Location" class="input-text required-entry" id="email" value="" name="user_location">
                     </li>
                     <li>
                       <label for="email">Email Address <span class="required">*</span></label>
                       <br>
                       <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="user_email">
                     </li>
                     <li>
                       <label for="pass">Password <span class="required">*</span></label>
                       <br>
                       <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="user_password">
                     </li>
                      <li>
                       <label for="pass">Retype Password <span class="required">*</span></label>
                       <br>
                       <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="user_repassword">
                     </li>
                   </ul>
                    <button type="submit" class="button btn bg-danger" >Submit</button>						
                                   
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <div class="content">
              <p>If you have an account with us, please log in.</p>
              <ul class="form-list">
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="login[username]">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="login[password]">
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                <a class="forgot-word" href="http://demo.magentomagik.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?</a> </div>
            </div>
          </div>
        </fieldset>
          </form>
      </div>
         
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
    <script>
		var app = angular.module('plunker', []);

app.controller('MainCtrl', function($scope) {
  $scope.name = 'World';
  
  $scope.hideMe = function(){
    $scope.hide();
  }
  
});
	</script>
      
  </section>

