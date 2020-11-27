<?php
class categorycontroller{

	static public function ctrcreateCategory(){
		if(isset($_POST["category_name"])){
			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["category_name"])){

				$table="category";
				$data =$_POST["category_name"];
				$request = categorymodel::mdlCreateData($table,$data);
				if($responce =="ok"){
					echo '<script>
				swal({
					type: "Success",
					title: "Successfully Created",
					ShowConfirmationButton: true,
					confirmButtonText: Save,
					closeOnConfirm: false,
					}).then((result)=>{
						if(result.value){
							window.location = "categories";
						}
						})


				
				</script>';

				}




			}
			else{
				echo '<script>
				swal({
					type: "error",
					title: "Please Enter Valid Category",
					ShowConfirmationButton: true,
					confirmButtonText: Save,
					closeOnConfirm: false,
					}).then((result)=>{
						if(result.value){
							window.location = "categories";
						}
						})


				
				</script>';
			}

		}
	}



	static public function ctrShowCategories($item, $value){

		$table ="category";
		$responce = categorymodel::mdlShowCategory($table, $item, $value);
		return $responce;
	}
}
