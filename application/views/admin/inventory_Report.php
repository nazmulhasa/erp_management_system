<form class="form-horizontal">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Select Items :</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <select class="form-control">
                        <option>ITEM-AAA</option>
                        <option>ITEM-BBB</option>
                        <option>hp inspiration 310</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Start Date :</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-sm-3 col-xs-3 control-label">Report Type :</label>
                <div class="col-sm-8 col-sm-8 col-xs-8">
                    <select class="form-control">
                        <option>General HTML</option>
                        <option>Pdf</option>
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
                <a href="<?php echo base_url(); ?>report_controll/show_inventory_Report/" type="submit" class="btn btn-success">Show Report</a>
                <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>