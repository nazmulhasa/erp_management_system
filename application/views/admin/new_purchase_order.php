<div class="col-md-12 text-center order_header_style">
    <h1 >New Purchase Order</h1>
</div>
<div class="row purchase_header1">

    <div class="col-md-5 col-md-offset-1">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Supplier/Ledger Name</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <select class="form-control purchase_order_select">
                            <option>Supplier/Ledger Name</option>
                            <option>dalim Ltd</option>
                            <option>BD Fashion</option>
                            <option>Askash Paint</option>
                            <option>Arong</option>
                        </select>
                        <p class="current_balance">


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Purchase Order</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="date" id="datepicker" class="form-control hasDatepicker purchase_order_input">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Reference ID</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="text" class="form-control purchase_order_input">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Posting Date</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="date" id="datepicker" class="form-control hasDatepicker purchase_order_input">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Delivery Date</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <input type="text" class="form-control purchase_order_input">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Payment Method</label>
                    <div class="col-sm-8 col-md-7 col-xs-8">
                        <select class="form-control purchase_order_select">
                            <option>Select</option>
                            <option>Cash</option>
                            <option>Non-Cash</option>
                            <option>B-Kash</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-hover" style="">
            <tbody>
                <tr class="">
                    <th class="td_size">Item Code</th>
                    <th class="td_size">Size</th>
                    <th class="td_size">Color</th>
                    <th class="td_size">Account</th>
                    <th class="td_size">No Of Qty</th>
                    <th class="td_size">Rate</th>
                    <th class="td_size1">TAX</th>
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
                            <option>Account</option>
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

                </tr>



            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-8">

        <a href="" type="button" class="btn btn-primary btn-lg btn-block">Order More</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-5 col-sm-offset-1">
        <div class="dataTables_length" id="example1_length">
            <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries</label>
        </div></div>
    <div class="col-sm-5">
        <div id="example1_filter" class="dataTables_filter">
            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
        </div>
    </div>
</div>
<form class="form-horizontal">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <table class="table table-hover table-bordered add_purchse" style="">
                <tbody>
                    <tr>
                        <th>Action</th>
                        <th>S.No</th>
                        <th>Item Code</th>
                        <th >Size</th>
                        <th >Color</th>
                        <th >Dalim inc</th>
                        <th >No Of Qty</th>
                        <th >Rate</th>
                        <th >TAX</th>
                        <th >Total Amount</th>
                    </tr>
                    <tr>

                        <td>1</td>
                        <td>Fair & lovely</td>
                        <td> 75g</td>
                        <td>red</td>
                        <th >Dalim inc</th>
                        <td>30</td>
                        <td>5000</td>
                        <td>277</td>
                        <td>28978</td>
                        <td class="center">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                        <td>Fair & lovely</td>
                        <td> 75g</td>
                        <td>red</td>
                        <th >Dalim inc</th>
                        <td>30</td>
                        <td>5000</td>
                        <td>277</td>
                        <td>28978</td>
                        <td class="center">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                        <td>Fair & lovely</td>
                        <td> 75g</td>
                        <td>red</td>
                        <th >Dalim inc</th>
                        <td>30</td>
                        <td>5000</td>
                        <td>277</td>
                        <td>28978</td>
                        <td class="center">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                        <td>Fair & lovely</td>
                        <td> 75g</td>
                        <td>red</td>
                        <th >Dalim inc</th>
                        <td>30</td>
                        <td>5000</td>
                        <td>277</td>
                        <td>28978</td>
                        <td class="center">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
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
    </div>
    <div class="row" style="padding-top: 45px;">

        <div class="col-md-3 col-md-offset-4">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Total Quantity</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control purchase_header_input" id="">

                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Sub Total</label>
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

        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <input type="submit" class="btn btn-success btn-lg btn-block" value="Save Purchase Order!!">
        </div>
    </div>
</form>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>



        </div>
    </div>
</div>

