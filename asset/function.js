var base_url= $("#base_url").val();
$("#purchase_add_product").on('submit',(function(e){
	e.preventDefault();
	console.log(base_url);
	$.ajax({
	  url:base_url+"purchase_controll/save_purchase_entry",
	  type: "POST",
	  data: $("#purchase_add_product").serialize(),
	  contentType:  "application/x-www-form-urlencoded",
	  cache: false,
	  success: function(data)
	  {

	  	$('tbody').append('<tr><td>'+$('#purchase_id').val()+'</td><td>'+$('#refference_id').val()+'</td><td>'+$('#purchase_id').val()+'</td><td>7</td><td>'+$('#purchase_id').val()+'</td><td><a href="http://localhost/management/purchase_controll/delete_purchase_display_item/202/1258/2010-11-16/1002" class="btn btn-danger btn_padding_size"><i class="fa fa-trash">Delete</i></a></td></tr>');

	   // alert('saved successfully');
	  }
	});
}));