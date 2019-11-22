<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 mt-4 text-gray-800"><?= $title; ?></h1>

    <!-- Topbar Search -->

    <div class="row mr-8 mb-3">
        <div class="col-md-4 mt-1">
            <form action="<?= base_url('admin'); ?>" method="post">
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
            <h6 class="m-0 font-weight-bold text-primary">Data Pak Deh Furniture</h6>
        </div>

        <!-- input data di index -->

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="row mb-2 col-3 mr-auto float-right">
                    <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-outline-primary ml-5">Tambah Data Barang</a>
                </div>
                <!-- Body tabel -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <a href="<?= base_url(); ?>admin/view/<?= $d['id']; ?>" class="badge badge-success">detail</a>
                                            <a href="<?= base_url(); ?>admin/ubah/<?= $d['id']; ?>" class="badge badge-primary">ubah</a>
                                            <a href="<?= base_url(); ?>admin/hapus/<?= $d['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?'); ">hapus</a>
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
    </div>
</div>