/*=============================================
=            Section comment block            =
=============================================*/
$(".photo").change(function(){
	var img=this.files[0];
	//console.log("img",img);
	if(img["type"]!=="image/jpeg" &&img["type"]!=="image/png"){
		$(".photo").val("");
		swal({
				title:"error while uploding",
				text: " image must be jpg error",
				type:"error",
				confirmButtonText: "upload"	
				});
	}
	else if(img["size"]>2048000){
				
	$(".photo").val("");
			swal({
					title:"error while uploding",
					text: " image size must less than 2mb ",
					type:"error",
					confirmButtonText: "upload"	
					});
		}
		else{
			var fileImage=new FileReader;
			fileImage.readAsDataURL(img);
			$(fileImage).on("load" , function(event){
				var rootImg = event.target.result;
				$(".previous").attr("src",rootImg);

			})


		}
})
/*=============================================
=           Edit user          =
=============================================*/

/*$(".btnedituser").click(function(){
	var iduser = $(this).attr("iduser");
	console.log("iduser",iduser );
	var data = new FormData();
 	data.append("iduser", iduser);

	
	$.ajax({
		url: "ajax/userajax.php",		
		method: "POST",
 		data: data,
 		cache: false,
 		contentType: false,
 		processData: false,
 		dataType: "json",
	sucess:function(responce){
			//$('#newname').val(responce['name']);
			console.log("responce", responce);
			
		}
	}); 

})*/

$(document).on("click", ".btnedituser", function(){

 	var iduser = $(this).attr("iduser");

 	var data = new FormData();
 	data.append("iduser", iduser);

 	$.ajax({

 		url: "ajax/userajax.php",
 		method: "POST",
 		data: data,
 		cache: false,
 		contentType: false,
 		processData: false,
 		dataType: "json",
 		success: function(responce){
 			
 			 console.log("responce", responce);

 			$("#newname").val(responce["name"]);

 			//$("#EditUser").val(responce["user"]);

 			$("#newprofile").html(responce["profile"]);

 			$("#newprofile").val(responce["profile"]);

 			$("#newpassword").val(responce["password"]);

 			$("#newphoto").val(responce["picture"]);
 			
 			if(answer["photo"] != ''){

 				$('.preview').attr('src', answer["photo"]);

 		 	}

 		}

 	});

 });

