<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $menu ="product";  ?>
    <?php include("link.php");  ?>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include("header.php"); ?>

    <?php
    $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if ($act == 'category') {
        include('product_category.php');
    } else {
        include('product_list.php');
    }
    ?>


    <?php
    include("footer.php");
    include("js.php");
    ?>


</body>

</html>