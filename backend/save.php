<meta charset="UTF-8">
<?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'add') {

    include "../config/config.php";

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;	



    $cate_name = $_POST['cate_name'];
    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $cate_img = (isset($_REQUEST['cate_img']) ? $_REQUEST['cate_img'] : '');
    $upload = $_FILES['cate_img']['name'];
    if ($upload != '') {

        $path = "../images/category/";
        $pathimg = "images/category/";
        $type = strrchr($_FILES['cate_img']['name'], ".");
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "../images/category/" . $newname;
        copy($_FILES['cate_img']['tmp_name'], $path_copy);
    }

    $sqladd = "INSERT INTO category(cate_name,cate_img)VALUES('$cate_name','$pathimg$newname')";
    $result = mysql_query($sqladd) or die("Error in query: $sqladd
    query " . mysql_error());
    mysql_close($conn);


    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result) {
        echo '
        <script>
           setTimeout(function() {
            swal({
                title: "SuccessFully",
                type: "success"
            }, function() {
                window.location = "category.php?act=add";
            });
        }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
       setTimeout(function() {
        swal({
            title:"NotFaild!",
            type: "danger"
        }, function() {
            window.location = "category.php?act=add";
        });
    }, 100);
</script>
';
    }
}




$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'edit') {
    include "../config/config.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // exit;	



    $cate_id = $_POST['cate_id'];
    $cate_name = $_POST['cate_name'];
    $cate_img1 = $_POS["cate_img1"];

    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $cate_img = (isset($_REQUEST['cate_img']) ? $_REQUEST['cate_img'] : '');
    $upload = $_FILES['cate_img']['name'];
    if ($upload != '') {

        $path = "../images/category/";
        $pathimg = "images/category/";
        $type = strrchr($_FILES['cate_img']['name'], ".");
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "../images/category/" . $newname;
        copy($_FILES['cate_img']['tmp_name'], $path_copy);
    }else{
		$newname=$cate_img1;
	}

    $sqlupdate = "UPDATE  category SET  
    cate_name='$cate_name',
    cate_img='$pathimg$newname'
    WHERE cate_id='$cate_id' ";
    $resultupdate = mysql_query($sqlupdate) or die("Error in query: $sqlupdate " . mysql_error());
    mysql_close($conn);

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($resultupdate) {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "SuccessFully",
        type: "success"
        }, function() {
        window.location = "category.php";
        });
    }, 100);
    </script>
    ';
    } else {
        echo '
        <script>
            setTimeout(function() {
            swal({
            title: "NotFaild!",
            type: "danger"
            }, function() {
            window.location = "category.php";
            });
        }, 100);
        </script>
        ';
    }
}


//ลบข้อมูล
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'delete') {
    include "../config/config.php";
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    print("delete");
    // exit;

    $cate_id = $_GET['cate_id'];

    $sql_del = "DELETE FROM  category  WHERE cate_id='$cate_id' ";
    $result_del = mysql_query($sql_del) or die("Error in query: $sql_del " . mysql_error());

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result_del) {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "SuccessFully",
        type: "success"
        }, function() {
        window.location = "category.php";
        });
    }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "NotFaild",
        type: "danger"
        }, function() {
        window.location = "category.php";
        });
    }, 100);
    </script>
    ';
    }
}



$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'add_pd') {

    include "../config/config.php";

    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';
    exit;	



    $cate_id = $_POST['cate_id'];
    $product_nameth = $_POST['product_nameth'];
    $product_nameen = $_POST['product_nameen'];
    $product_detail = $_POST['product_detail'];
    $model = $_POST['model'];

    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $product_img = (isset($_REQUEST['product_img']) ? $_REQUEST['product_img'] : '');
    $upload = $_FILES['product_img']['name'];
    if ($upload != '') {

        $path = "../images/product/";
        $pathimg = "images/product/";
        $type = strrchr($_FILES['product_img']['name'], ".");
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "../images/product/" . $newname;
        copy($_FILES['product_img']['tmp_name'], $path_copy);
    }

    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $product_spec = (isset($_REQUEST['product_spec']) ? $_REQUEST['product_spec'] : '');
    $upload = $_FILES['product_spec']['name'];
    if ($upload != '') {

        $path = "../images/spec/";
        $pathimg1 = "images/spec/";
        $type = strrchr($_FILES['product_spec']['name'], ".");
        $newname1 = $numrand . $date1 . $type;
        $path_copy = $path . $newname1;
        $path_link = "../images/product/" . $newname1;
        copy($_FILES['product_spec']['tmp_name'], $path_copy);
    }

    $sqladd = "INSERT INTO product(cate_id,product_nameth,product_nameen,model,product_detail,product_img,product_spec)VALUES('$cate_id','$product_nameth','$product_nameen','$model','$product_detail','$pathimg$newname','$pathimg1$newname1')";
    $result = mysql_query($sqladd) or die("Error in query: $sqladd
    query " . mysql_error());
    mysql_close($conn);


    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result) {
        echo '
        <script>
           setTimeout(function() {
            swal({
                title: "SuccessFully",
                type: "success"
            }, function() {
                window.location = "product.php";
            });
        }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
       setTimeout(function() {
        swal({
            title:"NotFaild!",
            type: "danger"
        }, function() {
            window.location = "product.php";
        });
    }, 100);
</script>
';
    }
}


$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'edit_pd') {

    include "../config/config.php";

    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';
    // exit;	


    $product_id = $_POST['product_id'];
    $cate_id = $_POST['cate_id'];
    $product_nameth = $_POST['product_nameth'];
    $product_nameen = $_POST['product_nameen'];
    $model = $_POST['model'];
    $product_detail = $_POST['product_detail'];
    $product_img1 = $_POST['product_img1'];
    $product_spec1 = $_POST['product_spec1'];

    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $product_img = (isset($_REQUEST['product_img']) ? $_REQUEST['product_img'] : '');
    $upload = $_FILES['product_img']['name'];
    if ($upload != '') {

        $path = "../images/product/";
        $pathimg = "images/product/";
        $type = strrchr($_FILES['product_img']['name'], ".");
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "../images/product/" . $newname;
        copy($_FILES['product_img']['tmp_name'], $path_copy);
    }else{
		$newname=$product_img1;
	}

    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $product_spec = (isset($_REQUEST['product_spec']) ? $_REQUEST['product_spec'] : '');
    $upload = $_FILES['product_spec']['name'];
    if ($upload != '') {

        $path = "../images/spec/";
        $pathimg1 = "images/spec/";
        $type = strrchr($_FILES['product_spec']['name'], ".");
        $newname1 = $numrand . $date1 . $type;
        $path_copy = $path . $newname1;
        $path_link = "../images/product/" . $newname1;
        copy($_FILES['product_spec']['tmp_name'], $path_copy);
    }else{
		$newname1=$product_spec1;
	}


    $sql3 = "UPDATE product SET  
			product_nameth='$product_nameth',
            product_nameen='$product_nameen',
			cate_id='$cate_id',
            model='$model', 
			product_detail='$product_detail',
			product_img='$pathimg$newname',
            product_spec='$pathimg1$newname1'
			WHERE product_id='$product_id' ";
	
	
	$result = mysql_query($sql3) or die ("Error in query: $sql3 " . mysql_error());
	
	mysql_close($conn);


    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result) {
        echo '
        <script>
           setTimeout(function() {
            swal({
                title: "SuccessFully",
                type: "success"
            }, function() {
                window.location = "product.php";
            });
        }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
       setTimeout(function() {
        swal({
            title:"NotFaild!",
            type: "danger"
        }, function() {
            window.location = "product.php";
        });
    }, 100);
</script>
';
    }
}

//ลบข้อมูล
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'delete_pd') {
    include "../config/config.php";
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';
    // print("delete");
    // exit;

    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM product WHERE product_id = $product_id"; //คิวรี่ข้อมูลออกมา
    $resault = mysql_query($sql);
    $row = mysql_fetch_array($resault);
    $path = "../"; //path ที่ไว้เก็บรูปภาพ		
    $newname = $row['product_img'];
    $newname1 =$row["product_spec"]; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล			 
    $file = $path . $newname;
    $file1 = $path . $newname1;

    if (unlink($file)) {
        echo ("deleted $file");
    } else {
        echo ("error");
    }
    echo '<br>';
    if (unlink($file1)) {
        echo ("deleted $file1");
    } else {
        echo ("error");
    }

    $sql_del = "DELETE FROM  product  WHERE product_id='$product_id' ";
    $result_del = mysql_query($sql_del) or die("Error in query: $sql_del " . mysql_error());

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result_del) {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "SuccessFully",
        type: "success"
        }, function() {
        window.location = "product.php";
        });
    }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "NotFaild",
        type: "danger"
        }, function() {
        window.location = "product.php";
        });
    }, 100);
    </script>
    ';
    }
}




$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'add_img') {

    include "../config/config.php";

    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '</pre>';
    // exit;


    $cate_id = $_POST['cate_id'];
    $numrand = (mt_rand());
    function reArrayFiles($file)
    {
        $file_ary = array();
        $file_count = count($file['name']);
        $file_key = array_keys($file);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_key as $val) {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
    }


    $img_desc = reArrayFiles($_FILES['imagesfile']);
    $numFiles = $_POST['numFiles'];
    if ($numFiles != 0) {
        foreach ($img_desc as $val) {
            $ArrayList = end(explode(".", $val['name']));
            $newname = "PG-" . date("Hisdmy") . (mt_rand()) . "." . $ArrayList;
            copy($val['tmp_name'], "../images/gallery/" . $newname);
            $path = "images/gallery/";
            $sql = "INSERT INTO gallery(cate_id,gall_img) values ('$cate_id','$path$newname')";
            $query = mysql_query($sql);


            echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
            ';
            if ($query) {
                echo '
                <script>
                   setTimeout(function() {
                    swal({
                        title: "SuccessFully",
                        type: "success"
                    }, function() {
                        window.location = "project.php";
                    });
                }, 100);
            </script>
            ';
            } else {
                echo '
            <script>
               setTimeout(function() {
                swal({
                    title:"NotFaild!",
                    type: "danger"
                }, function() {
                    window.location = "project.php";
                });
            }, 100);
        </script>
        ';
            }
        }

    }
}

//ลบข้อมูล
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'delete_gall') {
    include "../config/config.php";
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';
    // print("delete");
    // exit;

    $gall_id = $_GET['gall_id'];

    $sql = "SELECT * FROM gallery WHERE gall_id = $gall_id"; //คิวรี่ข้อมูลออกมา
    $resault = mysql_query($sql);
    $row = mysql_fetch_array($resault);
    $path = "../"; //path ที่ไว้เก็บรูปภาพ		
    $newname = $row['gall_img']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล			 
    $file = $path . $newname;
    if (unlink($file)) {
        echo ("deleted $file");
    } else {
        echo ("error");
    }

    $sql_del = "DELETE FROM  gallery  WHERE gall_id='$gall_id' ";
    $result_del = mysql_query($sql_del) or die("Error in query: $sql_del " . mysql_error());

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result_del) {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "SuccessFully",
        type: "success"
        }, function() {
        window.location = "gallery.php";
        });
    }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
        setTimeout(function() {
        swal({
        title: "NotFaild",
        type: "danger"
        }, function() {
        window.location = "gallery.php";
        });
    }, 100);
    </script>
    ';
    }
}


$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act == 'add_keyword') {

    include "../config/config.php";

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;	


    $keyword_name = $_POST['keyword_name'];
    

    $sqladd = "INSERT INTO keywordsss(keyword_name)VALUES('$keyword_name')";
    $result = mysql_query($sqladd) or die("Error in query: $sqladd
    query " . mysql_error());
    mysql_close($conn);


    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';
    if ($result) {
        echo '
        <script>
           setTimeout(function() {
            swal({
                title: "SuccessFully",
                type: "success"
            }, function() {
                window.location = "keyword.php?act=add";
            });
        }, 100);
    </script>
    ';
    } else {
        echo '
    <script>
       setTimeout(function() {
        swal({
            title:"NotFaild!",
            type: "danger"
        }, function() {
            window.location = "keyword.php?act=add";
        });
    }, 100);
</script>
';
    }
}




?>