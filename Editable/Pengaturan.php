<?php
include 'Header/index.php';

?>

<div class = "row">
    <div class = "col-lg-3"></div>
    <div class = "col-lg-6">
        <div class = "card">
            <div class = "card-header bg-warning text-white">Edit Pengaturan Form</div>
            <div class = "card-body">
                <div class = "form-group">
                    <label>Tipe</label>
                    <input type = "text" class="form-control">
                </div>

                <div class = "form-group">
                    <label>Nilai</label>
                    <input type = "number" class="form-control">
                </div>

                <div class ="form-group">
                    <label>Nilai Tambah</label>
                    <input type = "number" class = "form-control">
                </div>

                <div class = "form-group">
                    <label>Keterangan</label>
                    <textarea class = "form-control" style="height:100px;"></textarea>
                </div>
            </div>
            <div class = "card-footer">
                <a href="#" class = "btn btn-secondary">Kembali</a>
                <button type = "submit" class = "btn btn-warning">Update</button>
            </div>
        </div>
    </div>
    <div class = "col-lg-3"></div>
</div>

<?php
include 'Footer/index.php';
?>