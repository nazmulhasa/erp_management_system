<form class="form-horizontal" style="border: 1px solid #4a8bc2;padding-bottom: 60px;">
    <div class="row" style="margin: 10px;">
        <div class="entry_from">
            <h5 class="entry_from_header">
                <i class="fa fa-reorder"></i>
                &nbsp;Entry Form

            </h5>

        </div>
        <div class="col-md-6" style="margin-top: 15px;">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Journal No:</label>
                <div class="col-sm-5 col-md-5 col-xs-5">
                    <input type="text" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 lebel_style_jurnal control-label">Journal Date:</label>
                <div class="col-sm-5 col-md-5 col-xs-5">
                    <input type="text" id="formGroupInputSmall" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 col-md-4 col-xs-4 lebel_style_jurnal control-label">Description :</label>
                <div class="col-sm-8 col-md-8 col-xs-8">
                    <textarea class="form-control" rows="2"></textarea>
                </div>
            </div> 
        </div>

    </div> 
    <div class="row" style="margin:10px;">
        <div class="col-md-6">
            <h4 class="text-left">Debit Voucher</h4>
            <div class="form-group journal_div_border" style="">
                <label for="inputEmail3" class="col-md-4 col-sm-4 lebel_style_jurnal col-xs-4 control-label">
                    Select A/C Head:</label>
                <div class="col-sm-5 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-group journal_div_border1">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 lebel_style_jurnal control-label">Debit Amount:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" id="formGroupInputSmall" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-actions">
                <div class="col-md-12 text-center">
                    <input type="button" value="Add Debit" class="btn btn-success journal_entry_button" name="debit_add">
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <h4 class="text-left">Credit Voucher</h4>
            <div class="form-group journal_div_border">
                <label for="inputEmail3" class="col-md-4 col-sm-4 lebel_style_jurnal col-xs-4 control-label">
                    Select A/C Head:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-group journal_div_border1">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 lebel_style_jurnal control-label">Journal Date:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" id="formGroupInputSmall" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-actions">
                <div class="col-md-12 text-center">
                    <input type="button" value="Add Credit" class="btn btn-success journal_entry_button" name="debit_add">
                </div>
            </div>

        </div>
    </div> 

</form>

<div class="row" style="margin: 22px 0px 0px 0px;border: 1px solid #4a8bc2;padding-bottom: 60px;">
    <div class="entry_from">
        <h5 class="entry_from_header">
            <i class="fa fa-reorder"></i>
            &nbsp;Voucher List
        </h5>
    </div>
    <div class="col-md-6" style="margin-top: 15px;">
        <table class="table table-bordered table-striped responsive">
            <thead style="background: #b3d9ff">
                <tr>
                    <th class="center">Debit A/C Head</th>
                    <th class="center">Amount</th>
                    <th class="center">Memo</th>
                    <th class="center">Action</th>
                </tr>
            </thead>
            <tbody><tr>
                    <td>Assets</td>
                    <td class="center">1000</td>
                    <td class="center"></td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="fa fa-edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="fa fa-trash"></i>  
                        </a> 
                    </td>
                </tr></tbody>
            <tfoot >
                <tr>
                    <th colspan="4" class="left">&nbsp;</th>
                </tr>
                <tr style="background: #d9d9d9">
                    <th colspan="2">Total </th>
                    <th id="debit_total" class="right" colspan="2">1,000.00</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="col-md-6" style="margin-top: 15px;">
        <table class="table table-bordered table-striped responsive">
            <thead style="background: #b3d9ff">
                <tr>
                    <th class="center">Debit A/C Head</th>
                    <th class="center">Amount</th>
                    <th class="center">Memo</th>
                    <th class="center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Assets</td>
                    <td class="center">1000</td>
                    <td class="center"></td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="fa fa-edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="fa fa-trash"></i>  
                        </a>

                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4" class="left">&nbsp;</th>
                </tr>
                <tr style="background: #d9d9d9">
                    <th colspan="2">Total </th>
                    <th id="debit_total" class="right" colspan="2">1,000.00</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="form-actions">
        <div class="col-md-12 text-center">
            <input type="button" value="Complete Journal Entry" class="btn btn-success journal_entry_complete" name="debit_add">
        </div>
    </div>
</div> 