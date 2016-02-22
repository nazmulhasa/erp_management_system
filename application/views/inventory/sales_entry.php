<div class="form-horizontal" style="border: 1px solid #4a8bc2;padding-bottom: 60px;">
<div class="row" style="margin: 10px;">
        <div class="entry_from">
            <h5 class="entry_from_header">
                <i class="fa fa-reorder"></i>
                &nbsp;Entry Form

            </h5>

        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>sales_controll/save_sales_entry/">
         <div class="col-md-6" style="margin-top: 15px;">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Sales No:</label>
                <div class="col-sm-5 col-md-5 col-xs-5">
                <?php
                        if (isset($input_value)) {
                            ?>
                            <input type="text" readonly value="<?php echo $input_value + 1 ?>" name="sales_no" class="form-control input_style_journal_entry">
                            <?php
                        } if (isset($input_value1)) {
                            ?>
                            <input type="text" disabled value="<?php echo $input_value1 ?>"class="form-control input_style_journal_entry">
                            <input type="hidden" value="<?php echo $input_value1 ?>" name="sales_no">

                        <?php }
                        ?>
               </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Select Item:</label>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <select required class="form-control input_style_journal_entry1" name="select_item">
                        <option value="2">oil</option>
                        <option value="1">drink</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 lebel_style_jurnal control-label">Quantity:</label>
                <div required class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" id="formGroupInputSmall" name="quantity" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Price per Unit:</label>
                <div required class="col-sm-7 col-md-7 col-xs-7">
                    <input type="text" name="price_per_unit" class="form-control input_style_journal_entry" id="inputPassword3">
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 15px;">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Sales Date:</label>
                <div class="col-sm-5 col-md-5 col-xs-5">
                  <?php
                     if (isset($show_sales_date)) {?>
          <input type = "text" disabled value="<?php echo $show_sales_date;?>" class = "form-control input_style_journal_entry" name = "sales_date">
          <input type = "hidden" value="<?php echo $show_sales_date;?>" name = "sales_date">
                  <?php }
                     else { ?>
                     <input type = "text" required class = "form-control input_style_journal_entry" name = "sales_date">
                  <?php } ?>
                   </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-4 control-label lebel_style_jurnal"> Select Customer:</label>
                <div class="col-sm-6 col-md-6 col-xs-6">
                       <?php
                        if (isset($show_customer)) {
                            ?>
                            <select required class = "form-control input_style_journal_entry1" name ="select_customer">
                                <?php
                                foreach ($show_customer as $customer_value) {
                                    ?>
                                    <option value ="<?php echo $customer_value->customer_code; ?>">
                                        <?php echo $customer_value->customer_code . " - " . $customer_value->customer_name; ?>

                                    </option>
                                <?php } ?>
                            </select>
                        <?php } ?>
                        <?php
                        if (isset($show_customer1)) {
                            ?>
                            <select disabled  class = "form-control input_style_journal_entry1" name ="select_customer">
                                <?php
                              //  foreach ($show_customer1 as $customer_value1) {
                                    ?>
                                    <option>
                                        <?php echo $show_customer1;?>

                                    </option>
                                <?php// } ?>
                            </select>
                        <input type="hidden" value="<?php echo $show_customer1;?>" name="select_customer" />
                        <?php } ?>
                    </div>
                  <?php
                        if (isset($show_customer)) {
                            ?>
                    <label for = "inputEmail3" style="margin-left: -25px !important;" class="col-md-2 col-sm-2 col-xs-2 text-left control-label lebel_style_jurnal">
                        <a href ="#" data-toggle="modal" data-target="#exampleModal">
                            Add New  </a></label>
                        <?php }?>
 </div>
   
      <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 col-md-4 col-xs-4 lebel_style_jurnal control-label">Notes:</label>
                <div class="col-sm-8 col-md-8 col-xs-8">
                    <textarea name="notes" class="form-control" rows="2"></textarea>
                </div>
            </div>    
           
           </div>
         
     <div class="row">
        <div class="form-actions">
            <div class="col-md-12 text-center">
                <input type="submit" value="Add Item" class="btn btn-success journal_entry_complete">
            </div>
        </div>
    </div>

</form>
   </div>
   </div>
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
                        <option>20</option>

                    </select>
                </div>
                <label for="inputPassword3" class="col-sm-4 col-md-4 col-xs-4 control-label text-left">records per page:</label>
                
            </div> 
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">

            <div class="form-group text-right">
                <label for="inputEmail3" class="col-md-7 col-sm-7 col-xs-7 control-label"> Sales No:</label>
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
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Sales Price</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                if (!empty($show_sales_entry)):
                    $total_value=0;
                    $total_qty=0;
                    foreach ($show_sales_entry as $show_value):
                        ?>
                        <tr>
                            <td><?php echo $show_value->sales_id ?></td>
                            <td><?php echo $show_value->sales_id ?></td>
                            <td>
                            <?php 

                            $qty= $show_value->quantity;
                            echo $qty; 
                              $total_qty= $total_qty + $qty;
                            ?>
                         </td>
                            <td>
                            <?php 
                              $unit_price=$show_value->price_per_unit;
                              echo $unit_price;
                             ?>
                          </td>
                            <td>
                        <?php 
                           $total=$unit_price * $qty;
                           echo $total;
                           $total_value= $total_value + $total;
                         ?>
                        </td>
                            <td>
     <a onclick="return confirm('Are You Sure Want To Delete This Data??')" class="btn btn-danger btn_padding_size" href="<?php echo base_url(); ?>purchase_controll/delete_sales_display_item/<?php echo $show_value->sales_id."/".$show_value->sales_no."/".$show_value->sales_date."/".$show_value->select_customer?>">
                                    <i class="fa fa-trash">Delete</i>  
                                </a> 
                            </td>
                        </tr>
                        <?php
                    endforeach;
                endif;
                ?>
            </tbody>
            <tfoot>
                <tr><th colspan="6"  rowspan="1">Order Totals</th></tr>
                <tr style="background: #cccccc">
                <td colspan="2" rowspan="1">&nbsp;</td>
                <td class="center" rowspan="1" colspan="1">
                   <?php 
                          if (isset( $total_qty)) {
                               echo  $total_qty;
                          }
                         ?>
                </td>
                <td rowspan="1" colspan="1"></td><td class="right" rowspan="1" colspan="1">
                      <?php 
                          if (isset( $total_value)) {
                               echo  $total_value;
                          }
                         ?>
                </td>
                <td rowspan="1" colspan="1"></td></tr>
                <tr style="background: white" class="text-right"><td class="right" colspan="4" rowspan="1"> Total Paid Amount</td><td class="right" rowspan="1" colspan="1"><input type="text" id="paid_amount" name="paid_amount"></td><td rowspan="1" colspan="1"></td></tr>
            </tfoot>

        </table>
    </div>
    <div class="form-actions">
        <div class="col-md-12 text-center">
          <a href="<?php echo base_url();?>inventory_controll/sales_list/"class="btn btn-success journal_entry_complete">Complete Sales Entry</a>
        </div>
    </div>
</div> 