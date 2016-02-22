<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
  });
  </script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

<div class="row"style="padding-top: 40px;">
    <div class="col-md-8 col-md-offset-1">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label text-right">Show Invoice With date &nbsp; To</label>
                    <div class="col-sm-3">
                        <input type="date" id="datepicker">
                    </div>
                    <label for="inputEmail3" class="col-sm-1 control-label text-right">From</label>
                    <div class="col-sm-3">
                        <input type="date" id="datepicker1">
                    </div>
                </div>
            </div>
        </div>
        <div class="row"style="padding-top: 30px;">
            <div class="col-md-6" >
                <label for="inputEmail3" class="col-sm-6 col-sm-offset-1 control-label text-right">
                    <input type="checkbox" /> &nbsp;Show Supplier Wish</label>
                <div class="col-sm-4">
                    <select name="" id="">
                        <option value="">Search Supplier Wish</option>
                        <option value="">Assian pain's </option>
                        <option value="">bd fashion</option>
                        <option value="">bd fashion</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6" >
                <label for="inputEmail3" class="col-sm-5 control-label">
                   Search By Invoice </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control purchase_header_input3">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <a href=""class="btn btn-lg button_color"><i class="fa fa-search" style="font-size: 30px;margin-bottom: 5px;"></i> Show</a>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-hover add_purchse" style="">
            <tbody>
                <tr>
                    <th>Action</th>
                    <th >Invoice No</th>
                    <th >Date</th>
                    <th >Supplier Name</th>
                    <th >Purchase Amount</th>
                    <th >Trans Id</th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="text-right" value="option1">
                        <i class="fa fa-trash sales_entry_icon"></i>
                        <i class="fa fa-edit sales_entry_icon1"></i>
                    </td>
                    <td>23789</td>
                    <td>23/02/15</td>
                    <td>Gangbang</td>
                    <td>51986</td>
                    <td>5765</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="text-right" value="option1">
                        <i class="fa fa-trash sales_entry_icon"></i>
                        <i class="fa fa-edit sales_entry_icon1"></i>
                    </td>
                    <td>89876</td>
                    <td>210/04/15</td>
                    <td>Shopno</td>
                    <td>6540</td>
                    <td>7895</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="text-right" value="option1">
                        <i class="fa fa-trash sales_entry_icon"></i>
                        <i class="fa fa-edit sales_entry_icon1"></i>
                    </td>
                    <td>454656</td>
                    <td>10/06/15</td>
                    <td>Assian print's</td>
                    <td>8765</td>
                    <td>66</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="text-right" value="option1">
                        <i class="fa fa-trash sales_entry_icon"></i>
                        <i class="fa fa-edit sales_entry_icon1"></i>
                    </td>
                    <td>44567</td>
                    <td>18/09/14</td>
                    <td>Bd fasion</td>
                    <td>4790</td>
                    <td>35</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="text-center foter_icon">
    <a href=""class="btn btn-primary btn-lg"><i class="fa fa-times-circle-o "></i> Cancel</a>
    <a href="<?php echo base_url(); ?>master_admin/sales_invoice_details/"class="btn btn-warning btn-lg"><i class="fa fa-files-o "></i> Open</a>
</div>