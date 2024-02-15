<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $menu ="contact";  ?>
    <?php include("link.php");  ?>
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
        <h1 class="text-center text-white display-6">ติดต่อเรา</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item "><a href="#" class="text-white">หน้าหลัก</a></li>
            <li class="breadcrumb-item active text-white">ติดต่อเรา</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <!-- <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-primary">ติดต่อเรา</h1>
                            <p class="mb-4"></p>
                        </div>
                    </div> -->
                    <div class="col-lg-7">
                        <div class="h-100 rounded">
                            <img src="images/map/map.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>ที่อยู่ / สถานที่ตั้งบริษัท</h4>
                                <p class="mb-2">104/75 หมู่บ้าน ฟลอราวิลล์ ซอยสุวินทวงศ์ 38 แขวงลำผักชี เขตหนองจอก กรุงเทพมหานคร 10530</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>อีเมล</h4>
                           <a href=""><p class="mb-2">startsafe89@gmail.com</p></a>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>เบอร์โทรศัพท์</h4>
                               <a href=""> <p class="mb-2">098-9870198</p></a>
                               <a href=""> <p class="mb-2">092-9986161</p></a>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fab fa-line fa-2x text-primary me-4"></i>
                            <div>
                                <h4>ไอดีไลน์ / ID LINE</h4>
                                <a href=""><p class="mb-2">startsafe89</p></a>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fab fa-facebook-square fa-2x text-primary me-4"></i>
                            <div>
                                <h4>เพจเฟสบุ๊ค / facebook</h4>
                            <a href=""><p class="mb-2">start safe</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
    include("footer.php");
    include("js.php");
    ?>


</body>

</html>