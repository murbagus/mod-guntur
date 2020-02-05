<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
</nav>
<div class="container-fluid">
    <!-- Content Header (Page header) -->
 <!-- Topbar -->
 
      <section class="content">
        <div class="row">
            <div class="col-sm">
                <!-- Advanced Tables -->
                <div class="panel panel-success">
                    <div class="panel-heading" style="font-size: 20px;">
					Daftar Data Barang
					
					<div class="container">
						<?php if ($this->session->flashdata('flash')) : ?>
							<div class="row col-md-7">
								<div class="col-md-8">
									<div class="alert-success alert-dismissable fade show" role="alert">
								Data <strong>Berhasil</strong>
								<?= $this->session->flashdata('flash'); ?>
								<td></td>
									</div>
								</div>
							</div>

						<?php endif; ?>
					</div>
                        <span title="Tambah Data">
                            <button style="float: right;" class="btn-md btn btn-success"data-toggle="modal" data-target="#myModal">
                                <b>+ Tambah</b>
                            </button>
                        </span>
					</div>
					
					
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">   
							<thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kategori</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Tanggal</th>
                                        <th>Toko</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        <?php $i = 1 ; foreach ($daftar as $row ) { ?>
                                    
                                        <tr class="odd gradeX">
                                            <td>
                                              <?= $i++; ?>
                                            </td>
                                         
                                            <td>
                                              <?= $row['kategori']; ?>
                                            </td>
                                            <td>
                                               <?= $row['nama']; ?> 
                                            </td>
                                            <td>
                                               Rp. <?= $row['harga']; ?> 
                                            </td>
                                            <td>
                                               <?= date('d F Y', strtotime($row['tanggal'])); ?> 
                                            </td>
                                            <td>
                                                <?= $row['toko']; ?>
                                            </td>
                                          
                                            <td>
                                                <a id="edit_data" data-toggle="modal" data-target="#edit" 
												data-kat="<?= $row['kategori']; ?>" 
												data-nm="<?= $row['nama']; ?>" 
												data-hrg="<?= $row['harga']; ?>" 
												data-tgl="<?= $row['tanggal']; ?>" 
												data-tko="<?= $row['toko']; ?>" 
												class="btn-circle btn-warning btn-md" title="Ubah Data"><i class="fa fa-edit"> </i></a>

                                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="<?= base_url().'barang/daftar_hapus/'.$row['id']; ?>" class="btn-circle btn-danger btn-md" title="Hapus Data"><i class="fa fa-trash"> </i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>

                               
                            </table>
                        </div>

                        <!--  Halaman Tambah-->
                        <div class="panel-body">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" action="<?= base_url("barang/tambahdaftar"); ?>" method="POST">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <input class="form-control" name="kategori" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input class="form-control" rows="3" name="nama" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input class="form-control" type="number" name="harga" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="form-control" type="date" name="tanggal" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Toko</label>
                                                    <input class="form-control" name="toko" />
                                                </div>
                                                
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                            <!-- Akhir Halaman Tambah -->

                            <!-- Halaman Ubah -->
                            <div class="panel-body">
                                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
                                            </div>
                                            <div class="modal-body" id="modal_edit">
                                                <form role="form" action="<?= base_url("barang/daftar_update"); ?>" method="POST">
												
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <input class="form-control" name="kategori" id="kategori" />
                                                    </div>
                                                    <div>
                                                        <label>Nama</label>
                                                        <input class="form-control" name="nama" id="nama" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga</label>
                                                        <input class="form-control" name="harga" id="harga" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <input class="form-control" name="tanggal" id="tanggal" type="date" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Toko</label>
                                                        <input class="form-control" name="toko" id="toko" />
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Halaman Ubah -->
                    </div>
                </div>
            </div>
        </section>
		
      </div>

 