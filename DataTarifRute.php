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
                  Tambah Tarif Rute
                </button>


                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tarif Rute Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class = "form-group">
                          <label>Pilih Rute</label>
                          <select class = "form-control">
                            <option>-----------</option>
                          </select>
                        </div>

                        <div class = "form-group">
                          <label>type Kendaraan</label>
                          <select class = "form-control" >
                            <option>----------</option>
                          </select>
                        </div>

                        <div class = "form-group">
                          <label>Tarif Per muatan</label>
                          <input type = "number" class="form-control" placeholder="Tarif per orang">
                        </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>

                    </div>
                  </div>
                </div>
                </div>
            
                <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Rute</th>
                            <th>Tipe Kendaraan</th>
                            <th>Tarif Per Orang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>Rute</td>
                            <td>Tipe Kendaraan</td>
                            <td>Tarif Per Orang</td>
                            <td>
                              <a href="/NebengAja/Editable/DataTarifRute.php" class = "btn btn-warning btn-sm">Edit</a>
                            </td>
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

