<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <div class="card">
                        <h5 class="card-header">Form Tambah Data Mahasiswa</h5>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <small class="form-text text-danger"><?php echo form_error('nama') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control" id="nrp" name="nrp">
                                <small class="form-text text-danger"><?php echo form_error('nrp') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Planologi">Teknik Planologi</option>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>


</div>