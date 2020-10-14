<?php



require_once 'controloder/pagecontroloder.php';
require_once 'controloder/clintcontroller.php';
require_once 'controloder/categorycontroller.php';
require_once 'controloder/productcontroller.php';
require_once 'controloder/usercontroller.php';
require_once 'controloder/salescontroller.php';

require_once 'module/clintsmodel.php';
require_once 'module/productmodel.php';
require_once 'module/categorymodel.php';
require_once 'module/salesmodel.php';
require_once 'module/usermodel.php';

$plantilla=new ControllerPageloder();
$plantilla->ctrPageloder();

