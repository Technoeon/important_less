<!--Start Add Product-->
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
            
                    
                <form class="form-horizontal" id="validate-form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>te_admin/product_size"novalidate="novalidate">
                <div id="bwizard">
                    <div class="bw-navbar">
                        <div class="navbar-inner">
                            <ul class="bwizard-steps">
                                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Product</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="false">Product Size</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false">Description</a></li>
                                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Image</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Discount</a></li>

                            </ul>
                        </div>
                    </div>
                    <div id="bar" class="progress progress-striped active progress-mini">
                        <div class="bar progress-bar progress-bar-primary" style="width: 100%;"></div>
                    </div>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Main Product Category:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <select class="">
                                            <option>select the Main Category</option>
                                        </select>
                                    </div><div for="email" class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Sub Product Category:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <select class="">
                                            <option>select the Sub Category</option>
                                        </select>
                                    </div><div for="email" class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Category:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <select class="">
                                            <option>select the Category</option>
                                        </select>
                                    </div><div for="email" class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Product Name:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="product_name" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid Product Name.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Product Model:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="product_model" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid Product Model.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Product Code:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="product_sku" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid Product Code.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Product Quantity:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="product_quantity" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid Product Quantity.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Product Price:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="product_price" class="form-control valid">
                                    </div><div for="email" class="help-block">Please provide a valid Product Price.</div>
                                </div>
                            </div>

                            <hr class="separator">

                            <div class="form-group has-info">
                                <label class="col-sm-3 control-label">Product Status:</label>
                                <div class="col-sm-9">
                                    <div class="tcb">
                                        <label>
                                            <input name="product_status" value="1" type="radio" class="tc tc-success valid">
                                            <span class="labels"> Published</span>
                                        </label>
                                    </div>
                                    <div class="tcb">
                                        <label>
                                            <input name="product_status" value="2" type="radio" class="tc">
                                            <span class="labels"> Unpublished</span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="tab4">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Select Description Box</label>

                                <div class="col-sm-7">                          
                                    <button type="button" onClick="description()">Add More Description</button><br><br>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <textarea  name="product_description[]" type="text" ></textarea>   
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="radio" name="default_image" value="1" checked>  Default Image
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="my_div" class="col-sm-4">

                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                        <div class="tab-pane" id="tab5">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Select Product Size</label>

                                <div class="col-sm-7">                          
                                    <button type="button" onClick="productsize()">Add More Size</button><br><br>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input  name="product_size[]" type="text" > 
                                            <input  type="text"name="product_id[]" value="2" >
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div id="size_div" class="col-sm-4">

                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tab2">

                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Image Select:</label>
                                <div class="col-sm-7">                          
                                    <button type="button" onClick="imagechange()">Add More Image</button>
                                    <br>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input  name="product_image[]" type="file" >   
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="radio" name="default_image" value="1" checked>  Default Image
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="r_div" class="col-sm-4">

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Menu Image:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="file" name="menu_image" class="form-control valid">
                                    </div><div for="menu_image" class="help-block">Please provide a Menu Image.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Slider Image:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="file" name="slider_image" class="form-control valid">
                                    </div><div for="slider_image" class="help-block">Please provide a Slider Image.</div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane" id="tab3">
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Discount Price:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="text" name="discount_price" class="form-control valid">
                                    </div><div for="discount_price" class="help-block">Please provide a Discount Price.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">Start Date:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="date" name="start_date" class="form-control valid">
                                    </div><div for="start_date" class="help-block">Please provide a Start Date.</div>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">End Date:</label>
                                <div class="col-sm-5">
                                    <div class="clearfix">
                                        <input type="date" name="end_date" class="form-control valid">
                                    </div><div for="end_date" class="help-block">Please provide a End Date.</div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn bg-danger" >Submit</button>						
                                    </div>	
                                </div>		
                            </div>

                        </div>




                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--End Add Product-->
<script language="javascript">
    var i = 1, j = 1, k = 1;
    function description()
    {
        if (i > 4) {
            alert("Maximum 5product image is allowed");
        } else {
            my_div.innerHTML = my_div.innerHTML + "<br><textarea name='product_description[]'></textarea>"

        }
        i++;
    }
    function imagechange()
    {
        if (j > 4) {
            alert("Maximum 5product image is allowed");
        } else {
            r_div.innerHTML = r_div.innerHTML + "<br><input type='file' name='product_image[]'>"

        }
        j++;
    }
    function productsize()
    {
        if (k > 4) {
            alert("Maximum 5product image is allowed");
        } else {
            size_div.innerHTML = size_div.innerHTML + "<br><input type='text' name='product_size[]'>";
            size_div.innerHTML = size_div.innerHTML + "<br><input type='text' value='2'name='product_id[]'>";

        }
        k++;
    }

//    $('[data-toggle=tab]').click(function () {
//        if ($(this).parent().hasClass('active')) {
//            $($(this).attr("href")).toggleClass('active');
//        }
//    })
</script>
