<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include("link.php");  ?>
    <?php include("config/config.php"); ?>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include("header.php"); ?>


    <!-- query รายละเอียดสินค้า -->
    <?php
    $product_id = $_GET["product_id"];

    $sql_query = "SELECT p.*,c.* FROM product as p
    LEFT JOIN category as c ON p.cate_id = c.cate_id
    WHERE p.product_id=$product_id";
    $rs_detail = mysql_query($sql_query);
    $row_dt = mysql_fetch_array($rs_detail);
    $row_cateid = $row_dt["cate_id"];

    $sql_re = "SELECT p.*,c.* FROM product as p
    LEFT JOIN category as c ON p.cate_id = c.cate_id
    WHERE p.product_id != $product_id AND p.cate_id = $row_cateid
    ORDER BY RAND()  LIMIT 4;";
    $result_rs = mysql_query($sql_re);


    ?>



    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6 text-white"><?php echo $row_dt["product_nameth"];  ?></h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item "><a href="#" class="text-white">หน้าหลัก</a></li>
            <li class="breadcrumb-item active text-white"><?php echo $row_dt["product_nameth"];  ?></li>
        </ol>
    </div>
    <!-- Single Page Header End -->




    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-9">
                    <div class="row g-4">
                        <div class="col-lg-12 text-center">
                            <div class="border rounded">
                                <a href="#">
                                    <img src="<?php echo $row_dt["product_img"];  ?>" class="img-fluid rounded" alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">

                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">รายละเอียดสินค้า</button>
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" aria-controls="nav-mission" aria-selected="false">ภาพสเปค</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <h4 class="fw-bold mb-3"><?php echo $row_dt["product_nameth"];  ?></h4>
                                    <p class="mb-3">หมวดหมู่: <?php echo $row_dt["cate_name"];  ?></p>
                                    <p class="mb-4">รุ่น: <?php $md = $row_dt["model"];
                                                            if ($md != '') {
                                                                echo $md;
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?></p>
                                    <p class="mb-4"><?php $pd = $row_dt["product_detail"];
                                                    if ($pd != '') {
                                                        echo $pd;
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?></p>
                                    <div class="py-5 text-center">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <a href="https://line.me/ti/p/~startsafe89" target="_blank"><img src="images/button/l1.png" class="w-100" alt=""></a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="tel:098-9870198" target="_blank"><img src="images/button/l2.png" class="w-100" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                    <div class="text-center">
                                        <?php $ps = $row_dt["product_spec"];
                                        if ($ps != '') { ?>
                                            <img src="<?php echo $row_dt["product_spec"];  ?>" class="img-fluid" alt="">
                                        <?php   } else { ?>
                                            <img src="images/no.jpg" class="img-fluid" alt="">
                                        <?php  } ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-vision" role="tabpanel">
                                    <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore. 3</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php include("sidebar.php"); ?>
                </div>
                <div class="mb-5">
                    <!-- <h3 class="mb-4">Tag Cloud</h3> -->

                    <?php
                    $sql_key = "SELECT * FROM keywordsss";
                    $rs_key = mysql_query($sql_key);
                    ?>

                    <div class="d-flex flex-wrap m-n1">
                        <?php while ($row_k = mysql_fetch_array($rs_key)) {  ?>
                            <a  class="btn btn-outline-secondary rounded-pill px-3 m-1"><i class="fas fa-tag"></i> <?php echo $row_k["keyword_name"];  ?></a>
                        <?php } ?>
                    </div>
                </div>
                <h1 class="fw-bold mb-0 ">สินค้าที่เกี่ยวข้อง</h1>
                <div class="row g-4 ">
                    <?php while ($rowr = mysql_fetch_array($result_rs)) {  ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="<?php echo $rowr["product_img"]; ?>" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $rowr["cate_name"]; ?></div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h5 class="product-hidden"><?php echo $rowr["product_nameth"]; ?></h5>
                                    <!-- <p><?php echo $rowr["product_detail"]; ?></p> -->
                                    <div class="d-grid gap-2">
                                        <a href="detail.php?product_id=<?php echo $rowr["product_id"]; ?>&cate_id=<?php echo $rowr["cate_id"]; ?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->









    <?php
    include("footer.php");
    include("js.php");
    ?>


</body>

</html>