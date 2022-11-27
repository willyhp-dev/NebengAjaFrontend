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
                  Tambah Trip
                </button>


                <div class="modal" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Data Trip form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class = "row">
                          <div class = "col-lg-6">
                        <div class = "form-group">
                          <label>tanggal Keberangkatan</label>
                          <input type = "date" class="form-control">
                        </div>

                        <div class = "form-group">
                          <label>waktu</label>
                          <select class = "form-control">
                            <option>--------</option>

                          </select>
                        </div>

                        <div class ="form-group">
                        <label>Maksimum Kapasitas</label>
                          <select class = "form-control">
                            <option>---------</option>
                          </select>
                        </div>
                          </div>
                        
                          <div class = "col-lg-6">

                            <div class = "form-group">
                            <label>Driver</label>
                            <select class = "form-control">
                              <option>-----------</option>
                            </select>
                            </div>

                            <div class = "form-group">
                              <label>Tipe Kendaraan</label>
                              <select class = "form-control">
                                <option>--------</option>
                              </select>
                            </div>

                            <div class ="form-group">
                              <label>status grid</label>
                              <select class= "form-control">
                                <option>--------</option>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class = "form-group">
                            <label>Catatan</label>
                            <textarea class = "form-control" style = "height:100px;" placeholder="Catatan"></textarea>
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
                            <th width="5%">No</th>
                            <th>Tanggal</th>
                            <th>Driver</th>
                            <th>Tipe Kendaraan</th>
                            <th>Jam Keberangkatan</th>
                            <th>Kapasitas</th>
                            <th>Status Trip</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Driver</td>
                        <td>Tipe Kendaraan</td>
                        <td>Jam Keberangkatan</td>
                        <td>Kapasitas</td>
                        <td>Status Trip</td>
                        <td>
                        <a href ="/NebengAja/Editable/DataTrip.php" class = "btn btn-warning btn-sm">Edit</a>
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

