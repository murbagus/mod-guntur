<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <br>
            <br>
            <br>


            <div class="card o-hidden border-1 shadow-sm my-5">
                <div class="card-body p-10">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
								<div class="login-brand">
              <img src="<?= base_url('assets/'); ?>img/p.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

                                    <hr>
                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group mb-1">
                                        <input type="text" autocomplete="off" class="form-control form-control-user" id="email" name="email" placeholder="Username" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>



                                    <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
                                        Masuk
                                    </button>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?= base_url('user'); ?>" class="streched-link">Masuk sebagai User ?</a>

                                    </div>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
