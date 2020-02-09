      <!-- Footer -->
      <footer class="sticky-footer bg-white">
          <div class="container my-auto mt">
              <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Pak Deh Furniture <?= date('Y'); ?></span>
              </div>
          </div>
      </footer>
      <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->


      <!-- Bootstrap core JavaScript-->
      <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
	  <script src="<?= base_url('assets/jquery/jquery-2.2.3.min.js') ?>"></script>
	  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.js') ?>"></script>
    	<script src="<?= base_url('assets/datatables/js/jquery.dataTables.js') ?>"></script>
    	<script src="<?= base_url('assets/datatables/js/dataTables.bootstrap4.js') ?>"></script>

      <script>
          $('.form-check-input').on('click', function() {

              const menuId = $(this).data('menu');
              const roleId = $(this).data('role');

              $.ajax({

                  url: "<?= base_url('admin/changeaccess'); ?>",
                  type: 'post',
                  data: {
                      menuId: menuId,
                      roleId: roleId
                  },

                  success: function() {
                      document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                  }
              });

          });
      </script>

      <script>
          $('.custom-file-input').on('change', function() {

              let fileName = $(this).val().split('\\').pop();
              $(this).next('.custom-file-label').addClass("selected").html(fileName);
          })
      </script> 

	 <!-- daftar barang -->
	  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
	  
    })
  })
</script>

<script type="text/javascript">
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>

        <script type="text/javascript">
            $(document).on("click", "#edit_data", function() {
                var id = $(this).data('id');
                var kategori = $(this).data('kategori');
                var nama = $(this).data('nama');
                var harga = $(this).data('harga');
                var tanggal = $(this).data('tanggal');
                var toko = $(this).data('toko');
                var url = $(this).data('url');

				// Mengganti isi attr form action
				$("#modal_edit #form-modal-edit").attr("action", url);

                $("#modal_edit #id").val(id);
                $("#modal_edit #kategori").val(kategori);
                $("#modal_edit #nama").val(nama);
                $("#modal_edit #harga").val(harga);
                $("#modal_edit #tanggal").val(tanggal);
                $("#modal_edit #toko").val(toko);

            })
        </script>

 </body>
</html>
