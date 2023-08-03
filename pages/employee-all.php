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
              <li class="breadcrumb-item active"><a href="#">AllEmployee</a></li>
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
                    <div class="form-group col-md-3">
                      <h3 class="card-title" style="margin-right: 10px;">All Employee</h3>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputnip">Nip</label>
                        <input type="number" class="form-control" id="inputnip" placeholder="Select ID">
                      </div>
                      </div>
                      <div class="form-group col-md-3">
                        <button id="searchButton" type="submit"
                        class="small-box bg-info" style="margin-bottom: 0px; border: none; height:100%; width: 100%">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped table-bordered" >
                    <thead>
                      <tr>
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
