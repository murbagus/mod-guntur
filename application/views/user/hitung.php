<div class="container">

    <!-- Topbar Search -->

    <div class="row">
        <div class="col-md-6 mt-3">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>

                </div>
            <?php endif; ?>


            <div class="row">
                <div class="col-10 col-md-5">
                    <form>
                        <div class="form-group box">
                            <label for="nama">Nama Bahan</label>
                            <select class="form-control" id="nama" name="nama">
                                <?php foreach ($daftar as $d) : ?>
                                    <option><?= $d['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <form>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" id="harga" name="harga" class="form-control" placeholder="Disabled input" value="<?= $d['harga']; ?>">
                                </div>
                            </fieldset>

                        </form>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-7 col-md-8 mr-0">
                <form>
                    <div class="form-group">
                        <label for="panjang">Panjang Bahan</label>
                        <input type="text" class="form-control" id="panjang" name="panjang">
                        <small id="panjang" class="form-text text-muted">
                            Masukan nilai dengan format Cm (Centimeter).
                        </small>
                    </div>
                </form>

                <form>
                    <div class="form-group">
                        <label for="lebar">Lebar Bahan</label>
                        <input type="text" class="form-control" id="lebar" name="lebar">
                        <small id="lebar" class="form-text text-muted">
                            Masukan nilai dengan format Cm (Centimeter).
                        </small>
                    </div>
                </form>

                <form>
                    <div class="form-group">
                        <label for="tinggi">Tinggi Bahan</label>
                        <input type="text" class="form-control" id="tinggi" name="tinggi">
                        <small id="tinggi" class="form-text text-muted">
                            Masukan nilai dengan format Cm (Centimeter).
                        </small>
                    </div>
                </form>

                <button class="btn btn-primary" type="submit">Hitung</button>
                <input class="form-control mt-3" type="text" value="" placeholder="Hasil" readonly>
            </div>

        </div>

    </div>

</div>