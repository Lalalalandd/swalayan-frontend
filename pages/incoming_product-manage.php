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
            <h1 class="m-0">Incoming Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Incoming Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" style="justify-content: space-evenly;" >
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Add</h3>

                <p>Stock</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../pages/incoming_product-add.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>All</h3>

                <p>Incoming Product Transaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../pages/incoming_product-all.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Manage</h3>

                <p>Incoming Product Transaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="../pages/incoming_product-manage.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="content" style="min-height: 1000px;">
          <!-- Left col -->
          <!-- <section class="content"> -->



            <!-- Isi ne nde kene  -->
              <div class="card" style="justify-content: space-between;">
                <div class="card-header">
                    <div class="form-row" >
                      <div class="form-group col-md-4">
                        <h3 class="card-title" style="margin-right: 10px;">Manage Incoming Product Transaction</h3>
                      </div>
                      <div class="form-group col-md-2">
                        <select id="inputDate" class="form-control">
                          <option value="">Date</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <select id="inputMonth" class="form-control">
                          <option value="">Month</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <select id="inputYear" class="form-control">
                          <option value="">Year</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <button id="searchButton" type="submit"
                        class="small-box bg-info" style="margin-bottom: 0px; border: none; height:100%; width: 100%">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                </div>
                <div class="card-body p-0">
                  <table id="view-all" class="table table-striped table-bordered" style="text-align: center;" >
                    <thead>
                      <tr>
                        <th>ID</th> <!-- Add a new header cell for the quantity -->
                        <th>NIP</th>
                        <th>Date</th>
                        <th>Month</th>
                        <th>Year</th>  
                        <th>Time</th>   
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="table-body">
                      <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                        <td>2023</td>   
                        <td>18:01:33</td>  
                        <td><button class="small-box bg-danger" 
                    style="margin-bottom: 0px; border: none; width: 100%;">Delete</button></td>      
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                        <td>2023</td>   
                        <td>18:01:33</td>  
                        <td><button class="small-box bg-danger" 
                    style="margin-bottom: 0px; border: none; width: 100%;">Delete</button></td>    
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                        <td>2023</td>   
                        <td>18:01:33</td>  
                        <td><button class="small-box bg-danger" 
                    style="margin-bottom: 0px; border: none; width: 100%;">Delete</button></td>    
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                        <td>2023</td>   
                        <td>18:01:33</td>  
                        <td><button class="small-box bg-danger" 
                    style="margin-bottom: 0px; border: none; width: 100%;">Delete</button></td>    
                      </tr>
                    </tbody>
                  </table>
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
