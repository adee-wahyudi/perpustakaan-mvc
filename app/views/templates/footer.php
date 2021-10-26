      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2018-2021.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block"><b>Sistem Informasi Perpustakaan</b></div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script> -->
    <!-- jQuery -->
    <script src="<?= base_url; ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url; ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->
    <!-- Select2 -->
    <script src="<?= base_url; ?>/assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url; ?>/assets/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <script type="text/javascript">
      $(function () {
        $("#dataTables").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": []
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('.select2').select2()
      });
    </script>
  </body>
</html>