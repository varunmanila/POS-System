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
	
}
if(isset($_POST["iduser"])){
	$edit = new ajaxUser();
	$edit -> iduser = $_POST["iduser"];
	$edit -> userajax();

}

