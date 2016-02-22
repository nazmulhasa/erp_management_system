


<div class="form-horizontal" style="border: 1px solid #4a8bc2;padding-bottom: 60px;">
    <div class="row" style="margin: 10px;">
        <div class="entry_from">
            <h5 class="entry_from_header">
                <i class="fa fa-reorder"></i>
                &nbsp;Entry Form

            </h5>

        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Purchase_Controll/save_purchase_entry/">
            <div class="col-md-6" style="margin-top: 15px;">
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Purchase No:</label>
                    <div class="col-sm-5 col-md-5 col-xs-5">



                        <?php
                        if (isset($input_value)) {
                            ?>
                            <input type="text" readonly value="<?php echo $input_value + 1 ?>" name="purchase_no" class="form-control input_style_journal_entry">
                            <?php } ?>
                           
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "inputEmail3" class = "col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Select Item:</label>
                    <div class = "col-sm-7 col-md-7 col-xs-7">
                        <select class = "form-control input_style_journal_entry1" name = "select_item">
                            <option value = "1">1</option>
                            <option value = "4">2</option>

                        </select>
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "inputEmail3" class = "col-md-4 col-sm-4 col-xs-4 lebel_style_jurnal control-label">Quantity:</label>
                    <div class = "col-sm-7 col-md-7 col-xs-7">
                        <input type = "text" name = "quantity" class = "form-control input_style_journal_entry">
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "inputEmail3" class = "col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Price per Unit:</label>
                    <div class = "col-sm-7 col-md-7 col-xs-7">
                        <input type = "text" class = "form-control input_style_journal_entry" name = "price_per_unit">
                    </div>
                </div>
            </div>
            <div class = "col-md-6" style = "margin-top: 15px;">
                <div class = "form-group">
                    <label for = "inputEmail3" class = "col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Purchase Date:</label>
                    <div class = "col-sm-5 col-md-5 col-xs-5">
                        <input type = "text" class = "form-control input_style_journal_entry" name = "purchase_date">
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "inputEmail3" class = "col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Select Supplier:</label>
                    <div class = "col-sm-6 col-md-6 col-xs-6">
                        <?php
                        if (isset($show_supplier)) {
                            ?>
                            <select  class = "form-control input_style_journal_entry1" name ="select_supplier">
                                <?php
                                foreach ($show_supplier as $supplier_value) {
                                    ?>
                                    <option value ="<?php echo $supplier_value->supplier_code; ?>">
                                        <?php echo $supplier_value->supplier_code . " - " . $supplier_value->supplier_name; ?>

                                    </option>
                                <?php } ?>
                            </select>
                        <?php } ?>
                   
                    </div>
                  <?php
                        if (isset($show_supplier)) {
                            ?>
                    <label for = "inputEmail3" style="margin-left: -25px !important;" class="col-md-2 col-sm-2 col-xs-2 text-left control-label lebel_style_jurnal">
                        <a href ="#" data-toggle="modal" data-target="#exampleModal">
                            Add New  </a></label>
                        <?php }?>
                </div>
                <div class = "form-group">
                    <label for = "inputPassword3" class = "col-sm-4 col-md-4 col-xs-4 lebel_style_jurnal control-label">Notes:</label>
                    <div class = "col-sm-8 col-md-8 col-xs-8">
                        <textarea class = "form-control" rows = "2" name = "notes"></textarea>
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "form-actions">
                    <div class = "col-md-12 text-center">
                        <input type = "submit" value = "Add Item" class = "btn btn-success journal_entry_complete">
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

<div class = "row" style = "margin: 22px 0px 0px 0px;border: 1px solid #4a8bc2;padding-bottom: 60px;">
    <div class = "entry_from">
        <h5 class = "entry_from_header">
            <i class = "fa fa-reorder"></i>
            &nbsp;
            Item List
        </h5>
    </div>
    <div class = "row" style = "margin: 10px;">
        <div class = "col-md-6 col-sm-6 col-xs-6 text-left">
            <div class = "form-group text-left">
                <div class = "col-sm-3 col-md-3 col-xs-3">
                    <select class = "form-control select_size"style = "margin-left: -24px !important">
                        <option>Select</option>
                        <option>Cash</option>
                        <option>Non-Cash</option>

                    </select>
                </div>
                <label for = "inputPassword3" class = "col-sm-4 col-md-4 col-xs-4 control-label text-left">records per page:</label>

            </div>
        </div>
        <div class = "col-md-6 col-sm-6 col-xs-6">

            <div class = "form-group text-right">
                <label for = "inputEmail3" class = "col-md-7 col-sm-7 col-xs-7 control-label"> Search by name:</label>
                <div class = "col-sm-5 col-md-5 col-xs-5">
                    <input type = "text" class = "form-control input_style_journal_entry" id = "inputPassword3">
                </div>
            </div>

        </div>
    </div>
    <div class = "col-md-12" style = "margin-top: 10px;">
        <table class = "table table-hover table-bordered table-striped responsive text-center">

            <thead style = "background: #b3d9ff" >
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Sales Price</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr><th colspan="6"  rowspan="1">Order Totals</th></tr>
                <tr style="background: #cccccc"><td colspan="2" rowspan="1">&nbsp;</td><td class="center" rowspan="1" colspan="1">1</td><td rowspan="1" colspan="1"></td><td class="right" rowspan="1" colspan="1">122.00</td><td rowspan="1" colspan="1"></td></tr>
                <tr style="background: white" class="text-right"><td class="right" colspan="4" rowspan="1"> Total Paid Amount</td><td class="right" rowspan="1" colspan="1"><input type="text" id="paid_amount" name="paid_amount"></td><td rowspan="1" colspan="1"></td></tr>
            </tfoot>

        </table>
    </div>
    <div class="form-actions">
        <div class="col-md-12 text-center">
            <input type="button" value="Complete Purchase Entry" class="btn btn-success journal_entry_complete" name="debit_add">
        </div>
    </div>
</div> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" style="width: 420px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" style="font-family: Arial;font-size:13px;color: #000">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Supplier Code</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input_style_journal_entry" placeholder="Supplier Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Supplier Name</label>
                                <div class="col-sm-7 ">
                                    <input type="text" class="form-control input_style_journal_entry"placeholder="Supplier Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Address</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="2" placeholder="Supplier Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Contact Person</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input_style_journal_entry" placeholder="Contact Person">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Phone No</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input_style_journal_entry" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Notes</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" placeholder=" Supplier Notes" rows="2"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
