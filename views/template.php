<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POS SYSTEM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon"  href="views/img/logo/AdminLTELogo.png">

 <!-- =============================================
  =           css section          =
  =============================================*/-->

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
  <?php

  if (isset($_SESSION['beginSession']) && ($_SESSION['beginSession'])=="ok") {



   echo  '<div class="wrapper">';

  
      include 'model/header.php';

      if(isset($_GET['root'])){
        if($_GET["root"]=="Home" ||
        $_GET["root"]=="category" ||
        $_GET["root"]=="sales" || 
        $_GET["root"]=="report" || 
        $_GET["root"]=="user"||
        $_GET["root"]=="create-sales" || 
        $_GET["root"]=="product"||
        $_GET["root"]=="clint"|| 
        $_GET["root"]=="logout")
        {

          include "model/".$_GET["root"].".php";

        }
        else {
        include 'model/404.php';
          }
        }
      else{
        include 'model/Home.php';
          }

      //include 'model/Home.php';
      include 'model/footer.php';


      echo '</div>';
      }
      else{
         include 'model/login.php';

      }

        ?>


</div>
<!-- ./wrapper -->
 <!-- =============================================
  =          JS section          =
  =============================================*/-->
<!-- jQuery -->


<script src="views/plugins/jquery/jquery.min.js"></script>
<script src="views/dist/js/adminlte.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>
<script src="views/template.js"></script>

<script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"></script>



<script type="text/javascript" src="views/sweetalert.js" ></script>
<script type="text/javascript"  src="views/users.js" ></script>
<script type="text/javascript"  src="views/category.js" ></script>

</body>
</html>
