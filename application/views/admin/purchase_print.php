<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">

  </head>
<!-- Content Wrapper. Contains page content -->
<body onload="window.print();">
<div class="col-md-12">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Invoice
            <small>#007612</small>
        </h1>

    </section>

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Nazmul 
                    <small class="pull-right">Date: 21/01/2015</small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>nazmul.</strong><br>
                    Uttara,Sector-7<br>
                    Dhaka<br>
                    Phone: (804) 123-5432<br>
                    Email: nazmul132@yahoo.com
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>John Doe</strong><br>
                    Dhanmondi-32,shukrabad<br>
                    Dhaka, 1209<br>
                    Phone: (555) 539-1037<br>
                    Email: nazmul1234@gmail.com
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Item Code</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Qty</th>
                            <th>Rate</th>
                            <th>Dis%</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td>1</td>
                            <td>Axe</td>
                            <td>250ml</td>
                           <td></td>
                            <td>5</td>
                            <td>1200</td>
                            <td>15%</td>
                            <td>$894.50</td>
                        </tr>
                       <tr>
                             <td>2</td>
                            <td>Pond</td>
                            <td>300ml</td>
                           <td>red</td>
                            <td>7</td>
                            <td>200</td>
                            <td>15%</td>
                            <td>$1204.50</td>
                        </tr>
                         <tr>
                             <td>3</td>
                            <td>Coca Cola</td>
                            <td>1L</td>
                           <td></td>
                            <td>12</td>
                            <td>780</td>
                            <td>7.5%</td>
                            <td>$894.50</td>
                        </tr>
                         <tr>
                             <td>1</td>
                            <td>Axe</td>
                            <td>250g</td>
                           <td></td>
                            <td>5</td>
                            <td>1200</td>
                            <td>15%</td>
                            <td>$894.50</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="<?php echo base_url(); ?>asset/dist/img/credit/visa.png" alt="Visa">
                <img src="<?php echo base_url(); ?>asset/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="<?php echo base_url(); ?>asset/dist/img/credit/american-express.png" alt="American Express">
                <img src="<?php echo base_url(); ?>asset/dist/img/credit/paypal2.png" alt="Paypal">
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Amount Due 2/22/2014</p>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                        </tr>
                        <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$265.24</td>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- this row will not appear when printing -->
        
    </section><!-- /.content -->
    <div class="clearfix"></div>
</div><!-- /.content-wrapper -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
</body>
