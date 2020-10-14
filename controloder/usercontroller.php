<?php
class usercontroller{

	static public function ctrUserLogin(){

		if(isset($_POST['email'])){
		

			//if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST['email']) &&
			// preg_match('/^[a-zA-Z0-9 ]+$/', $_POST['password']) ){
			 	$table = "users";
				$item = "email";
				$val = $_POST['email'];
				$responce = usermodel::mdlShowUser($table ,$item,$val);
				$cript = crypt($_POST['password'], 'usesomesillystringforsalt');
				//var_dump($responce['user']);
				
				if($responce['email']== $_POST['email'] && $responce['password'] == $cript){
					$_SESSION['beginSession']="ok";
					$_SESSION['id']=$responce['id'];
					$_SESSION['email']=$responce['email'];
					$_SESSION['name']=$responce['name'];
					$_SESSION['user']=$responce['user'];
					$_SESSION['picture']=$responce['picture'];
					$_SESSION['profile']=$responce['profile'];
					//echo $_SESSION['beginSession'];

					//echo'<br><div class="alert alert-success">loged In</div>';
					echo '<script>
						window.location= "Home";
					</script>';
					
				}
				else{
					echo'<br><div class="alert alert-danger">Error while Logging</div>';
				}

			//}
		}
	}

	static public function createdata(){
		if(isset($_POST['profile'])){
			if(!empty($_POST['password']) ){
				if(isset($_FILES['photo']['tmp_name'])){

					list($width,$height)= getimagesize($_FILES["photo"]["tmp_name"]);
					$root="";
					// var_dump(getimagesize($_FILES["photo"]["tmp_name"]));
					$newWidth=500;
					$newHeight=500;
					$directories="views/img/user/".$_POST['email'];
					mkdir($directories,0755);
					if ($_FILES['photo']['type']== "image/jpeg") {
						$num=mt_rand(000,999);
						$root="views/img/user/".$_POST['email']."/".$num.".jpeg";
						$origin=imagecreatefromjpeg($_FILES["photo"]["tmp_name"]);
						$destination=imagecreatetruecolor($newWidth, $newHeight);
						imagecopyresized($destination, $origin, 0, 0,0, 0,$newWidth, $newHeight,$width, $height);
						imagejpeg($destination,$root);	
					
					}
					if ($_FILES['photo']['type']== "image/png") {
						$num=mt_rand(000,999);
						$root="views/img/user/".$_POST['email']."/".$num.".png";
						$origin=imagecreatefrompng($_FILES["photo"]["tmp_name"]);
						$destination=imagecreatetruecolor($newWidth, $newHeight);
						imagecopyresized($destination, $origin, 0, 0,0, 0,$newWidth, $newHeight,$width, $height);
						imagepng($destination,$root);	
					
					}
				}


				$table = "users";
				$encript=crypt($_POST["password"], 'usesomesillystringforsalt');
				$data = array('name' => $_POST["name"],
			'email' => $_POST["email"],
				'password' => $encript,
				'profile' => $_POST["profile"],
				'picture' => $root);

			 $responce=usermodel::addUser($table,$data);
			 //var_dump($responce);
			// echo $data;
				 	if($responce == "ok"){
			 	echo '<script language=javascript>
						
						swal({
						type: "success",
							title: "¡User added succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"

						}).then(function(result){

							if(result.value){

								window.location = "users";
							}

						});
						
			</script>';
				 }
			 else{
				 //	echo $responce;
				 	echo '<script>
					alert("failed");
		</script>';
				 }

			}
			else{
			
				echo '<script>
				alert("failed please enter ");
				</script>';

			}
		}
	}
	/**
	 *
	 * Block comment <!-- select user -->
	 *
	 */
	static public function selectuser($item, $val){
			
			$table = "users";

			$responce = usermodel::mdlShowUser($table, $item, $val);
			
			return $responce;

	}
	

	

}