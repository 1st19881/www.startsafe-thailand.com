<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>จำหน่ายเครื่องดับเพลิง อุปกรณ์ดับเพลิง อุปกรณ์เซฟตี้ ป้ายสัญญลักษณ์ จังหวัดกรุงเทพ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="จำหน่ายเครื่องดับเพลิง,อุปกรณ์ดับเพลิง,ถังดับเพลิง,อุปกรณ์เซฟตี้,อุปกรณ์ความปลอดภัย,ดับเพลิง,•	อบรมดับเพลิง,ป้ายสัญญลักษณ์" name="keywords">
    <meta content="ตัวแทนจำหน่ายเครื่องดับเพลิง ถังดับเพลิง อุปกรณ์จราจร อุปกรณ์ความปลอดภัย อุปกรณ์เซฟตี้ สายดับเพลิง ราคาถูกหนองจอก กรุงเทพ" name="description">
    <?php $menu = "index";  ?>
    <?php include("link.php");  ?>
    <?php include("config/config.php"); ?>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include("header.php");
    include("slider.php");
    ?>


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-body my-5">
        <div class="container py-7">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="images/about/1000.png" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="py-4">
                        <p class="fw-normal text-dark mb-2">Start Safe Co.,Ltd.</p>
                        <h1 class="text-primary">บริษัท สตาร์ท เซฟ จำกัด</h1>
                        <p class="mb-4 text-dark">บริษัท สตาร์ท เซฟ จำกัด (Start Safe Co.,Ltd.) จดทะเบียนเมื่อปี พ.ศ.2567 เราดำเนินกิจการและมุ่งเน้นสินค้าและบริการที่มีคุณภาพ เพื่อมอบบริการที่ดีที่สุดให้กับลูกค้าของเรา โดยเราเป็นตัวแทน จัดจำหน่ายเครื่องดับเพลิง อุปกรณ์ดับเพลิง เป็นไปตามมาตรฐาน</p>
                        <a href="about.php" class="btn border-secondary py-2 px-4 rounded-pill text-primary ">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->



    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                            <i class="fas fa-shopping-basket fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h3>จำหน่าย</h3>
                            <p class="mb-0">จัดจำหน่ายเครื่องดับเพลิง อุปกรณ์ดับเพลิง ตามมาตรฐาน</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                            <i class="fas fa-clipboard-list fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h3>บริการตรวจสอบ</h3>
                            <p class="mb-0">ตรวจสอบถังดับเพลิง บรรจุน้ำยาดับเพลิง </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h3>ให้คำปรึกษา</h3>
                            <p class="mb-0">ให้คำปรึกษาเกี่ยวกับ เครื่องดับเพลิง อุปกรณ์ดับเพลิง</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->

    <?php 
    $cat_sql = "SELECT * FROM category";
    $result_ct = mysql_query($cat_sql);
    ?>

    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h2 class="mb-0">หมวดหมู่สินค้า</h2>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <?php while ($row_c = mysql_fetch_array($result_ct)) {  ?>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="<?php echo $row_c["cate_img"];  ?>" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute " style="top: 10px; right: 10px;"><?php echo $row_c["cate_name"];  ?></div>
                        <div class="p-4 rounded-bottom">
                            <div class="d-grid gap-2">
                                <a href="product.php?act=category&cate_id=<?php echo $row_c["cate_id"]; ?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->

    <?php $pd_sql = "SELECT * FROM product as p
    INNER JOIN category as c ON p.cate_id = c.cate_id
    ORDER BY p.product_id DESC LIMIT 9";
    $result_pd = mysql_query($pd_sql);

    ?>

    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h2 class="mb-0">สินค้าล่าสุด</h2>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <?php while ($row_pdc = mysql_fetch_array($result_pd)) {  ?>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="<?php echo $row_pdc["product_img"];  ?>" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;"><?php echo $row_pdc["cate_name"];  ?></div>
                        <div class="p-4 rounded-bottom">
                            <h4 class="product-hidden"><?php echo $row_pdc["product_nameth"];  ?></h4>
                            <div class="p-4 rounded-bottom">
                                <div class="d-grid gap-2">
                                    <a href="detail.php?product_id=<?php echo $row_pdc["product_id"];?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->


    <?php
    $pd_all = "SELECT * FROM product as p
    INNER JOIN category as c ON p.cate_id = c.cate_id
    ORDER BY RAND() LIMIT 8";
    $result_all = mysql_query($pd_all);
    ?>


    <!-- Fruits Shop Start-->
    <div class="container-fluid  vesitable py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-12 text-start py-5">
                        <h2>สินค้าของเรา</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php while ($row_all = mysql_fetch_array($result_all)) {  ?>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="border border-primary rounded position-relative vesitable-item">
                                        <div class="vesitable-img">
                                            <img src="<?php echo $row_all["product_img"];  ?>" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;"><?php echo $row_all["cate_name"];  ?></div>
                                        <div class="p-4 rounded-bottom">
                                            <h4 class="product-hidden"><?php echo $row_all["product_nameth"];  ?></h4>
                                            <div class="p-4 rounded-bottom">
                                                <div class="d-grid gap-2">
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center py-5">
                <a href="product.php" class="btn border border-secondary col-4  px-3 text-primary"> สินค้าทั้งหมด</a>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->




    <?php
    include("footer.php");
    include("js.php");
    ?>


</body>

</html>