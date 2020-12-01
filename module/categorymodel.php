<?php

require_once('conn.php');

class  categorymodel{
	static public function mdlCreateData($table,$data){
 $ststmt = conn::conector()->prepare("insert into $table (category) values (:category)");
 $ststmt->bindParam(":category", $data, PDO::PARAM_STR);
 if($ststmt->execute()){
 	return "ok";

 }else{
 	return "error";
 }
$ststmt->close();
$ststmt = null;	
	}


	static public function  mdlShowCategory($table, $item, $value){

	if($item != null){
	 $ststmt = conn::conector()->prepare("SELECT * from $table WHERE $item = :$item");
 	$ststmt->bindParam(":".$item, $value, PDO::PARAM_STR);
 	$ststmt->execute();
 	return $ststmt->fetch();


 }else{
		$ststmt = conn::conector()->prepare(" SELECT * From $table ");

	$ststmt->execute();
 		return $ststmt->fetchAll();
 	}
	$ststmt->close();
	$ststmt = null;	
	}


static public function mdlEditCategory($table, $data){
 $ststmt = conn::conector()->prepare("UPDATE $table SET category = :category where id =:id");
 $ststmt->bindParam(":category", $data["category"], PDO::PARAM_STR);
 $ststmt->bindParam(":id", $data["id"], PDO::PARAM_STR);

 if($ststmt->execute()){
 	return "ok";

 }else{
 	return "error";

 }

$ststmt->close();
$ststmt = null;	
	
	}

}
	



