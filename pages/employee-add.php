<?php
    include "../template/header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="Swalayan Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Swalayan</span>
    </a>

    <?php
    include "../template/sidebar.php";
    ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="../pages/employee.php">Employee</a></li>
              <li class="breadcrumb-item active"><a href="#">AddEmployee</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <!-- Small boxes (Stat box) -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
        <!-- /.row -->
        <!-- Main row -->
        
          <!-- Left col -->
          <!-- <section class="content"> -->



            <!-- Isi ne nde kene  -->
            <div class="card">
                <div class="card-header">
                  <div class="form-row" >
                    <div class="form-group col-md-9">
                      <h3 class="card-title" style="margin-right: 10px;">Add Employee</h3>
                    </div>
                    <div class="form-group col-md-3">
                      <input type="text" id="fproduct" name="fproduct" style="width: 100%;" placeholder="Employee Name">
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped table-bordered" >
                    <thead>
                      <tr>
                      <th></th>
                        <th>NIP</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>address</th>
                        <th>phone number</th>
                        <th>department name</th>
                        <th>Position</th>   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td><input type="checkbox" name="productCheckbox" ></td>
                        <td>1</td>
                        <td>john</td>
                        <td>sins</td>
                        <td>This</td>
                        <td>nutz street</td>
                        <td>0875501</td>
                        <td>marketing</td>
                        <td>vice manager</td>                 
                      </tr>
                      <tr>
                      <td><input type="checkbox" name="productCheckbox" ></td>
                      <td>2</td>
                        <td>john</td>
                        <td>lord</td>
                        <td>This</td>
                        <td>butt street</td>
                        <td>0875501</td>
                        <td>marketing</td>
                        <td>Manajer</td>
                      </tr>
                      <tr>
                      <td><input type="checkbox" name="productCheckbox" ></td>
                       <td>3</td> 
                      <td>lord</td>
                        <td>gollum</td>
                        <td>this</td>
                        <td>MidlleEarth street</td>
                        <td>0875501</td>
                        <td>President</td>
                        <td>CEO</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Number of checked items -->
                   <div class="fixed-block">


                    <!-- Add button -->
                    <button class="small-box bg-info" style="margin-bottom: 0px; width: 8%; border: none;"
                    data-toggle="modal" data-target="#confirmationModal">Add</button>
                  </div>
              </div>

               <!-- Confirmation Modal -->
            <div class="fixed-block">

                    <!-- Add button -->
                    <button class="small-box bg-info" style="margin-bottom: 0px; width: 8%; border: none;"
                    data-toggle="modal" data-target="#AddModelEmployee">Add</button>
                  </div>
              </div>

            <!-- Confirmation Modal -->
            <div class="modal fade" id="AddModelEmployee" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Tambah Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" placeholder="Masukkan Nip Employee">
                      </div>
                      <div class="form-group">
                        <label for="name">Employee name</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama ">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                      </div>
                      <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" class="form-control" id="password" placeholder="Masukkan Password">
                      </div>
                      <div class="form-group">
                        <label for="address">address</label>
                        <input type="text" class="form-control" id="address" placeholder="Masukkan Address">
                      </div>
                      <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" placeholder="Masukkan No telp">
                      </div>
                      <div class="form-group">
                        <label for="dept_name">Department name</label>
                        <input type="text" class="form-control" id="dept_name" placeholder="Masukkan Departmen name">
                      </div>
                      <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Masukkan Position">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addEmployee()">Add</button>
                  </div>
                </div>
              </div>
            </div>

            
          <!-- </section> -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
  include '../template/footer.php';
?>
</body>
</html>
