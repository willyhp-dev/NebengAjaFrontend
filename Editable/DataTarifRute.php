<?php
include 'Header/index.php';

?>

<div class = "row">
    <div class = "col-lg-3"></div>
    <div class = "col-lg-6">
        <div class = "card">
            <div class = "card-header bg-warning text-white"> Edit Tarif Rute Form</div>
            <div class = "card-body">

                <div class = "form-group">
                    <label>Pilih Rute</label>
                    <select class = "form-control">
                        <option>--------</option>
                    </select>
                </div>

                <div class = "form-group">
                    <label>type kendaraan</label>
                    <select class = "form-control">
                        <option>----------</option>
                    </select>
                </div>

                <div class = "form-group">
                    <label>Tarif Per muatan</label>
                    <input type = "number" class = "form-control">
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