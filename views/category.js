$(document).on("click", ".btnEditCategory", function(){
	var categoryId = $(this).attr("categoryId");
	var data = new FormData();
	data.append("categoryId", categoryId);
	$.ajax({
			url:"ajax/categoryajax.php",
			method: "POST",
 			data: data,
 			cache: false,
 			contentType: false,
 			processData: false,
 			dataType: "json",
			success:function(responce){
				$("#edit_category").val(responce["category"]);
				$("#idcategory").val(responce["id"]);
				///console.log("responce", responce);
			}
		});

});