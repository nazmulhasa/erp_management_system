
<div class="row purchase_header1">
    <div class="col-md-2 purchase_header" style="padding-right: 15px;">
        <h1 style="padding-left: 25px;">Purchase Entry</h1>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Invoice No</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="text" class="form-control purchase_header_input" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Invoice Date</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="date" id="datepicker" class="form-control hasDatepicker purchase_header_input">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Reference ID</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="text" class="form-control purchase_header_input" id="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Party/Ledger Name</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <select class="form-control select_size1">
                            <option>Select</option>
                            <option>dalim Ltd</option>
                            <option>BD Fashion</option>
                            <option>Askash Paint</option>
                            <option>Arong</option>
                        </select>
                        <p class="current_balance">Curr Bal : </p>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-2 payment_div_style">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Payment Method</label>
                        <select class="form-control select_size">
                            <option>Select</option>
                            <option>Cash</option>
                            <option>Non-Cash</option>

                        </select>
                    </div>

                </div>
                <div class="col-md-4 purchase_header_input2">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Price List</label>
                        <select class="form-control select_size">
                            <option>Custom</option>
                            <option>WRP</option>
                            <option>DRP</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="" style="margin-top: 20px;margin-left: 5px;">
    <table class="table table-hover">
        <tbody>
            <tr class="">
                <th class="td_size">Item Code</th>
                <th class="td_size">Category</th>
                <th class="td_size">Size</th>
                <th class="td_size">Color</th>
                <th class="td_size">MRP</th>
                <th class="td_size">No Of Qty</th>
                <th class="td_size">Rate</th>
                <th class="td_size1">Dis%</th>
                <th class="td_size1">VAT</th>
                <th class="td_size1">MFG</th>
                <th class="td_size">EXP</th>
                <th class="td_size">Total Amount</th>
            </tr>
            <tr class="">
                <td class="td_size">
                    <select class="select2">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
                <td class="td_size">
                    <select class="select2">
                        <option>Category</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>

                </td>

                <td class="td_size">
                    <select class="select2">
                        <option>Size</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>

                </td>
                <td class="td_size">
                    <select class="select2">
                        <option>Color</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
                <td class="td_size">
                    <select class="select2">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
                <td class="td_size1">
                    <input type="text"class="size1"/>

                </td>
                <td class="td_size1">
                    <input type="text"class="size1"/>
                </td>
                <td class="td_size1">
                    <input type="text"class="size1"/>
                </td>
                <td class="td_size">
                    <select class="select2">
                        <option>Select</option>
                        <option>7.5%</option>
                        <option>15%</option>
                        <option>50%</option>
                        <option>75%</option>
                    </select>
                </td>
                <td class="td_size1">
                    <input type="text" class="size1"/>
                </td>
                <td class="td_size1">
                    <input type="text" class="size1"/>
                </td>
                <td class="td_size1">
                    <input type="text" class="size1"/>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-right">
        <a href="" class="btn btn-danger btn-lg">Add</a>
    </div>
</div>
<div class="">
    <table class="table table-hover add_purchse" style="">
        <tbody>
            <tr>
                <th>Action</th>
                <th>S.No</th>
                <th >BarCode</th>
                <th >Category</th>
                <th >Item Code</th>
                <th >Size</th>
                <th >Color</th>
                <th >No Of Qty</th>
                <th >Rate</th>
                <th >Dis%</th>
                <th >VAT</th>
                <th>MFG</th>
                <th >EXP</th>
                <th >Total Amount</th>
            </tr>
            <tr>

                <td>1</td>
                <td>454656</td>
                <td>Facewash</td>
                <td>Fair & lovely</td>
                <td> 5kg </td>
                <td>--</td>
                <td>30</td>
                <td>50</td>
                <td>5%</td>
                <td>2.5%</td>
                <td>10/06/15</td>
                <td>01/01/16</td>
                <td>510</td>
                <td class="center">
                    <a class="btn btn-success" href="#">
                        <i class="fa fa-edit"></i>  
                    </a>
                    <a class="btn btn-info" href="#">
                        <i class="fa fa-trash"></i>  
                    </a>
                    <a class="btn btn-danger">
                        <input type="checkbox" class="" value="option1">
                    </a>
                </td>
            </tr>
            <tr>

                <td>1</td>
                <td>454656</td>
                <td>Facewash</td>
                <td>Fair & lovely</td>
                <td> 5kg </td>
                <td>--</td>
                <td>30</td>
                <td>50</td>
                <td>5%</td>
                <td>2.5%</td>
                <td>10/06/15</td>
                <td>01/01/16</td>
                <td>510</td>
                <td class="center">
                    <a class="btn btn-success" href="#">
                        <i class="fa fa-edit"></i>  
                    </a>
                    <a class="btn btn-info" href="#">
                        <i class="fa fa-trash"></i>  
                    </a>
                    <a class="btn btn-danger">
                        <input type="checkbox" class="" value="option1">
                    </a>
                </td>
            </tr>
            <tr>

                <td>1</td>
                <td>454656</td>
                <td>Facewash</td>
                <td>Fair & lovely</td>
                <td> 5kg </td>
                <td>--</td>
                <td>30</td>
                <td>50</td>
                <td>5%</td>
                <td>2.5%</td>
                <td>10/06/15</td>
                <td>01/01/16</td>
                <td>510</td>
                <td class="center">
                    <a class="btn btn-success" href="#">
                        <i class="fa fa-edit"></i>  
                    </a>
                    <a class="btn btn-info" href="#">
                        <i class="fa fa-trash"></i>  
                    </a>
                    <a class="btn btn-danger">
                        <input type="checkbox" class="" value="option1">
                    </a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div class="row" style="padding-top: 45px;">
    <div class="col-md-4">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Stock Available</label>
            <div class="col-sm-9">
                <textarea name="" id="" cols="30" rows="4" style="border: 1px solid black"></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Total Quantity</label>
            <div class="col-sm-9">
                <input type="text" class="form-control purchase_header_input" id="">

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <form class="form-horizontal">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Cash Discount(%)</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control purchase_header_input" id="">

                </div>
                <div class="col-sm-4 purchase_header_input2">
                    <input type="text" class="form-control purchase_header_input " id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Net Balance</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Sub Total</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Tax Amount</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Paid Amount</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Balance</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Total Amount</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control purchase_header_input" id="">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade  modal_design_stock_category" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Select Purchase Invoice Number</h4>
            </div>
            <div class="modal-body"> <form>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Show Invoice</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control purchase_header_input" id="">

                                        </div>
                                        <div class="col-sm-4 purchase_header_input2">
                                            <input type="text" class="form-control purchase_header_input ">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Net Balance</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control purchase_header_input" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table_style">
                                    <!-- On rows -->
                                    <tr>
                                        <th class="th_purchase">Invoice No</th>
                                        <th class="th_purchase">Date</th>
                                        <th class="th_purchase">Party Name</th>
                                        <th class="th_purchase">Invoice Amount</th>
                                        <th class="th_purchase">Transaction</th>
                                        <th class="th_purchase">Action</th>
                                    </tr>
                                    <!-- On cells (`td` or `th`) -->
                                    <tr>
                                        <td class="tr_purchase">123</td>
                                        <td class="tr_purchase">10/06/1995</td>
                                        <td class="tr_purchase">dalim Ltd</td>
                                        <td class="tr_purchase">3500.00</td>
                                        <td class="tr_purchase">75</td>
                                        <td class="tr_purchase">

                                            <input type="checkbox" class="text-right" value="option1">
                                            <i class="fa fa-trash sales_entry_icon"></i>
                                            <i class="fa fa-edit sales_entry_icon1"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tr_purchase">123</td>
                                        <td class="tr_purchase">10/06/1995</td>
                                        <td class="tr_purchase">dalim Ltd</td>
                                        <td class="tr_purchase">3500.00</td>
                                        <td class="tr_purchase">75</td>
                                        <td class="tr_purchase">

                                            <input type="checkbox" class="text-right" value="option1">
                                            <i class="fa fa-trash sales_entry_icon"></i>
                                            <i class="fa fa-edit sales_entry_icon1"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tr_purchase">123</td>
                                        <td class="tr_purchase">10/06/1995</td>
                                        <td class="tr_purchase">dalim Ltd</td>
                                        <td class="tr_purchase">3500.00</td>
                                        <td class="tr_purchase">75</td>
                                        <td class="tr_purchase">

                                            <input type="checkbox" class="text-right" value="option1">
                                            <i class="fa fa-trash sales_entry_icon"></i>
                                            <i class="fa fa-edit sales_entry_icon1"></i>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-4 button_color_modal">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success ">Open</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center" style="padding-top: 45px;padding-bottom: 40px;">
    <a class="btn btn-default btn-lg button_color"><i class="fa fa-print icon_style"></i> Print</a>
    <a href="<?php echo base_url(); ?>master_admin/purchase_entry/" target="_blank" class="btn btn-default btn-lg button_color"><i class="fa fa-file icon_style"></i> New</a>
    <a data-target="#exampleModal2" data-toggle="modal" class="btn btn-default btn-lg button_color"><i class="fa fa-files-o icon_style"></i> Delete</a>
    <a href="<?php echo base_url(); ?>master_admin/purchase_invoice/" class="btn btn-default btn-lg button_color"><i class="fa fa-files-o icon_style"></i> Open Invoice</a>
    <a data-target="#exampleModal2" data-toggle="modal" class="btn btn-default btn-lg button_color"><i class="fa fa-floppy-o icon_style"></i> Save</a>
</div>