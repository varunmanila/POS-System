<?php
require_once "../controloder/usercontroller.php"; 
require_once "../module/usermodel.php";

class ajaxUser{
	public $iduser;
	public function userajax(){
		$item="id";
		$val = $this->iduser;
		$responce = usercontroller::selectuser($item, $val);
		
		
		echo json_encode($responce);

	}

	public $activateId;
	public $statususer;


	public function ajaxActivateUser(){

		$table ="users";

		$item1="status";
		$value1=$this->statususer;
		$item2="id";
		$value2=$this->activateId;
	$responce=usermodel::MdlActivateUser($table, $item1, $value1, $item2, $value2);

	}
	


	public $email;
	public function validateUser(){
		$item="email";
		$val = $this->email;
		$responce = usercontroller::selectuser($item, $val);
		
		
		echo json_encode($responce);

	}




}



if(isset($_POST["iduser"])){
	$edit = new ajaxUser();
	$edit -> iduser = $_POST["iduser"];
	$edit -> userajax();

}

/*=============================================
=            Activate user          =
=============================================*/

if(isset($_POST["activateId"])){
	$edit = new ajaxUser();
	$edit -> statususer = $_POST["statususer"];
	$edit -> activateId = $_POST["activateId"];
	
	$edit -> ajaxActivateUser();

}

if(isset($_POST['email'])){
	$edit = new ajaxUser();
	$edit -> email = $_POST["email"];
	$edit -> validateUser();

}



