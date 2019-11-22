<div class="container">


    <!-- Topbar Search -->

    <div class="row mr-8 mb-3">
        <div class="col-md-4 mt-2">
            <form action="<?= base_url('user'); ?>" method="post">
                <div class="input-group mb-0">
                    <input type="text" autocomplete="off" name="keyword" class="form-control" placeholder="Cari Data..." autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>

        </div>
    </div>
    </form>

    <!-- Notifikasi -->

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">

            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil</strong>
                    <?= $this->session->flashdata('flash'); ?>
                    <td></td>
                    Pada Tanggal <strong><?= date('d-m-Y'); ?></strong>
                    <br>
                    Pukul : <?= date('H:i:s'); ?> WIB.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>

            </div>

        </div>
    <?php endif; ?>


    <!-- Judul ditabel -->
    <div class="card shadow mb-4 mt-0">
        <div class="card-header py-3">
            <div class="nm-atas-tabel">
                <h6 class="m-0 font-weight-bold text-primary">Data Pak Deh Furniture</h6>
            </div>
        </div>


        <!-- Body tabel -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Toko</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php $mulai; ?>
                        <?php foreach ($daftar as $d) : ?>
                            <tr>
                                <th scope="row"><?= ++$mulai; ?></th>
                                <td><?= $d['kategori']; ?></td>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['harga']; ?></td>
                                <td><?= Date('d-m-Y', strtotime($d['tanggal'])); ?></td>
                                <td><?= $d['toko']; ?></td>

                                <td>
                                    <a class="btn btn-sm btn-success" href="<?= base_url(); ?>/user/view/<?= $d['id']; ?>">Detail</a>
                                    <i class="fas fa-search fa-sm fa-fw"></i>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                    <?php if (empty($daftar)) : ?>
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Data Tidak Ada!</h4>
                                    <p>Silakan Masukan Data Terlebih Dahulu.</p>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                </table>


                <?= $this->pagination->create_links(); ?>


            </div>

        </div>

    </div>
</div>


<!-- Modal lihat data-->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Data Yang Sudah diTambah Benar? Jika Sudah, Silakan Keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth'); ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>