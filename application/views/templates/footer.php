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
      <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

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




      </body>

      </html>