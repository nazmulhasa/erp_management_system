<div class="form-horizontal" style="border: 1px solid #4a8bc2;padding-bottom: 60px;">
      <form class="form-horizontal" action="<?php echo base_url();?>customer_controll/save_customer/" method="post">
    <div class="row" style="margin: 10px;">
        <div class="entry_from">
            <h5 class="entry_from_header">
                <i class="fa fa-reorder"></i>
                &nbsp;Entry Form
            </h5>
        </div>
        <div class="col-md-6" style="margin-top: 15px;font-family:MyriadPro-Regular;font-size: 15px;">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Customer Code:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                   
                    <input type="text" readonly name="customer_code" value="<?php echo $show_customer_code;?>" class="form-control input_style_journal_entry" >
                </div>
            </div>
             <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Customer Name:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" name="customer_name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Address:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                   <textarea class="form-control" rows="2" name="address" placeholder="Customer Address"></textarea>
                </div>
            </div>
           
             <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Mobile No:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" placeholder="Customer Mobile" name="mobile">
                </div>
            </div>
             </div>
         <div class="col-md-6" style="margin-top: 15px;">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Country:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" name="country">
                </div>
            </div>
             <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Email:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" class="form-control input_style_journal_entry" name="email">
                </div>
            </div>
             
            <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal">Notes:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                   <textarea class="form-control" rows="2" name="notes" placeholder="Customer Notes"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-3 col-sm-3 col-xs-3 control-label lebel_style_jurnal"> Publication Status:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <select class="form-control input_style_journal_entry1" name="publication_status">
                        <option>Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                </div>
            </div>
            </div>
            
    </div> 
    <div class="row customer_add_footer">
        <div class="form-actions">
            <div class="col-md-12 text-center">
                <input type="submit" value="Save Customer" class="btn btn-success journal_entry_complete">
            </div>
        </div>
    </div>
</form>
</div>

