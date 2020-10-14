<?php

class conn{
	 static public function conector(){
		$link= new PDO("mysql:host=localhost;dbname=pos","root","");
		$link->exec("set names UTF8");
		return $link;
	}
}