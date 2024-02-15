<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="template/assets/" data-template="vertical-menu-template-free">
<?php include("header.php"); ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php include("sidebar.php"); ?>

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php include("nav.php"); ?>

        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'add') {
              include('gallery_add.php');
            } else if ($act == 'edit') {
              include("gallery_edit.php");
            } else if ($act == 'delete') {
              include("gallery_delete.php");
            } else {
              include('list_gallery.php');
            }
            ?>
          </div>
        </div>
        <!-- / Content -->




        <!-- Footer -->
        <?php include("footer.php"); ?>
        <!-- / Footer -->

        <script>
          new DataTable('#example');
        </script>

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->




</body>

</html>