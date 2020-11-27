
<header class=" sidebar-header ">
    <!-- Brand Logo -->
   
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
    

    <!-- SEARCH FORM -->  
  
    
      <ul class="navbar-nav ml-auto ">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       
    
      
    

 <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
    				<span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
            <?php 

            if($_SESSION['picture']){
              echo ' <img src="'.$_SESSION['picture'].'" class="img-sm  user-img">';

            }
            else{
               echo ' <img src="views/img/logo/user.png" class="img-sm  user-img">';
            }
             ?>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="logout" class="nav-link">
         <p>  <i class="fas fa-sign-out-alt"></i>Logout
         </p></a>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          
        </div>
      </li>

    <ul class="dropdown-menu">
    	<li class="user-body">
    		<div class="pull-right">
    			<a href="#" class="btn btn-flat btn-defalt"></a>
    		</div>
    	</li>
    </ul>
    
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="Home" class="brand-link">
      <img src="views/img/logo/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE</span>
    </a>
      <div class="dropdown-divider"></div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="Home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i> 
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
              <li class="nav-item">
                <a href="product" class="nav-link">
                 <i class="nav-icon fas fa-home"></i>
                  <p>Products
                   <i class="right fas fa-angle-left"></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="clint" class="nav-link">
                 <i class="nav-icon fas fa-credit-cardaa"></i>
                  <p>Clients
                   <i class="right fas fa-angle-left"></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>User
                   <i class="right fas fa-angle-left"></i></p>
                </a>

              </li>
              <li  class="nav-item">
                <a href="category" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              </li>
             
              <li class="nav-item has-treeview">
                 
            <a href="sales" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage-sales" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create-sales" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creat sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
              
            </ul>
             <li class="nav-item has-treeview">
            <a href="product" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
               <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
            </ul>
          </li>
      </ul>
  </nav>
  	
  </aside>

</header>
 
