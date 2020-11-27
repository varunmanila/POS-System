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

 			$("#newemail").val(responce["email"]);

 			$("#editprofile").html(responce["profile"]);

 				$("#editprofile").val(responce["profile"]);

 			$("#newpassword1").val(responce["password"]);

 			$("#fotoactual").val(responce["picture"]);
 			
 			if(responce["picture"] != ''){

 				$('.preview').attr('src' , responce["picture"]);

 		 	}

 		}

 	});

 });

/**
 *
 * Activate and de activate account
 *
 */
 /**$(".activate").click(function(){
 	var iduser = $(this).attr("iduser");
 	var statususer = $(this).attr("statususer");
 	var data = new FormData();
 	data.append("activateId", iduser);
 	data.append("statususerId", statususer);

 	$.ajax({
				url: "ajax/userajax.php",
				method: "POST",
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(responce){

 		}
 	 	
 	 })

 	if(statususerId ==0){
 		$(this).removeClass(" btn-success");
 		$(this).addClass(" btn-danger");
 		$(this).html(" Deactivated");
 		$(this).attr(" statususer",1);

 	}else{
 		$(this).addClass(" btn-success");
 		$(this).removeClass(" btn-danger");
 		
 		$(this).html(" Activated");
 		$(this).attr(" statususer",0);
 	}


 })
  */
 $(document).on("click", ".activate", function(){

 	var iduser = $(this).attr("iduser");
 	var statususer = $(this).attr("statususer");
 	var data = new FormData();
 	data.append("activateId", iduser);
 	data.append("statususer", statususer);

 	$.ajax({
				url: "ajax/userajax.php",
				method: "POST",
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(responce){


 		}
 	 	

 	});
 	if(statususer == 0){
 		$(this).removeClass('btn-success');
 		$(this).addClass( 'btn-danger');
 		$(this).html( 'Inactive');
 		$(this).attr('activate',1);

 	}else{
 		$(this).addClass('btn-success');
 		$(this).removeClass('btn-danger');
 		$(this).html('Activated');
 		$(this).attr('activate',0);
 	}


 });


/*=============================================
=     check email is exist or not           =
=============================================*/

/*** 
$("#newemail").change(function(){
	var email=$(this).val();
	var data = new FormData();
	data.append("email", email);
	$.ajax({
				url: "ajax/userajax.php",
				method: "POST",
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(responce){
					console.log('responce',responce);


 		}
 	});
}); 
**/

$("#email").change(function(){

	$(".alert").remove();

	var email = $(this).val();

	var data = new FormData();
 	data.append("email", email);

  	$.ajax({

	  url:"ajax/userajax.php",
	  method: "POST",
	  data: data,
	  cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(responce){ 

      	// console.log("responce", responce);
      	if(responce){
      		$('#email').parent().after('<div class="alert alert-warning">This user already exist</div>');

      		$('#email').val("");
      	}

      

      }

    });

});

 /*=============================================
 =          Delete User           =
 =============================================*/
 
$(".btnDeleteUser").click(function(){
	id= $(this).attr(id);
	picture= $(this).attr(picture);
	name=$(this).attr(name);
	 swal({
		title:'Are you shure you want to delete the user',
		text:' if you not cancel ',
		type:'warning',
		showCancelButton:true,
		confirmButtonColor:'#3085d6',
		cancelButtonText:'Cancel',
		confirmButtonTest:'Yes confirm'

	}).then(function(result){
		if(result.value){
			window.location ="index.php?root="+id+"&name="+name+"&picture="+picture;
		}
		

	})
})

