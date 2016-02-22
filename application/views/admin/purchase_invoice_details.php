<!-- Content Wrapper. Contains page content -->

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
                    <i class="fa fa-globe"></i> Nazmul Ltd
                    <small class="pull-right">Date: 22/01/2015</small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Nazmul Ltd</strong><br>
                    Uttara,Sector-7<br>
                    Dhaka<br>
                    Phone: (804) 123-5432<br>
                    Email: nazmul132@yahoo.com
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>Dalim Ac</strong><br>
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
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="<?php echo base_url(); ?>master_admin/purchase_print/" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                <a href="" onclick="printPDF(body)" target="_blank" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</a>
            </div>
        </div>
    </section><!-- /.content -->
    <div class="clearfix"></div>
</div><!-- /.content-wrapper -->
<script>
function printPDF(htmlPage)
{
    var w = window.open("about:blank");
    w.document.write(htmlPage);
    if (navigator.appName == 'Microsoft Internet Explorer') window.print();
    else w.print();
}
</script>
