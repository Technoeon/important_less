<style>
    .name_logo{
        background-color: #014693;
        color: #ffffff;
        text-align: center;
        float: left;
        width: 100%;
    }
    .Invoice_date{
        background-color: #ffffff;
        color: #686868;
        text-align: left;
        float: left;
        width: 100%;
    }
    .invoice_wrapper{
        float: left;
        width: 100%;
        margin: 0% 1%;
        padding: 0px;
        color: #686868;
    }

</style>
<div class="row" style="border-radius: #014693;">
    <div style="margin: 5%;">
        <!-- START YOUR CONTENT HERE -->

        <div class="name_logo">
            <img src="images/logo.png">
        </div>

        <div class="Invoice_date">
            <p style="float: left; ">
                Invoice ID: <span style="color: #ff3333"><?php echo $invoice->invoice_no; ?></span>
            </p>
            <p  style="position: absolute; top: 110px; right: 70px; ">
                Date: <u><?php echo $invoice->order_date_time; ?></u>
            </p>
        </div>

        <div class="invoice_wrapper">
            <h4><u>Pay to</u></h4>

            <p >
                <strong>Shaping Address</strong><br>
                <?php echo $invoice->customer_name; ?><br>
                <?php echo $invoice->address; ?>,<br>
                <?php echo $invoice->district; ?><br>
                <?php echo $invoice->alter_mobile_no; ?>
            </p>
            <h4 style="position: absolute; top: 170px; right: 150px;"><u>Invoice to</u></h4>

            <p style="position: absolute; top: 200px; right: 80px; ">
                <?php echo $invoice->customer_name; ?><br>
                <?php echo $invoice->customer_location; ?><br>
                <?php echo $invoice->mobile_no; ?><br>
                <?php echo $invoice->customer_email; ?>
            </p>
        </div>
        <br>
        <table border="1" style="color: black; border: 2px solid #000000; width: 100%; margin-top: 5px; min-height: 200px; text-align: center;">
                <thead>
                    <tr>
                        <th align="center">Description</th>
                        <th align="center">Size</th>
                        <th align="center">Quantity</th>
                        <th align="center">Price</th>
                        <th align="center">Subtotal</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    <?php foreach ($order_details as $value) { ?>


                        <tr>
                            <td class=""><img src="<?php echo $value->image; ?>" width="60" height="60"><?php echo $value->product_name; ?></td>
                            <td class=""><?php echo $value->size; ?><span class="text-danger"></span></td>
                            <td class=""><?php echo $value->qty; ?></td>
                            <td class="">Tk. <?php echo $value->price; ?><span class="text-danger"></span></td>
                            <td class="">Tk. <?php echo $value->sub_total; ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        <p style="margin-top: 30px; margin-left: 450px;"><strong>Grand Total:</strong> Tk. <?php echo $invoice->order_total; ?></p>
            <p>Thank you for choosing Somoyer Deal products. We believe you will be satisfied by our services.</p>
        <?php
        if (isset($orde_status)) {
            echo $orde_status;
        }
        ?>

    </div>
</div>