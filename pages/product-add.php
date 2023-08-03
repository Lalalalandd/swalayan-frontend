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
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="../pages/product.php">Product</a></li>
              <li class="breadcrumb-item active"><a href="#">addProduct</a></li>
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
        <div class="content" style="min-height: 1000px;">
          <!-- Left col -->
          <!-- <section class="content"> -->



            <!-- Isi ne nde kene  -->
              <div class="card">
                <div class="card-header">
                  <div class="form-row" >
                    <div class="form-group col-md-9">
                      <h3 class="card-title" style="margin-right: 10px;">Add Product</h3>
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
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>price</th>
                        <th>Product Description</th>
                        <th>Stock</th>   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td> <!-- Add a checkbox for each row -->
                        <td>1</td>
                        <td>Biore</td>
                        <td>10000</td>
                        <td>This is a description of product 1.</td>
                        <td>100</td>                 
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td>
                        <td>2</td>
                        <td>sunsilk</td>
                        <td>10000</td>
                        <td>This is a description of product 2.</td>
                        <td>70</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="productCheckbox" /></td>
                        <td>3</td>
                        <td>head&Shoulder</td>
                        <td>10000</td>
                        <td>This is a description of product 3.</td>
                        <td>50</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="fixed-block">

                    <!-- Number of checked items -->
                    <span id="checkedItems">0 items checked</span>

                    <!-- Add button -->
                    <button class="small-box bg-info" style="margin-bottom: 0px; width: 8%; border: none;"
                    data-toggle="modal" data-target="#AddModel">Add</button>
                  </div>
              </div>

               <!-- Confirmation Modal -->
            <!-- Confirmation Modal -->
            <div class="modal fade" id="AddModel" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Tambah Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="Id">Id</label>
                        <input type="number" class="form-control" id="Id" placeholder="Masukkan Id product">
                      </div>
                      <div class="form-group">
                        <label for="product_name">Product name</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Masukkan Nama product">
                      </div>
                      <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" class="form-control" id="Price" placeholder="Masukkan Price Product">
                      </div>
                      <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" placeholder="Masukkan Stok Barang">
                      </div>
                      <div class="form-group">
                        <label for="product_description">Product name</label>
                        <input type="text" class="form-control" id="product_description" placeholder="Masukkan description product">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addBarang()">Add</button>
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
