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
                <div class = "card-header bg-primary text-white"><h6><b>Total Driver</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-primary">Lihat Detail</button>
                </div>
              </div>
            </div>
            <div class = "col-lg-4">
            <div class="card">
                <div class = "card-header bg-danger text-white"><h6><b>Total Trip</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-danger">Lihat Detail</button>
                </div>
              </div>
            </div>
            <div class = "col-lg-4">
            <div class="card">
                <div class = "card-header bg-warning text-white"><h6><b>Total Omset</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-warning">Lihat Detail</button>
                </div>
              </div>
            </div>

            <div class = "col-lg-4 mt-3">
            <div class="card">
                <div class = "card-header bg-success text-white"><h6><b>Riwayat trip</b></h6></div>
                <div class = "card-body" style="margin-top:-15px ;margin-bottom:-15px;"><h3>6</h3></div>
                <div class = "card-footer">
                  <button class="btn btn-success">Lihat Detail</button>
                </div>
              </div>
            </div>
          </div>
       
        
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

