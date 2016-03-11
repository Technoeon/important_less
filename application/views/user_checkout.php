
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <form action="<?php echo base_url(); ?>onlineshop/confirm_order" method="post">
           <section class="col-main col-sm-7 wow bounceInUp animated">
                <div class="page-title">
                    <h1>Checkout</h1>
                </div>
                <ol class="one-page-checkout" id="checkoutSteps">
                    <li id="opc-billing" class="section allow active">
                        <div class="step-title"> <span></span>
                            <h3>Checkout Method</h3>
                            <!--<a href="#">Edit</a> --> 
                        </div>
                        <div id="checkout-step-billing" class="step a-item" style="">
                            
                                <fieldset class="group-select">
                                    <ul>
                                        <li>
                                            <div>
                                                <ul class="form-list">
                                                    
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="billing:telephone">Mobile <span class="required">*</span></label>
                                                            <br>
                                                            <input type="text" name="mobile_no" value="<?php echo $this->session->userdata('customer_mobile');?>" maxlength="11" title="Mobile" class="input-text required-entry" id="billing:telephone" disabled><br><br>
                                                            <label for="billing:telephone">Alternative  Mobile Number<span class="required"></span></label>
                                                            <br>
                                                            <input type="text" name="alter_mobile_no" placeholder="01XXXXXXXXX" maxlength="11" title="Fax" class="input-text" id="billing:fax">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                        <label for="address">Address<span class="required">*</span></label>
                                                        <br>
                                                        <textarea name="address" required></textarea>
                                                        </div>
                                                        </li>
                                                    <div id="" class="input-box">
                                                        <label for="billing:region">District<span class="required">*</span></label>
                                                        <br>
                                                        <select defaultvalue="1" id="billing:region_id" title="District" class="validate-select" name="district" required>
                                                            
                                                                <option value="-1">Select</option>
                                                                <option value="14">b.baria</option>
                                                                <option value="44">bagerhat</option>
                                                                <option value="15">bandarban</option>
                                                                <option value="2">barguna</option>
                                                                <option value="5">barisal</option>
                                                                <option value="4">bhola</option>
                                                                <option value="51">bogra</option>
                                                                <option value="47">c. nawabganj</option>
                                                                <option value="12">chandpur</option>
                                                                <option value="11">chittagong</option>
                                                                <option value="42">chuadanga</option>
                                                                <option value="10">comilla</option>
                                                                <option value="13">cox's bazar</option>
                                                                <option value="24">dhaka</option>
                                                                <option value="58">dinajpur</option>
                                                                <option value="31">faridpur</option>
                                                                <option value="8">feni</option>
                                                                <option value="60">gaibandha</option>
                                                                <option value="21">gazipur</option>
                                                                <option value="28">gopalganj</option>
                                                                <option value="63">habiganj</option>
                                                                <option value="27">jamalpur</option>
                                                                <option value="41">jessore</option>
                                                                <option value="6">jhalokathi</option>
                                                                <option value="36">jhenaidah</option>
                                                                <option value="50">joypurhat</option>
                                                                <option value="16">khagrachari</option>
                                                                <option value="35">khulna</option>
                                                                <option value="19">kishoreganj</option>
                                                                <option value="56">kurigram</option>
                                                                <option value="40">kushtia</option>
                                                                <option value="54">lalmonirhat</option>
                                                                <option value="9">laxmipur</option>
                                                                <option value="30">madaripur</option>
                                                                <option value="38">magura</option>
                                                                <option value="34">manikganj</option>
                                                                <option value="43">meherpur</option>
                                                                <option value="62">moulvibazar</option>
                                                                <option value="33">munshiganj</option>
                                                                <option value="22">mymensingh</option>
                                                                <option value="45">naogaon</option>
                                                                <option value="37">narail</option>
                                                                <option value="20">narayanganj</option>
                                                                <option value="23">narshingdi</option>
                                                                <option value="46">natore</option>
                                                                <option value="25">netrokona</option>
                                                                <option value="55">nilphamari</option>
                                                                <option value="7">noakhali</option>
                                                                <option value="49">pabna</option>
                                                                <option value="59">panchagarh</option>
                                                                <option value="1">patuakhali</option>
                                                                <option value="3">perojpur</option>
                                                                <option value="29">rajbari</option>
                                                                <option value="48">rajshahi</option>
                                                                <option value="17">rangamati</option>
                                                                <option value="53">rangpur</option>
                                                                <option value="39">satkhira</option>
                                                                <option value="52">serajganj</option>
                                                                <option value="32">shariatpur</option>
                                                                <option value="26">sherpur</option>
                                                                <option value="64">sunamganj</option>
                                                                <option value="61">sylhet</option>
                                                                <option value="18">tangail</option>
                                                                <option value="57">thakurgaon</option>

                                                        </select>

                                     
                                                    </div>


                                                </ul>
                                                
                                            </div>
                                        </li>

                                        
                                    </ul>
                                    
                                    <br>
                                   </fieldset>
                                <br>
                               
                            
                        </div>
                    </li>
                 </ol>
            </section >
            <section class="col-main col-sm-4 wow bounceInUp animated">
                <div class="cashdel">
                    <img src="<?php echo base_url(); ?>images/products/caseondelevery.jpg"><br>
                    <input type="radio" name="cash" value="1" checked> <span style="font-size: 20px;">Cash On delivery</span>
                 </div>
                <button type="submit" class="button btn-proceed-checkout"><span>Complete your Order</span></button>
            </section>
            </form>
            <section class="col-main col-sm-11 wow bounceInRight animated">
                 <div class="pcheck">
                                    Product Details & Bill Information
                                </div>
                                <table class="table table-bordered bcheck">
                                    
                                    <thead>
                                       
                                        <tr>
                                            
                                            <th>
                                                <h4 style="text-align: right;">Description</h4>
                                            </th>
                                            <th>
                                                <h4 style="text-align: right;">Qty</h4>
                                            </th>
                                            <th>
                                                <h4 style="text-align: right;">Rate</h4>
                                            </th>
                                            <th>
                                                <h4 style="text-align: right;">Sub Total</h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $content= $this->cart->contents();
                                                   foreach ($content as $value) { ?>
                                        <tr>
                                            <td class="text-right"><img style="float: left" class="img-responsive" height="50" width="50" src="<?php echo base_url().$value['image'];?>"> <?php echo $value['name'] ?></td>
                                            <td class="text-right"><?php echo $value['qty'] ?></td>
                                            <td class="text-right">Tk. <?php echo $value['price'] ?></td>
                                            <td class="text-right">Tk. <?php echo $value['subtotal'] ?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                <div class="text-right" style="font-size: 20px; margin: 0 -56px 2px;">
                                    <div class="col-xs-2 col-xs-offset-8">
                                        <p>
                                            <strong>
                               
                                                Total : <br>
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="col-xs-2">
                                        <strong>
                                           TK. <?php echo $this->cart->total();?> <br>
                                         
                                        </strong>
                                    </div>
                                </div>
            </section>
            
        </div>
    </div>
</div>
<br><br>
