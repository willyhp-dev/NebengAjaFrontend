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
          <div class="row">
            <!-- <div class="col-lg-6 grid-margin stretch-card">-->
            <div class="col-lg-12 grid-margin2 stretch-card">
              <div class="card">
                <div class = "card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Rute
                </button>


                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Rute Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class = "form-group">
                          <label>Daerah Asal</label>
                          <input type = "text" class="form-control" placeholder="Daerah Asal">
                        </div>

                        <div class ="form-group">
                          <label>Daerah Tujuan</label>
                          <input type = "text" class ="form-control" placeholder="Daerah Tujuan">
                        </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                      </div>

                    </div>
                  </div>
                </div>
                </div>
            
                <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Daerah Asal</th>
                            <th>Daerah Tujuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                     
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

