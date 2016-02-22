

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header text-center" style="padding-top:25px;padding-bottom: 25px;">
                    <h2>Damaged Product</h2>
                </div><!-- /.box-header -->
                <div class="row">
                    <div class="col-md-2 text-center">
                        <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#exampleModal" > <i class="fa fa-plus">&nbsp;</i> Add New Category</button>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Show</label>
                            <div class="col-sm-8 col-md-7 col-xs-8">
                                <select class="form-control select_size">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 col-md-5 col-xs-4 control-label text-right">Search by name</label>
                            <div class="col-sm-8 col-md-7 col-xs-8">
                                <input type="date" id="datepicker" class="form-control hasDatepicker purchase_header_input">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.No :</th>
                                <th>Item Code</th>
                                <th>Category</th>
                                <th>Purchase Price</th>
                                <th>Quantity</th>
                                <th>Notes</th>
                                <th>EXP Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Ponds</td>
                                <td>Crime</td>
                                <td>580</td>
                                <td>30</td>
                                <td>
                                    -
                                </td>
                                <td>01/25/2016</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <div class="open-popup-link btn btn-flat bg-red delete-button" data-url="#">
                                            <i class="fa fa-remove"></i>
                                        </div>
                                        <a class=" btn btn-flat bg-blue" href="#">
                                            <i class=" fa fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Ponds</td>
                                <td>Crime</td>
                                <td>580</td>
                                <td>30</td>
                                <td>
                                    -
                                </td>
                                <td>01/25/2016</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <div class="open-popup-link btn btn-flat bg-red delete-button" data-url="#">
                                            <i class="fa fa-remove"></i>
                                        </div>
                                        <a class=" btn btn-flat bg-blue" href="#">
                                            <i class=" fa fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lux</td>
                                <td>Washing</td>
                                <td>980</td>
                                <td>20</td>
                                <td>
                                    -
                                </td>
                                <td>11/20/2015</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <div class="open-popup-link btn btn-flat bg-red delete-button" data-url="#">
                                            <i class="fa fa-remove"></i>
                                        </div>
                                        <a class=" btn btn-flat bg-blue" href="#">
                                            <i class=" fa fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<div class="text-center">
    <nav>
        <ul class="pagination pagination-lg">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="modal fade  modal_design_stock_category" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <form>  
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="exampleModalLabel">New Category</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-5 control-label text-right">Category Name</label>
                                        <div class="col-sm-7">
                                            <select class="form-control">
                                                <option>Select Category</option>
                                                <option>Oil</option>
                                                <option>Shampoo</option>
                                                <option>Pond's</option>
                                                <option>Drink</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top:20px !important;">
                                        <label for="inputEmail3" class="col-sm-5 control-label text-right">Item Name</label>
                                        <div class="col-sm-7" >
                                            <select class="form-control">
                                                <option>Select Category</option>
                                                <option>Oil</option>
                                                <option>Shampoo</option>
                                                <option>Pond's</option>
                                                <option>Drink</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top:20px !important;">
                                        <label for="inputEmail3" class="col-sm-5 control-label text-right">Damaged Quantity :</label>
                                        <div class="col-sm-7">
                                            <input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top:20px !important;">
                                        <label for="inputEmail3" class="col-sm-5 control-label text-right">Notes :</label>
                                        <div class="col-sm-7" >
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div> 
                </div>
                <div class="modal-footer">
                    <div class="row modal_button text-center">
                        <div class="col-md-6 col-md-offset-4 button_color_modal">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Reset</button>
                            <button type="button" class="btn btn-success ">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>



