<?php
include 'Header/index.php';

?>

<div class = "row">
    <div class = "col-lg-2"></div>
    <div class = "col-lg-8">
        <div class = "card">
            <div class = "card-header bg-warning text-white">Edit Trip Form</div>
            <div class = "card-body">
                <div class ="row">
                    <div class = "col-lg-6">

                        <div class = "form-group">
                            <label>Tanggal Keberangkatan</label>
                            <input type = "date" class = "form-control">
                        </div>

                        <div class = "form-group">
                            <label>Waktu</label>
                            <select class = "form-control">
                                <option>------</option>
                            </select>
                        </div>

                        <div class = "form-group">
                            <label>Maksimum Kapasitas</label>
                            <select class = "form-control">
                                <option>------</option>
                            </select>
                        </div>

                    </div>
                    <div class = "col-lg-6">

                        <div class = "form-group">
                            <label>Driver</label>
                            <select class = "form-control">
                                <option>---------</option>
                            </select>
                        </div>

                        <div class = "form-group">
                            <label>Tipe Kendaraan</label>
                            <select class = "form-control">
                                <option>---------</option>
                            </select>
                        </div>

                        <div class = "form-group">
                            <label>Status Grid</label>
                            <select class = "form-control">
                                <option>--------</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class = "form-group">
                    <label>Catatan</label>
                    <textarea class = "form-control" style="height:100px ;"></textarea>
                </div>
            </div>
            <div class = "card-footer">
                <a href="#" class = "btn btn-secondary">Kembali</a>
                <button type = "submit" class = "btn btn-warning">Update</button>
            </div>
        </div>
    </div>
    <div class = "col-lg-2"></div>
</div>

<?php
include 'Footer/index.php';
?>