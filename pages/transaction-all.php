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
              <h1 class="m-0">Transaction</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Transaction</li>
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
          <div class="row" style="justify-content: space-evenly;">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Add</h3>

                  <p>Transaction</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="../pages/transaction-add.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>All</h3>

                  <p>Transaction</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="../pages/transaction-all.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="content" style="min-height: 1000px;">
            <!-- Left col -->
            <!-- <section class="content"> -->

            <?php
            require '../vendor/autoload.php';

            use GuzzleHttp\Client;

            $baseUri = 'http://localhost:8092';
            $baseUriTransaction = 'http://localhost:8092'; // Ganti dengan base URL API Anda
            if (isset($_GET["fnip"])) {
              $endpoint = '/api/transaction/nip/' . $_GET["fnip"];
            } else if (isset($_GET["inputYear"]) || isset($_GET["inputMonth"]) || isset($_GET["inputDate"])) {
              $year = isset($_GET["inputYear"]) && trim($_GET["inputYear"]) != "" ? $_GET["inputYear"] : "";
              $month = isset($_GET["inputMonth"]) && trim($_GET["inputMonth"]) != "" ? "/" . $_GET["inputMonth"] : "";
              $date = isset($_GET["inputDate"]) && trim($_GET["inputDate"]) != "" ? "/" . $_GET["inputDate"] : "";
              $endpoint = '/api/transaction/date/' . $year . $month . $date;
            } else {
              $endpoint = '/api/transaction/all';
            }
            $endpointAdd = '/api/transaction/create'; // Ganti dengan endpoint untuk mengupdate data employee


            $client = new Client(['base_uri' => $baseUri]);

            try {
              $response = $client->get($endpoint, [
                'headers' => [
                  'Authorization' => 'Bearer ' . $_SESSION['accessToken'], // Ganti dengan token akses Anda
                  'Content-Type' => 'application/json',
                ],
              ]);

              $statusCode = $response->getStatusCode();
              $productData = json_decode($response->getBody(), true);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
              echo 'Error: ' . $e->getMessage();
            }


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $transactionItems = [];
              for ($i = 0; $i < count($_POST["productCheckbox"]); $i++) {
                $transactionItems[] = [
                  'id_product' => $_POST["productCheckbox"][$i],
                  'quantity' => intval($_POST["stock"][$i])
                ];
              }
              $newIncomingData = [
                'nip' => $_SESSION['nip'],
                "transactionItems" => $transactionItems,
              ];
              $client = new Client(['base_uri' => $baseUriTransaction]);

              try {
                $response = $client->post($endpointAdd, [
                  'headers' => [
                    'Authorization' => 'Bearer ' . $_SESSION['accessToken'], // Ganti dengan token akses Anda
                    'Content-Type' => 'application/json',
                  ],
                  'json' => $newIncomingData,
                ]);

                $statusCode = $response->getStatusCode();
                $responseData = json_decode($response->getBody(), true);

                // Proses response jika perlu
                if ($statusCode === 200) {

                  // Tambahan aksi jika perlu
                } else {
                  echo 'Failed to add Incoming Product: ' . $responseData['message'];
                }
              } catch (\GuzzleHttp\Exception\RequestException $e) {
                echo 'Error: ' . $e->getMessage();
              }
            }
            ?>


            <!-- Isi ne nde kene  -->
            <div class="card">
              <div class="card-header">
                <div class="form-row">

                  <div class="form-group col-md-3">
                    <h3 class="card-title" style="margin-right: 10px;">All Transaction</h3>
                  </div>
                  <div class="form-group col-md-8" style="margin-bottom: 0px;">
                    <div class="form-group" style="width: 100%;">
                      <select id="searchOption" class="form-control">
                        <option value="nip" id="nipOption">Find By NIP</option>
                        <option value="date" id="dateOption">Find By Date</option>
                      </select>
                    </div>

                    <!-- Fields for "Find By NIP" option -->
                    <div id="nipFields">
                      <div class="form-group" style="width: 100%;">
                        <form action="" method="get">
                          <input type="search" id="fnip" name="fnip" style="width: 100%;" placeholder="NIP">
                        </form>
                      </div>
                    </div>

                    <!-- Fields for "Find Date" option -->
                    <form action="" method="get">
                      <div id="dateFields">
                        <div class="form-group">
                          <select id="inputYear" name="inputYear" class="form-control">
                            <option value="">Year</option>
                            <!-- Add years dynamically, e.g., using JavaScript -->
                          </select>
                        </div>
                        <div class="form-group">
                          <select id="inputMonth" name="inputMonth" class="form-control">
                            <option value="">Month</option>
                            <!-- Add months dynamically, e.g., using JavaScript -->
                          </select>
                        </div>
                        <div class="form-group">
                          <select id="inputDate" name="inputDate" class="form-control">
                            <option value="">Date</option>
                            <!-- Add dates dynamically, e.g., using JavaScript -->
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-1">
                        <button id="searchButton" type="submit" class="small-box bg-info" style="margin-bottom: 0px; border: none; height:100%; width: 100%; display:none;">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <table id="view-all" class="table table-striped table-bordered" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>ID</th> <!-- Add a new header cell for the quantity -->
                      <th>NIP</th>
                      <th>Date</th>
                      <th>Month</th>
                      <th>Year</th>
                      <th>Time</th>
                      <th>Total Price</th>
                      <th colspan="2">Action</th>

                    </tr>
                  </thead>
                  <tbody id="table-body">
                    <?php
                    include 'requestApi/getTransaction.php';
                    ?>
                    </td>
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

  <!-- Modal -->
  <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailsModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modalContent">
          <!-- The content will be populated dynamically here -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmationDeleteModalLabel" tabindex="-1" role="dialog" aria-labelledby="confirmationDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure to delete this transaction?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger " onclick="deleteItem()">Delete</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    // Get the searchOption element
    const searchOption = document.getElementById('searchOption');

    // Get the productFields and dateFields elements
    const nipFields = document.getElementById('nipFields');
    const dateFields = document.getElementById('dateFields');
    const searchButton = document.getElementById('searchButton');

    // Function to toggle the display of fields based on the selected option
    function toggleFields() {
      const selectedValue = searchOption.value;
      if (selectedValue === 'nip') {
        nipFields.style.display = 'block';
        dateFields.style.display = 'none';
        searchButton.style.display = 'none';
      } else if (selectedValue === 'date') {
        nipFields.style.display = 'none';
        dateFields.style.display = 'block';
        searchButton.style.display = 'block';
      }
    }

    // Add event listener to the searchOption dropdown to trigger toggleFields on change
    searchOption.addEventListener('change', toggleFields);

    // Call toggleFields initially to set the initial display based on the default selected option
    toggleFields();

    function showDetails(button) {
      let text = button.getAttribute("data").replaceAll("'", "\"")
      console.log(text)
      let detail = JSON.parse(text)
      const row = button.parentNode.parentNode; // Get the parent row of the clicked button

      // Extract data from the row
      const id = row.cells[0].innerText;
      const column1 = row.cells[1].innerText;
      const column2 = row.cells[2].innerText;
      const column3 = row.cells[3].innerText;
      const column4 = row.cells[4].innerText;
      const column5 = row.cells[5].innerText;
      button.getAttribute("data")
      // Create the content to be shown in the modal
      const detailsModalLabel = `
    Transaction ID: ${id}
  `;
      let detailProduct = ''
      for (let i = 0; i < detail.length; i++) {
        detailProduct += `
    <tr>
    
      <td>${detail[i].id_item}</td>
      <td>${detail[i].quantity}</td>
      <td>${detail[i].id_product}</td> 
      <td>${detail[i].name}</td>
      <td>${detail[i].price}</td>
    
    </tr>
    `
      }
      const modalContent = `
      <div style="margin-bottom:0px">
      NIP: ${column1}<br>
      Date: ${column2} - ${column3} - ${column4}<br>
      Time: ${column5}<br>
      Product Details:
      <table class="table table-striped table-bordered" style="text-align: center;">
        <tr>
          <th>ID Incoming</th>
          <th>Quantity</th>
          <th>ID Product</th>
          <th>Name</th>
          <th>Price</th>
        </tr>
      ${detailProduct}
      </table>
    </div>
  `;

      // Update the modal content with the generated content
      document.getElementById("modalContent").innerHTML = modalContent;
      document.getElementById("detailsModalLabel").innerHTML = detailsModalLabel;
    }
  </script>

  <?php
  include '../template/footer.php';
  ?>
</body>

</html>