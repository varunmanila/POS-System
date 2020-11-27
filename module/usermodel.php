<?php
require_once "conn.php";

class usermodel{
	static public  function mdlShowUser($table, $item, $val){
		
		if($item != null){

		$stsmt=conn::conector()->prepare("SELECT * from $table where $item= :$item");
		$stsmt->bindParam(":".$item,$val,PDO::PARAM_STR);
		$stsmt->execute();
		return $stsmt->fetch();
		}
		else{
			$stsmt=conn::conector()->prepare("SELECT * from $table ");
		
		$stsmt->execute();
		return $stsmt->fetchAll();
		}
		$stsmt-> close();
		$stsmt = null;

		
	}
	static public function addUser($table,$data){

	$stsmt=conn::conector()->prepare(" INSERT  INTO $table (name, email,password, profile,picture )  values (:name,:email,:password,:profile,:picture)");

	$stsmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
	$stsmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
	$stsmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
	$stsmt->bindParam(":profile", $data["profile"],  PDO::PARAM_STR);
	$stsmt->bindParam(":picture", $data["picture"],  PDO::PARAM_STR);
	
	if($stsmt->execute()){
		return "ok";
	}else{
		return "error"; 
		//return $stsmt->fetch();
	}
	$stsmt-> close();
	$stsmt = null;
		//return $data;

	}
	static public function mdlEditUser($table, $data){
		$stsmt=conn::conector()->prepare(" UPDATE $table SET name = :name, profile = :profile, picture = :picture,  password = :password   WHERE email = :email");

	$stsmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
	$stsmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
	$stsmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
	$stsmt->bindParam(":profile", $data["profile"],  PDO::PARAM_STR);
	$stsmt->bindParam(":picture", $data["picture"],  PDO::PARAM_STR);
	

	if($stsmt->execute()){
		return "ok";
	}else{
		return "error"; 
		 
	}
	$stsmt-> close();
	$stsmt = null;

	}


	static public function MdlActivateUser($table, $item1, $value1, $item2, $value2){
 
    $stsmt=conn::conector()->prepare(" UPDATE $table SET $item1 = :$item1 WHERE
     $item2 = :$item2");

    $stsmt->bindParam(":".$item1, $value1, PDO::PARAM_STR);
	$stsmt->bindParam(":".$item2, $value2, PDO::PARAM_STR);
	
	if($stsmt->execute()){

		return "ok";
	}
	else{
		return "error";  
	}
	$stsmt-> close();
	$stsmt = null;

	
	}
	static public function mdlDeleteUser($table, $data){
		$stsmt=conn::conector()->prepare(" DELETE  from $table where id=:id ");
		$stsmt->bindParam(":id", $data, PDO::PARAM_STR);
		if($stsmt->execute()){

		return "ok";
	}
	else{
		return "error";  
	}
	$stsmt-> close();
	$stsmt = null;

	
	}
	

}