<div class="row" style="margin: 22px 0px 0px 0px;border: 1px solid #4a8bc2;padding-bottom: 60px;">
    <div class="entry_from">
        <h5 class="entry_from_header">
            <i class="fa fa-reorder"></i>
            &nbsp;Item List
        </h5>
    </div>
   
    <div class="row" style="margin: 10px;">
        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
            <div class="form-group text-left">
                <div class="col-sm-3 col-md-3 col-xs-3">
                    <select class="form-control select_size"style="margin-left: -24px !important">
                        <option>Select</option>
                        <option>10</option>
                        <option>25</option>

                    </select>
                </div>
                <label for="inputPassword3" class="col-sm-4 col-md-4 col-xs-4 control-label text-left">records per page:</label>

            </div> 
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">

            <div class="form-group text-right">
                <label for="inputEmail3" class="col-md-7 col-sm-7 col-xs-7 control-label"> Search:</label>
                <div class="col-sm-5 col-md-5 col-xs-5">
                    <input type="text" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12" style="margin-top: 10px;">
        <table class="table table-bordered table-striped responsive text-center">

            <thead style="background: #b3d9ff" >
                <tr>
                    <th>Sales Return No</th>
                    <th>Sales Return Date</th>
                    <th>Customer</th>
                    <th>Total Qty</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($show_sales_return_list):
                     foreach ($show_sales_return_list as $show_sales_return_value):
                        ?>
                        <tr>
                            <td>
                              <a href="#">  <?php echo $show_sales_return_value->sales_return_no ?> </a></td>
                            <td><?php echo $show_sales_return_value->sales_return_date ?> </td>
                            <td><?php echo $show_sales_return_value->select_customer ?></td>
                            <td><?php echo $show_sales_return_value->quantity; ?></td>
                            <td><?php echo $show_sales_return_value->price_per_unit ?></td>
                            <td class="actions center ">
                                <a href="" class="btn btn-edit bg-black btn_padding_size">
                                    <i class="fa fa-edit"></i> Edit</a>
                                <a onclick="return confirm('Are You Sure Want to Delete?');" href="<?php echo base_url(); ?>purchase_controll/delete_sales_return_list_item/<?php echo $show_sales_return_value->sales_return_id ?>" style="" class="btn btn-danger del btn_padding_size">
                                    <i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                endif;
                ?>


            </tbody>
            <tfoot class="footer_pagination">
                <tr>
                    <th colspan="3"  rowspan="1">
            <p class="text-left"> Showing 1 to 3 of 3 entries </p>
            </th>
            <th colspan="3"  rowspan="1" >
            <nav class="text-right" >
                <ul class="pagination sales_list_pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true"> &laquo;&nbsp;Previous</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>

                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">next &raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            </th>

            </tr>
            </tfoot>
        </table>
    </div>

</div> 