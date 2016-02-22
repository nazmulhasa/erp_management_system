<h2 class="text-center">Create Ledger Account</h2>
<div class="ledger_account_style">
    
    <form class="form-horizontal">
        <div class="row ">
            <div class="col-md-12">
                <div class="col-md-7">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Ledger Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Ledger Type</label>
                        <div class="col-sm-7">
                            <select class="form-control ledger_select_2">
                                <option>Select Type</option>
                                <option>Bank Account</option>
                                <option>Asset</option>
                                <option>Owner</option>
                                <option>Personal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Opening Balance</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control ledger_account_input" required id="inputEmail3">

                        </div>
                        <select class="col-sm-3 ledger_select">
                            <option>Dr</option>
                            <option>Cr</option>
                        </select>
                    </div>




                </div>
                <div class="col-md-5">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>asset/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <br><span class="hidden-xs">Alexander Pierce</span>

                    </a>
                    <input type="file"/>
                </div>


            </div>
        </div> 
        <div class="row ledger_account_style_buttom">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3 class="address_header text-center">Address Details</h3>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Street</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">City</label>
                        <div class="col-sm-7">
                            <select class="form-control ledger_select_2">
                                <option>Select Country</option>
                                <option>America</option>
                                <option>Australia</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Nepal</option>
                                <option>China</option>
                                <option>Iraq</option>
                                <option>Iran</option>
                                <option>Russia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">State :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Zip Code :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Phone No :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Mobile Number :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email Address :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    
                    <h3 class="address_header text-center">Account Details</h3>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">TIN No :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Sales Tax No :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Credit Limit :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control ledger_account_input" value="0">
                        </div>
                    </div>
                   <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Note :</label>
                        <div class="col-sm-7">
                           <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <div class="text-center" style="padding-top: 45px;padding-bottom: 40px;">
    <a href="#" class="btn btn-default btn-lg button_color"><i class="fa fa-files-o icon_style"></i> Reset</a>
    <a href="#" class="btn btn-default btn-lg button_color"><i class="fa fa-floppy-o icon_style"></i> Save</a>
</div>
    </form>
</div>