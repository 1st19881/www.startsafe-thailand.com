<?php include("header.php"); ?>
<!DOCTYPE html>
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
                    include('product_add.php');
                } else if ($act == 'edit') {
                    include("product_edit.php");
                } else if ($act == 'delete') {
                    include("product_delete.php");
                } else {
                    include('list_product.php');
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