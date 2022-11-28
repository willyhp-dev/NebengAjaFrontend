<!DOCTYPE html>
<html lang="en">
<?php
include 'Header/index.php';

?>

<body>
        <!-- Modal Tambah rute -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Rute</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class = "form-group">
                                <label>Rute</label>
                                <select class = "form-control">
                                    <option>-----------------</option>
                                </select>
                            </div>

                            <div class = "form-group">
                                <label>Rute</label>
                                <select class = "form-control">
                                    <option>Rute Tambahan</option>
                                    <option>Rute Utama</option>
                                </select>
                            </div>

                            <div class = "form-group">
                                <label>Sudah Sampai Tujuan</label>
                                <select class = "form-control">
                                    <option>Belum</option>
                                    <option>Sudah</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
        <!-- Modal Tambah Rute-->


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
        <div class = "card">
            <div class = "card-header bg-primary text-white">
                <div class = "float-left">
                    Rute Trip
                </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah rute
            </button>

            
            </div>
            <div class = "card-body">
            <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th width="5%">Rute</th>
                            <th>Rute Utama</th>
                            <th>Selesai</th>
                            <th width = "20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class = "card-footer"></div>
        </div>

        <div class = "card">
            <div class = "card-header bg-secondary">Penumpang</div>
            <div class = "card-body">
            <table id="table_ids" class="display">
                    <thead>
                        <tr>
                            <th width = "5%">No</th>
                            <th>Nama</th>
                            <th>Rute</th>
                            <th>status</th>
                            <th>Dijemput</th>
                            <th>Diantar</th>
                            <th>catatan</th>
                            <th>Pembayaran Via</th>
                            <th>Tagihan</th>
                            <th width = "20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
            <div class = "card-footer"></div>
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

$(document).ready(function () {
    $('#table_ids').DataTable();
});


    
</script>

