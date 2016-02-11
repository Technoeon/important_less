<div class="col-lg-12">

    <!-- START YOUR CONTENT HERE -->
    <div class="portlet">
        <div class="portlet-heading dark">
            <div class="portlet-title">
                <h4>Bootstrap Wizard</h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="portlet-body">
            <form class="form-horizontal" id="validate-form" method="get" novalidate="novalidate">
                <div id="bwizard">
                    <div class="bw-navbar">
                        <div class="navbar-inner">
                            <ul class="bwizard-steps">
                                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Step 1</a></li>
                                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Step 2</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Step 3</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false">Step 4</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="false">Step 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="bar" class="progress progress-striped active progress-mini">
                        <div class="bar progress-bar progress-bar-primary" style="width: 20%;"></div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label">Email Address:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="email" name="email" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid email.</div>
                                </div>
                            </div>
                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label" for="password">Password:</label>
                                <div class="col-sm-3">
                                    <div class="clearfix">
                                        <input type="password" name="password" id="password" class="form-control valid">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label" for="password2">Confirm Password:</label>
                                <div class="col-sm-3">
                                    <div class="clearfix">
                                        <input type="password" name="password2" id="password2" class="form-control valid">
                                    </div><div for="password2" class="help-block">Please enter the same value again.</div>
                                </div>
                            </div>

                            <hr class="separator">

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Company Name:</label>
                                <div class="col-sm-4">
                                    <div class="clearfix">
                                        <input type="text" id="name" name="name" class="form-control valid">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="phone">Pnone:</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" id="phone" name="phone" class="form-control valid">
                                    </div>													
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label" for="url">Company URL:</label>
                                <div class="col-sm-6">
                                    <div class="clearfix">
                                        <input type="url" id="url" name="url" class="form-control valid">
                                    </div><div for="url" class="help-block">Please enter a valid URL.</div>
                                </div>
                            </div>											

                            <hr class="separator">

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Subscribe to:</label>
                                <div class="col-sm-9">
                                    <div class="tcb">
                                        <label>
                                            <input name="subscription" value="1" type="checkbox" class="tc tc-success valid">
                                            <span class="labels"> Latest news and announcements</span>
                                        </label>
                                    </div>
                                    <div class="tcb">
                                        <label>
                                            <input name="subscription" value="2" type="checkbox" class="tc">
                                            <span class="labels"> Product promotions</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Gender:</label>
                                <div class="col-sm-9">
                                    <div class="tcb">
                                        <label>
                                            <input name="gender" value="1" type="radio" class="tc valid">
                                            <span class="labels"> Male</span>
                                        </label>
                                    </div>
                                    <div class="tcb">
                                        <label>
                                            <input name="gender" value="2" type="radio" class="tc valid">
                                            <span class="labels"> Female</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr class="separator">

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Comment:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <textarea class="form-control input-xxlarge valid" name="comment" id="comment" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Subscribe to:</label>
                                <div class="col-sm-9">
                                    <div class="tcb">
                                        <label>
                                            <input name="agree" id="agree" type="checkbox" class="tc valid">
                                            <span class="labels"> I have read and accept the policy</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane" id="tab2">
                            
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <strong><i class="fa fa-check"></i> Well done! </strong>You successfully read this important alert message.
                                <br>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab3">
                            <div class="text-center">
                                <h4 class="text-success">This is step 3</h4>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab4">
                            <div class="text-center">
                                <h2 class="text-success">This is step 4</h2>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab5">
                            <div class="text-center">
                                <h1 class="text-green">Congrats!</h1>
                                <p>Your product is ready to ship!!</p>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="button" class="btn button-previous disabled" name="previous" value="Prev"><i class="fa fa-arrow-left"></i>Prev</button>						
                                    <button type="button" class="btn button-next btn-primary" name="next" value="Next">Next<i class="fa fa-arrow-right icon-on-right"></i></button>
                                </div>	
                            </div>		
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    