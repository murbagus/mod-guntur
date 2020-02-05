
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 mt-4 text-gray-800"><?= $title; ?></h1>

            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                            <thead>

                                <tr>

                                    <th scope="col">No</th>
                                    <th scope="col">Nama proyek</th>
                                    <th scope="col">tanggal</th>
                                    <th scope="col">no_tlp</th>
                                    <th scope="col">alamat</th>
                                    <th scope="col">deskripsi</th>
                                   
                                </tr>
                                </thead>
            </table>
        </div>
    </div>

	<script>
	$(function () {
		$('#table1').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : false,
		'ordering'    : true,
		'info'        : true,
		'autoWidth'   : false
		})
	})
	</script>

	<script type="text/javascript">
            $(document).ready(function() {
                $('#table1').dataTable();
            });
        </script>


