
<div class="row">
    <div class="col-lg-12">

        <!-- START YOUR CONTENT HERE -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="well white padding-25">
                    <div class="pull-left">
                        <h1 class="bigger-250"><i class="fa fa-leaf text-primary"></i> Somoyer Deal</h1>
                    </div>

                    <div class="clearfix"></div>

                    <div class="hr hr-double hr-dotted hr-12"></div>




                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <p class="bigger-110">
                                <a href=""><i class="fa fa-print"></i></a> Invoice ID: <span class="text-red"><?php echo $invoice->invoice_no; ?></span><br>
                                Date: <?php echo $invoice->order_date_time; ?>
                            </p>
                        </div>																						
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="text-right">
                                <span class="label label-xlg arrowed-in-right arrowed-in label-danger">Unpaid</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-16"></div>

                    <div class="row">
                        <div class="col-sm-8">
                            <h4 class="text-primary">Pay to</h4>
                            <div class="hr hr-4 hr-dotted"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <address>
                                        <strong>Post Address</strong><br>
                                        <?php echo $invoice->customer_name; ?><br>
                                        <?php echo $invoice->address; ?>,<br>
                                        <?php echo $invoice->district; ?><br>

                                        <!--                                        <div class="space-4"></div>-->

                                        <i class="fa fa-phone-square"></i> <?php echo $invoice->alter_mobile_no; ?>
                                    </address>
                                </div>
                                <div class="col-lg-6">
                                    <p>

                                        <strong>Beneficiary Name:</strong> Somoyer Deal Ltd<br>

                                    </p>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="text-align: right">
                            <h4 class="text-primary">Invoice to</h4>
                            <div class="hr hr-4 hr-dotted"></div>
                            <address >
                                <strong><?php echo $invoice->customer_name; ?></strong><br>
                                <?php echo $invoice->customer_location; ?><br>
                                <i class="fa fa-phone-square"></i> <?php echo $invoice->mobile_no; ?><br>
                                <i class="fa fa-envelope-square"></i> <?php echo $invoice->customer_email; ?>
                            </address>												
                        </div>
                    </div>

                    <table class="table table-striped table-bordered tc-table footable no-paging footable-loaded tablet">
                        <thead>
                            <tr>
                                <th data-toggle="true" data-sort-ignore="true" class="footable-visible footable-first-column">Description</th>
                                <th data-hide="phone" data-sort-ignore="true" class="footable-visible">Size</th>
                                <th style="width: 125px;" data-sort-ignore="true" class="footable-visible footable-last-column">Quantity</th>
                                <th style="width: 125px;" data-sort-ignore="true" class="footable-visible footable-last-column">Price</th>
                                <th style="width: 125px;" data-sort-ignore="true" class="footable-visible footable-last-column">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order_details as $value) { ?>


                                <tr style="display: table-row;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span><img  src="<?php echo base_url() . $value->image; ?>" width="50" height="50"><?php echo $value->product_name; ?></td>
                                    <td class="footable-visible"><?php echo $value->size; ?><span class="text-danger"></span></td>
                                    <td class="footable-visible footable-last-column"><?php echo $value->qty; ?></td>
                                    <td class="footable-visible">Tk. <?php echo $value->price; ?><span class="text-danger"></span></td>
                                    <td class="footable-visible footable-last-column">Tk. <?php echo $value->sub_total; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody></table>

                    <div class="row">
                        <div class="col-lg-8 pull-left">
                            <span class="text-danger">*</span> Indicates a taxed item. and some more information

                            <div class="space-12"></div>

<!--                            <button type="button" class="btn btn-success hidden-print">Pay Online Now <i class="fa fa-check icon-on-right"></i></button>-->
                        </div>

                        <div class="col-lg-4 pull-right">
                            <ul class="list-unstyled text-right bigger-110">
                                <li><span class="text-right"></span></li>

                            </ul>
                            <p class="text-right bigger-150">Grand Total:<span class="text-danger"> Tk. <?php echo $invoice->order_total; ?></span></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <hr class="separator">

                    <div class="well light text-center">
                        Thank you for choosing Somoyer Deal products. We believe you will be satisfied by our services.
                    </div>
                </div>									
            </div>
        </div>
        <!-- END YOUR CONTENT HERE -->
        <?php if(isset($orde_status)){echo $orde_status; } ?>

    </div>							
</div>