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
        <div class = "row">
            <div class = "col-lg-4">
                <div class = "card">
                    <div class = "card-header bg-primary text-white">Data Pribadi</div>
                    <div class = "card-body">
                        <div class = "row">
                            <div class = "col-lg-4">
                                Nama
                            </div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-7">budi santoso</div>
                        </div>

                        <div class = "row mt-1">
                            <div class = "col-lg-4">
                                Email
                            </div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-7">budi@gmail.com</div>
                        </div>

                        <div class = "row mt-1">
                            <div class = "col-lg-4">
                                Status akun
                            </div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-7">Aktif</div>
                        </div>

                        <div class = "row mt-1">
                            <div class = "col-lg-4">
                                Status Driver
                            </div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-7">Mengemudi</div>
                        </div>
                    </div>
                    <div class = "card-footer"></div>

                </div>
            </div>
            <div class = "col-lg-4">
            <div class = "card">
                    <div class = "card-header bg-dark text-white">Foto Kendaraan</div>
                    <div class = "card-body">Tidak Ada</div>
                    <div class = "card-footer"></div>

                </div>
            </div>
            <div class = "col-lg-4">
                <div class = "card">
                    <div class = "card-header bg-success text-white">Saldo Driver</div>
                    <div class = "card-body"><h5>Rp. 0</h5></div>
                    <div class = "card-footer"></div>

                </div>
            </div>

        </div>

        <div class = "card">
                    <div class = "card-header bg-warning text-white">Riwayat Trip</div>
                    <div class = "card-body">

                    <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                            <th>Kendaraan</th>
                            <th>Total Penumpang</th>
                            <th>Total Income</th>
                            <th width ="20%">Aksi</th>
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


    function contoh(){
            swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
        
    }
</script>

