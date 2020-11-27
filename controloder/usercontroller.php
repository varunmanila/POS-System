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
					if($responce['status'] == 1){
					$_SESSION['beginSession']="ok";
					$_SESSION['id']=$responce['id'];
					$_SESSION['email']=$responce['email'];
					$_SESSION['name']=$responce['name'];
					$_SESSION['user']=$responce['user'];
					$_SESSION['picture']=$responce['picture'];
					$_SESSION['profile']=$responce['profile'];
					//echo $_SESSION['beginSession'];

					//echo'<br><div class="alert alert-success">loged In</div>';

					//last login

					date_default_timezone_set('Asia/Kolkata');
					$date = date('Y-m-d-H:i:s');
					$item1 ="last_login";
					$value1=$date ;
					$item2="id";
					$value2=$responce['id'];
					$lastlogin=usermodel::MdlActivateUser($table, $item1, $value1, $item2, $value2);
					if($lastlogin =="ok")
						{
					echo '<script>
						window.location= "Home";
					</script>';}
					
					}else{
						
					echo'<br><div class="alert alert-danger">This account is deactivated please create new account</div>';

					}
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
				if(isset($_FILES['photo']['tmp_name'])&& !empty($_FILES['photo']['tmp_name'])){

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
	/**
	 *
	 * edit user
	 *
	 */
	
	public function ctredituser(){
		
		if(isset($_POST["update"])){
		
		$root=$_POST["fotoactual"];
		if(isset($_FILES['newphoto']['tmp_name'])){
		list($width,$height)= getimagesize($_FILES["newphoto"]["tmp_name"]);
		$root="";
		// var_dump(getimagesize($_FILES["photo"]["tmp_name"]));
					$newWidth=500;
					$newHeight=500;
					$directories="views/img/user/".$_POST['email'];
					if(!empty($_POST['fotoactual'])){
						unlink($_POST['fotoactual']);
					}
					else{
						mkdir($directories,0755);
					}
					
					if($_FILES['newphoto']['type']== "image/jpeg") {
						$num=mt_rand(000,999);
						$root="views/img/user/".$_POST['email']."/".$num.".jpeg";
						$origin=imagecreatefromjpeg($_FILES["newphoto"]["tmp_name"]);
						$destination=imagecreatetruecolor($newWidth, $newHeight);
						imagecopyresized($destination, $origin, 0, 0,0, 0,$newWidth, $newHeight,$width, $height);
						imagejpeg($destination,$root);	
					
					}
					if($_FILES['newphoto']['type']== "image/png") {
						$num=mt_rand(000,999);
						$root="views/img/user/".$_POST['email']."/".$num.".png";
						$origin=imagecreatefrompng($_FILES["newphoto"]["tmp_name"]);
						$destination=imagecreatetruecolor($newWidth, $newHeight);
						imagecopyresized($destination, $origin, 0, 0,0, 0,$newWidth, $newHeight,$width, $height);
						imagepng($destination,$root);	
					
					}				

					
			
			
			}
			if($_POST["newpassword"]!= ""){
				$encript=crypt($_POST["newpassword"], 'usesomesillystringforsalt');
				//$encript=$newpassword;

			}else{
				$encript=$_POST["newpassword1"];
			}

		$table = "users";
		$data = array('name' => $_POST["newname"],
					  'email' => $_POST["newemail"],
					  'password' => $encript,
					  'profile' => $_POST["newprofile"],
					  'picture' => $root);

		
			$responce = usermodel::mdlEditUser($table,  $data);
			
			if($responce == "ok"){
				echo '<script>
				alert("Success");
				</script>';

			}
			
			else{
			echo '<script language=javascript>
					alert("error while inserting");	
						
			</script>';
			
			}	
			
			
		} 
		

	

	}

static function ctrDeleteUser(){

	if(isset($_GET['id'])){

		$table='users';
		$id=$_GET['id'];
		if($_GET['picture']!=""){
			unlink($_GET['picture']);
			rmdir("views/img/users/".$_GET['picture']);
		}
		$responce= usermodel::mdlDeleteUser($table, $data);

		if($responce==ok){
			echo'<sctipt>alert("success");
			window.location =" users";
			</script>';
		}else{
			
			echo'<sctipt>
			alert("failed");
			</script>';


		}
		


	}
}

}
