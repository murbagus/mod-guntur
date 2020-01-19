
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 mt-4 text-gray-800"><?= $title; ?></h1>

            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>

                                <tr>

                                    <th scope="col">No</th>
                                    <th scope="col">Nama Proyek</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Deskripsi</th>
                                   
                                </tr>
                                </thead>
            </table>
        </div>
    </div>


    <script src="<?= base_url('assets/jquery/jquery-2.2.3.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/jquery.dataTables.js') ?>"></script>



    <script type="text/javascript">
    $.noConflict();
        var table;
        jQuery(document).ready(function($) {

            //datatables
            table = $('#tableku').DataTable({

                "processing": true,
                "serverSide": true,
                "order": [],

                "ajax": {
                    "url": "<?= site_url('jadwal/get_data_user') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }, ],

            });

        });
    </script>
