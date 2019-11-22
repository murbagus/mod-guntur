<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <div class="col-lg-5">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>

                </div>
            <?php endif; ?>
            <form action="" method="post" autocomplete="off">
                <form>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategoriModel">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="namaModel">


                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="hargaModel">


                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggalModel">


                        </div>
                        <div class="form-group">
                            <label for="toko">Toko</label>
                            <input type="text" class="form-control" name="toko" id="tokoModel">


                        </div>


                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin'); ?>" class="btn btn-primary">Batal</a>
                </form>

        </div>
    </div>
</div>
</div>
</div>