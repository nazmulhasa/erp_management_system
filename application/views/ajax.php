
<form method="POST" name="myForm1" id="myForm1" action="<?php echo base_url();?>ajax_controll/insert_into_info/" enctype="multipart/form-data" >
Email: <input type="text" name="email" id="email">
Question: <input type="text" name="qText" id="qText">
<input id="submitbutton" type="submit">
</form>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    //callback handler for form submit
    $("#myForm1").submit(function(e) {
        // prevent default submit behaviour
        e.preventDefault();
        // serialize total form data
        var postData = $(this).serializeArray();
 
        // get form action url
        var formActionURL = $(this).attr("action");
        $("#submit").val('please wait...');
        // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request
        $.ajax({
            url: formActionURL,
            type: "POST",
            data: postData,
         }).done(function(data) {
            alert("success");
         }).fail(function() {
            alert("error");
         }).always(function() {
            $("#submit").val('submit');
        });
    });
</script>
