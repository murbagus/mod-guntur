<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">

        <div class="col-lg-5">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Siswa Baru
                </div>

                <div class="card-body">


                    <form action="" method="post" autocomplete="off">
                        <input type="hidden" name="id" value="<?= $daftar['id']; ?>">

                        <div class="form-group">

                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $daftar['kategori']; ?>">
                            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>

                        </div>
                        <div class="form-group">

                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $daftar['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>
                        <div class="form-group">

                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $daftar['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>

                        </div>
                        <div class="form-group">

                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $daftar['tanggal']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>

                        </div>
                        <div class="form-group">

                            <label for="toko">Toko</label>
                            <input type="text" class="form-control" id="toko" name="toko" value="<?= $daftar['toko']; ?>">
                            <small class="form-text text-danger"><?= form_error('toko'); ?></small>

                        </div>


                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                        <a href="<?= base_url('admin'); ?>" class="btn btn-primary">Batal</a>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
</div>