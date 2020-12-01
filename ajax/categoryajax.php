<?php
require_once "../controloder/categorycontroller.php"; 
require_once "../module/categorymodel.php";
class AjaxCategories{
	public $categoryId;
	 public function ajaxEditcategory(){
	 	$item = "id";
	 	$value = $this->categoryId;
	 	$responce = categorycontroller::ctrShowCategories($item, $value);
	 	echo json_encode($responce);
	}

}
if(isset($_POST['categoryId'])){
  $edit = new AjaxCategories();
  $edit -> categoryId = $_POST['categoryId'];
  $edit -> ajaxEditcategory();
}
