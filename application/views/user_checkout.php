
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
                                                        <select id="billing:region_id" title="District" class="validate-select" name="district" required>
                                                            
                                                                <option >Select</option>
                                                                <option >b.baria</option>
                                                                <option >bagerhat</option>
                                                                <option >bandarban</option>
                                                                <option >barguna</option>
                                                                <option >barisal</option>
                                                                <option >bhola</option>
                                                                <option >bogra</option>
                                                                <option >c. nawabganj</option>
                                                                <option >chandpur</option>
                                                                <option >chittagong</option>
                                                                <option >chuadanga</option>
                                                                <option >comilla</option>
                                                                <option >cox's bazar</option>
                                                                <option >dhaka</option>
                                                                <option >dinajpur</option>
                                                                <option >faridpur</option>
                                                                <option >feni</option>
                                                                <option >gaibandha</option>
                                                                <option >gazipur</option>
                                                                <option >gopalganj</option>
                                                                <option >habiganj</option>
                                                                <option >jamalpur</option>
                                                                <option >jessore</option>
                                                                <option >jhalokathi</option>
                                                                <option >jhenaidah</option>
                                                                <option >joypurhat</option>
                                                                <option >khagrachari</option>
                                                                <option >khulna</option>
                                                                <option >kishoreganj</option>
                                                                <option >kurigram</option>
                                                                <option >kushtia</option>
                                                                <option >lalmonirhat</option>
                                                                <option >laxmipur</option>
                                                                <option >madaripur</option>
                                                                <option >magura</option>
                                                                <option >manikganj</option>
                                                                <option >meherpur</option>
                                                                <option >moulvibazar</option>
                                                                <option >munshiganj</option>
                                                                <option >mymensingh</option>
                                                                <option >naogaon</option>
                                                                <option >narail</option>
                                                                <option >narayanganj</option>
                                                                <option >narshingdi</option>
                                                                <option >natore</option>
                                                                <option >netrokona</option>
                                                                <option >nilphamari</option>
                                                                <option >noakhali</option>
                                                                <option >pabna</option>
                                                                <option >panchagarh</option>
                                                                <option >patuakhali</option>
                                                                <option >perojpur</option>
                                                                <option >rajbari</option>
                                                                <option >rajshahi</option>
                                                                <option >rangamati</option>
                                                                <option >rangpur</option>
                                                                <option >satkhira</option>
                                                                <option >serajganj</option>
                                                                <option >shariatpur</option>
                                                                <option >sherpur</option>
                                                                <option >sunamganj</option>
                                                                <option >sylhet</option>
                                                                <option >tangail</option>
                                                                <option >thakurgaon</option>

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
