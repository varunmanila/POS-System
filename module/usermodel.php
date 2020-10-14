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

}