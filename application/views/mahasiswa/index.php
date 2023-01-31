<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa ..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>

            <?php if (empty($mahasiswa)) : ?>

                <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan
                </div>

            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs['nama'] ?>
                        <a href="<?php echo base_url(); ?>mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>