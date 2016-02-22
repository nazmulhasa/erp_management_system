<form class="form-horizontal">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Select Customer:</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <select class="form-control">
                        <option>hasan</option>
                        <option>nazmul</option>
                        <option>dalim</option>
                        <option>hasan</option>
                        <option>nazmul</option>
                        <option>dalim</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Start Date :</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Report Type :</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <select class="form-control">
                        <option>General HTML</option>
                        <option>Pdf</option>
                    </select>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Select Item:</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <select class="form-control">
                        <option>Oil</option>
                        <option>Ponds</option>
                        <option>Lux</option>
                        <option>Drink</option>
                        
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-sm-3 col-xs-3 control-label">End Date</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <input type="date" class="form-control" id="inputPassword3">
                </div>
            </div>
        </div>
    </div> 
    <div class="row purchase_report_footer" style=" border-top: 1px solid #e5e5e5;padding-top: 20px;">
        <div class="form-group ">
            <div class="col-sm-offset-5 col-sm-4">
                <a href="<?php echo base_url(); ?>sales_controll/show_sales_return/" type="submit" class="btn btn-success">Show Report</a>
                <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>