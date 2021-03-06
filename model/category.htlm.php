<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Management </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mange Category</li>
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
              </i> Add Category
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
                   
                      <th> Category </th>
                      <th> Actions </th>
                     <th>buttons</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    
                     <tr>
                       <td>1</td>
                       <td> Electronic equipments</td>
                     <td class="btn-group">
                         <button class="btn btn-success btn-xs activate" >Add</button>
                         <button class="btn btn-danger btn-xs activate "  >Delete</button>
                       </td>
                     </tr>
                     <tr>
                       <td>2</td>
                       <td> Mechanical equipments</td>
                      <td class="btn-group">
                         <button class="btn btn-success btn-xs activate" >Add</button>
                         <button class="btn btn-danger btn-xs activate "  >Delete</button>
                       </td>
                     </tr>
                     <tr>
                       <td>3</td>
                       <td> Wheicle  equipments</td>
                       <td class="btn-group">
                         <button class="btn btn-success btn-xs activate" >Add</button>
                         <button class="btn btn-danger btn-xs activate "  >Delete</button>
                       </td>
                     </tr>

                  </tbody>
                </table>
         
        <!-- /.card-body -->
       

    <!-- /.content -->
  </div>


<!-- Modal -->
<div class="modal fade" id="modalluser" tabindex="-1" role="dialog" aria-labelledby="modalCategory"
  aria-hidden="true">
  <form role="form"  method="POST"  >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalluser">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="box-body">
     
         <div class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-th "> </i></span>
            </div>
            <input type="text" class="form-control" placeholder=" Add Category" aria-label="name" name="category_name" id="category_name" aria-describedby="basic-addon1">
          </div>
        </div>

         </div>

       </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        
       <button type="submit" id="edituser" name="edituser" class="btn btn-primary">Save Category</button>      </div>

    
    </div>
  </div>
    
</form>
</div>


        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>

    <!-- /.content -->
    
    
  </div>
 

    
    </div>
  </div>
    
    