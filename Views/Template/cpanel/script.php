  <script>
    let base_url = "<?= base_url() ?>";
  </script>
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?= base_url() ?>/Assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= base_url() ?>/Assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url() ?>/Assets/vendor/js/bootstrap.js"></script>
  <script src="<?= base_url() ?>/Assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?= base_url() ?>/Assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= base_url() ?>/Assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="<?= base_url() ?>/Assets/js/main.js"></script>

  <!-- Page JS -->

  <script src="<?= base_url() ?>/Assets/js/<?= $data["page_js"] ?>"></script>