<form class="form-horizontal">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Select A/C Head :</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>Assets (10)</option>
                        <option>  -- Bank Account (10.10.10.10)</option>
                        <option>Liabilities (20)</option>
                        <option>-- Current Liabilities (20.10)</option>
                        <option>-- Accounts Payable (20.10.10)</option>
                        <option>Equity (30)</option>
                        <option> Income (40)</option>
                        <option>Expense (50)</option>
                        <option>-- Finished Goods (50.30.10)</option>
                         </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Start Date :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">End Date :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>

        </div>
    </div> 
    <div class="row purchase_report_footer" style=" border-top: 1px solid #e5e5e5;padding-top: 20px;">
        <div class="form-group text-center">
            <div class="col-sm-offset-4 col-sm-4">
                <a href="<?php echo base_url(); ?>ledger/show_full_ledger/" type="submit" class="btn btn-success">Show Report</a>
                <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>
