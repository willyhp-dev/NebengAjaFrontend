<!DOCTYPE html>
<html lang="en">
<?php
include 'Header/index.php';

?>

<body>
  <div class="container-scroller">
   <?php
   include 'Navbar/index.php'
   ?>
    <div class="container-fluid page-body-wrapper" style="margin-top:-17px">
     <?php
     include 'Sidebar/index.php';
     ?>
      <div class="main-panel">
        <div class="content-wrapper">

          <div class ="row">
            <div class = "col-lg-4">
              <div class="card">
                <div class = "card-header"><h6><b>Total Driver</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-primary">Lihat Detail</button>
                </div>
              </div>
            </div>
            <div class = "col-lg-4">
            <div class="card">
                <div class = "card-header"><h6><b>Total Trip</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-primary">Lihat Detail</button>
                </div>
              </div>
            </div>
            <div class = "col-lg-4">
            <div class="card">
                <div class = "card-header"><h6><b>Total Omset</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-primary">Lihat Detail</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <!-- <div class="col-lg-6 grid-margin stretch-card">-->
            <div class="col-lg-12 grid-margin2 stretch-card">
              <div class="card">
                <div class = "card-header">Riwayat Trip</div>
                <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class = "card-footer"></div>

              </div>
            </div>
        
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php
  include 'Footer/index.php';
  
  ?>
  
</body>
  
</html>
<script>

$(document).ready(function () {
    $('#table_id').DataTable();
});
</script>

