<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $menu = "about";  ?>
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


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6 text-white">เกี่ยวกับเรา</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item "><a href="#" class="text-white">หน้าหลัก</a></li>
            <li class="breadcrumb-item active text-white">เกี่ยวกับเรา</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-body my-5">
        <div class="container py-7">
            <div class="row g-4 align-items-center">
                <div class="col-lg-12 abouts">
                    <div class="py-4">
                        <p class="fw-normal text-dark mb-2 text-center">Start Safe Co.,Ltd.</p>
                        <h1 class="text-primary text-center py-3">บริษัท สตาร์ท เซฟ จำกัด</h1>
                        <p class="mb-4 text-dark"><b>บริษัท สตาร์ท เซฟ จำกัด (Start Safe Co.,Ltd.)</b> จดทะเบียนเมื่อปี พ.ศ.2567 เราดำเนินกิจการและมุ่งเน้นสินค้าและบริการที่มีคุณภาพ เพื่อมอบบริการที่ดีที่สุดให้กับลูกค้าของเรา โดยเราเป็นตัวแทน จัดจำหน่ายเครื่องดับเพลิง อุปกรณ์ดับเพลิง เป็นไปตามมาตรฐาน</p>
                        <p class="mb-4 text-dark">บริษัทฯ ของเรามุ่งเน้นที่จะมอบบริการที่ดีให้กับลูกค้า แบบครบวงจร ทั้งเครื่องดับเพลิง อุปกรณ์ดับเพลิง ซึ่งเรามีบริการ ออกแบบ ให้คำปรึกษาเกี่ยวกับการเลือกใช้เครื่องดับเพลิง อุปกรณ์ดับเพลิงในแต่ละอุตสาหกรรม บ้าน เรือน อาคาร โรงงาน ห้าง ร้าน ต่าง ๆ อย่างเหมาะสม ตลอดไปจนถึงการตรวจสอบถังดับเพลิง บรรจุน้ำยาดับเพลิง เราเชื่อเสมอว่า มากกว่าการบริการที่ดี คือการเป็นเพื่อนคู่คิดให้แก่ลูกค้าของเรา และเราหวังเป็นอย่างยิ่งว่าจะได้ดูแลลูกค้าและองค์กรของลูกค้าทุกท่าน</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <img src="images/about/1000.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="images/about/1000.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="images/about/1000.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $sql_key = "SELECT * FROM keywordsss";
                $rs_key = mysql_query($sql_key);
                ?>

                <div class="d-flex flex-wrap m-n1 py-5">
                    <?php while ($row_k = mysql_fetch_array($rs_key)) {  ?>
                        <a class="btn btn-outline-secondary rounded-pill px-3 m-1"><?php echo $row_k["keyword_name"];  ?></a>
                    <?php } ?>
                </div>
        </div>
    </div>
    </div>
    <!-- Banner Section End -->



    <?php
    include("footer.php");
    include("js.php");
    ?>


</body>

</html>