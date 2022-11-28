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
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Pengaturan
                </button>


                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Peraturan Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                      <form class="forms-sample">

                        <div class="form-group">
                          <label>Tipe</label>
                          <input type="text" class="form-control" placeholder="Tipe">
                        </div>

                        <div class="form-group">
                          <label >Nilai</label>
                          <input type="text" class="form-control" placeholder="Nilai">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Nilai Tambah</label>
                          <input type="text" class="form-control" placeholder="Nilai Tambah (Opsional)">
                        </div>

                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class = "form-control" placeholder="Keterangan" style = height:100px;""></textarea>
                        </div>

                    </form>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
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
                            <th>Tipe</th>
                            <th>Nilainya</th>
                            <th>Nilai Tambahan</th>
                            <th>Catatan</th>
                            <th width ="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>No</td>
                          <td>Tipe</td>
                          <td>Nilainya</td>
                          <td>Nilai Tambahan</td>
                          <td>Catatan</td>
                          <td>
                          <button class = "btn btn-danger btn-sm" onclick="contoh()">Delete</button>
                            <a href ="/NebengAja/Editable/Pengaturan.php" class = "btn btn-warning btn-sm">Edit</a>
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

