
  <div class="lg" style="text-align: center;display: flex; justify-content: center;"> 
<div class="login-box">
  
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
     <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
     </div>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email"  required=" required" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" required="required" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-sm-5">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <?php

        $login= new usercontroller();
        $login->ctrUserLogin();
        ?>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
