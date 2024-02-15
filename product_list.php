 <?php include("config/config.php");

    $perpage = 18;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start = ($page - 1) * $perpage;

    $sql_prod = "SELECT p.*,c.* FROM product as p
    JOIN category as c ON p.cate_id=c.cate_id
    ORDER BY p.product_id DESC
    limit {$start} , {$perpage} ";
    $result_pd = mysql_query($sql_prod);

    ?>


 <!-- Single Page Header start -->
 <div class="container-fluid page-header py-5">
     <h1 class="text-center text-white display-6">สินค้าของเรา</h1>
     <ol class="breadcrumb justify-content-center mb-0">
         <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
         <li class="breadcrumb-item active text-white">สินค้าของเรา</li>
     </ol>
 </div>
 <!-- Single Page Header End -->

 <!-- Fruits Shop Start-->
 <div class="container-fluid fruite py-5">
     <div class="container py-5">
         <div class="row g-4">
             <div class="col-lg-12">
                 <div class="row g-4">
                     <div class="col-lg-9">
                         <div class="row g-4 justify-content-center">
                             <?php while ($rowp = mysql_fetch_array($result_pd)) {  ?>
                                 <div class="col-md-6 col-lg-4 mb-4">
                                     <div class="rounded position-relative fruite-item">
                                         <div class="fruite-img">
                                             <img src="<?php echo $rowp["product_img"]; ?>" class="img-fluid w-100 rounded-top" alt="">
                                         </div>
                                         <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $rowp["cate_name"]; ?></div>
                                         <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                             <h5 class="product-hidden"><?php echo $rowp["product_nameth"]; ?></h5>
                                             <!-- <p><?php echo $rowp["product_detail"]; ?></p> -->
                                             <div class="d-grid gap-2">
                                                 <a href="detail.php?product_id=<?php echo $rowp["product_id"]; ?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             <?php }  ?>
                             <?php
                                $sql2 = "SELECT p.*,c.* FROM product as p
                                JOIN category as c ON p.cate_id=c.cate_id
                                ORDER BY p.product_id DESC";
                                $query2 = mysql_query($sql2);
                                $total_record = mysql_num_rows($query2);
                                $total_page = ceil($total_record / $perpage);
                                ?>
                             <div class="col-12">

                                <div class="container">
                                 <div class="pagination d-flex justify-content-center mt-5">
                                     <a href="product.php?page=1" class="rounded">&laquo;</a>
                                     <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                                         <a href="product.php?page=<?php echo $i; ?>" class="<?php if ($_GET["page"] == $i) {
                                        echo "active";
                                         } ?> rounded"><?php echo $i; ?></a>
                                     <?php } ?>
                                     <a href="product.php?page=<?php echo $total_page; ?>" class="rounded">&raquo;</a>
                                 </div>
                                </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <?php include("sidebar.php");  ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Fruits Shop End-->