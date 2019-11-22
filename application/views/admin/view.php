<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">

        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    Data Barang
                </div>


                <div class="card-body">
                    <p class="card-title">Kategori : <?= $daftar['kategori']; ?></p>
                    <p class="card-text">Nama : <?= $daftar['nama']; ?></p>
                    <p class="card-text">Harga : <?= $daftar['harga']; ?></p>
                    <p class="card-text">Dibuat Tanggal : <?= Date('d-m-Y', strtotime($daftar['tanggal'])); ?></p>
                    <p class="card-text">Toko : <?= $daftar['toko']; ?></p>

                    <p><small> Diubah <strong><?= Date('d-m-Y', strtotime($daftar['tanggal'])); ?></strong>,
                        </small></p>


                    <a href="<?= base_url('admin'); ?>" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>