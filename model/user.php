<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Management </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalluser">
              </i> Add user
            </button>

          <div class="card-tools">
           
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

           
          <table id="example" class="table table-hover   dt-responsive">
                  <thead>
                    <tr>
                       <th>#</th>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                      <th>button</th>
                      <th>button1</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      <?php
                            $item = null;
                            $value = null;
                            $responce =usercontroller::selectuser($item,$value);
                            //var_dump($responce);
                            foreach ( $responce as $key => $value) {
                              echo'<tr>
                              <td>'.$value['id'].'</td>
                              <td>'.$value['name'].'</td>
                               <td>'.$value['email'].'</td>'; 
                              if($value["picture"] != ''){
                                echo ' <td> <img src="'.$value['picture'].'" class="img-thumbnail" width="40px"></img></td>';}
                              else{
                                 echo' <td><img src="views/img/logo/user.png" class="img-thumbnail" width="40px">
                                </td>';} 
                              echo '<td>'.$value['profile'].'</td>';
                              if($value['status']!= 0){
                                echo '<td><button class="btn btn-success btn-xs activate "iduser="'.$value['id'].'" statususer="0" >Active</button></td>';
                              }
                              else{
                                echo '<td><button class="btn btn-danger btn-xs activate " iduser="'.$value['id'].'" statususer="1">Inactive</button></td>';
                              }
                              
                            echo '<td>'.$value['last_login'].'</td>
                              <td><div class="btn-group">
                              <button class=" btn btn-info btnedituser" iduser = "'.$value['id'].'" data-toggle="modal" data-target="#editmodal">
                             <i class="fas fa-edit"></i></button>
                               <button class=" btn btn-danger btnDeleteUser"> <i class="fa fa-times" id="'.$value['id'].'" picture ="'.$value['picture'].'" user="'.$value['name'].'" ></i> </button>
                               </div></td>
                                
                              </tr>';
                            }
                      ?>
                 

                  </tbody>
                </table>
         
        <!-- /.card-body -->
       

    <!-- /.content -->
  </div>


<!-- Modal -->
<div class="modal fade" id="modalluser" tabindex="-1" role="dialog" aria-labelledby="modalluser"
  aria-hidden="true">
  <form role="form"  method="POST"  enctype="multipart/form-data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalluser">Add user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="box-body">
     
         <div class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user "> </i></span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="name" name="name" id="name" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="form-group">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"> </i></span>
            </div>
            <input type="password" id="password"  name="password" class="form-control " placeholder="password" >
          </div>
          </div>
         
            <div class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"> </i></span>
            </div>
            <select name="profile" id="profile" class="form-control input-group-lg">
              <option>Select profile</option>
              <option>Admin</option>
              <option>Seller</option>
              <option>Developer</option>
              <option>vender</option>

            </select>

          </div>
           </div>
           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="email"  id="email" aria-describedby="basic-addon1">
          </div>

           <div class="form-group">
          <div class="pannel">Upload Picture</div>
          <input type="file" class="photo" name="photo" id="photo">
          <img src="views/img/logo/icons.png" class="img-thumbnail previous" width="100px">
         
          

           </div>


         </div>

        
  

       </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        
       <button type="submit" id="edituser" name="edituser" class="btn btn-primary">Save</button>      </div>

    
    </div>
  </div>
     <?php 
         $createdata =new usercontroller();
         $createdata->createdata();

          ?>
</form>
</div>


        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>

    <!-- /.content -->
    
    
  </div>
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodal"
  aria-hidden="true">
  <form role="form"  method="POST"  enctype="multipart/form-data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Update user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="box-body">
     
         <div class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user "> </i></span>
            </div>
            <input type="text" class="form-control"  aria-label="name" name="newname" id="newname" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="form-group">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"> </i></span>
            </div>
            <input type="password" id="newpassword"  name="newpassword" class="form-control " placeholder="enter a new password" >
            <input type="hidden" name="newpassword1" id="newpassword1">
          </div>
          </div>
         
            <div class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"> </i></span>
            </div>
            <select name="newprofile" id="newprofile"  class="form-control input-group-lg">
              <option id="editprofile" name="editprofile"></option>
              <option value="Admin">Admin</option>
              <option value="Seller">Seller</option>
              <option value="Developer">Developer</option>
              <option value="Vendor">vender</option>

            </select>

          </div>
           </div>
           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control"   aria-label="Username" name="newemail"  id="newemail" aria-describedby="basic-addon1">
          </div>

           <div class="form-group">
          <div class="pannel">Upload Picture</div>
          <input type="file" class="photo" name="newphoto" id="newphoto">
          <img src="views/img/logo/icons.png" class="img-thumbnail preview" width="100px">
         
          <input type="hidden" name="fotoactual" name="fotoactual">

           </div>


         </div>

        
  

       </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        
       <button type="submit" name="update" id="update" class="btn btn-primary">Modify user</button>      </div>


</div>

</div>
 <?php 
         $edituser =new usercontroller();
         $edituser->ctredituser();

          ?>
</form>
</div>

    
    </div>
  </div>
    <?php 
         $deleteUser =new usercontroller();
         $deleteUser->ctrDeleteUser();

          ?>
    
