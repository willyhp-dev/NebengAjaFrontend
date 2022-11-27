<?php
include 'Header/index.php';

?>

<div class = "row">
    <div class = "col-lg-2"></div>
    <div class = "col-lg-8">
        <div class = "card">
            <div class = "card-header bg-warning text-white">Edit Pengguna Form</div>
            <div class = "card-body">
                <div class = "row">
                    <div class = "col-lg-6">

                        <div class = "form-group">
                            <label>Role</label>
                            <select class = "form-control">
                                <option>-------</option>
                            </select>
                        </div>

                        <div class = "form-group">
                           <label>Nama Lengkap</label>
                           <input type = "text" class = "form-control">
                        </div>

                        <div class = "form-group">
                            <label>Email</label>
                            <input type ="email" class="form-control">
                        </div>

                        <div class = "form-group">
                            <label>Password</label>
                            <input type = "password" class = "form-control">
                        </div>
                    </div>
                    <div class = "col-lg-6">
                        <div class = "form-group">
                            <label>Nomor Hp</label>
                            <input type = "text" class = "form-control">
                        </div>

                        <div class = "form-group">
                            <label>Alamat</label>
                            <textarea class = "form-control" style="height:100px;"></textarea>
                        </div>

                        <div class = "form-group">
                            <label>Jadi Driver?</label>
                            <select class = "form-control">
                                <option>------------</option>
                            </select>
                        </div>
                    </div>
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