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
              <div class="card">
                <div class="card-header">
                  <div class="form-row" >
                    <div class="form-group col-md-9">
                      <h3 class="card-title" style="margin-right: 10px;">Add Stock</h3>
                    </div>
                    <div class="form-group col-md-3">
                      <input type="text" id="fproduct" name="fproduct" style="width: 100%;" placeholder="Product Name">
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped table-bordered" >
                    <thead>
                      <tr>
                        <th></th> <!-- Add an empty header cell for the checkbox -->
                        <th>Quantity</th> <!-- Add a new header cell for the quantity -->
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td> <!-- Add a checkbox for each row -->
                        <td><input type="number" name="quantity" min="0" value="1" /></td>
                        <td>1</td>
                        <td>Product 1</td>
                        <td>This is a description of product 1.</td>                 
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td>
                        <td><input type="number" name="quantity" min="0" value="1" /></td>
                        <td>2</td>
                        <td>Product 2</td>
                        <td>This is a description of product 2.</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td>
                        <td><input type="number" name="quantity" min="0" value="1" /></td>
                        <td>3</td>
                        <td>Product 3</td>
                        <td>This is a description of product 3.</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="fixed-block">

                    <!-- Number of checked items -->
                    <span id="checkedItems">0 items checked</span>

                    <!-- Add button -->
                    <button class="small-box bg-info" style="margin-bottom: 0px; width: 8%; border: none;"
                    data-toggle="modal" data-target="#confirmationModal">Add</button>
                  </div>
              </div>

               <!-- Confirmation Modal -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure to add this transaction?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addItem()">Add</button>
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
