<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body class="container">
        <div class="wrapper">
            <div class="h1div">
            </div>
            <div class="f1div">
                <h3>Hey, User Name</h3><br>
                <h4>Thanks.</h4><br>
                <h4>you have successfully ordered at SOMOYER DEAL DOT COM</h4><br>
                <h4>Our representative will contact with you within ono hour and will ensure your order. please see your order in details...</h4><br>
                <section class=" wow bounceInRight animated">
                    <div class="ttopb"><p>Your Order Id:</p> </div>
                                <table class="table table-bordered tborder ">
                                    
                                    <thead class="tbh1">
                                       
                                        <tr >
                                            
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
                                        
                                        <tr >
                                            <td class="text-right" style="color: red;"><img style="float: left" class="img-responsive" height="50" width="50" src="<?php echo base_url().$value['image'];?>"> <?php echo $value['name'] ?></td>
                                            <td class="text-right"><?php echo $value['qty'] ?></td>
                                            <td class="text-right">Tk. <?php echo $value['price'] ?></td>
                                            <td class="text-right">Tk. <?php echo $value['subtotal'] ?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                <div class="">
                                    <div class="col-xs-2 col-xs-offset-8">
                                        <p>
                                            <strong>
                               
                                                Total : <br>
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="col-xs-2">
                                        <strong>
                                           TK.  <br>
                                         
                                        </strong>
                                    </div>
                                </div>
                </section><br>
            <h3>Thanks,</h3><br> 
            <h2>Somoyer Deal Dot Com</h2><br>
            <h4>Biggest Online Shopping Market</h4><br>
            </div>
        
        
            <div class="footer">
                <p>biggest online shopping market</p>
                <img src="<?php echo base_url(); ?>images/logo.png">
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
        
    </body>
</html>

