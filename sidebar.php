<?php include("config/config.php");

$sql_type = "SELECT c.cate_id,c.cate_name,COUNT(p.cate_id) as ctotal FROM category as c 
LEFT JOIN product as p ON p.cate_id = c.cate_id
GROUP BY c.cate_id
ORDER BY c.cate_name DESC";
$result = mysql_query($sql_type);

$sql_pronew = "SELECT * FROM product 
ORDER BY product_id DESC LIMIT 4";
$rs_new = mysql_query($sql_pronew);

?>
<!-- $querytotal = "SELECT t.type_id, t.type_name, COUNT(p.type_id) as ttotal
  FROM tbl_type as  t 
  LEFT JOIN tbl_dormitory as  p ON t.type_id=p.type_id , 
  GROUP BY t.type_id
  ORDER BY t.type_name ASC";
	$result_total =mysqli_query($con, $querytotal)  -->
<div class="row g-4">
    <div class="col-lg-12">
        <div class="mb-3">
            <h4> หมวดหมู่สินค้า</h4>
            <ul class="list-unstyled fruite-categorie">
                <?php while ($row_type = mysql_fetch_array($result)) {  ?>
                    <li>
                        <div class="d-flex justify-content-between fruite-name ">
                            <a href="product.php?act=category&cate_id=<?php echo $row_type["cate_id"]; ?>" class="text-primary hover_side"><i class="fas fa-angle-right me-2"></i><?php echo $row_type["cate_name"];  ?></a>
                            <span>(<?php echo $row_type['ctotal'];?>)</span>
                        </div>
                    </li>
                <?php }  ?>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <h4 class="mb-3"> สินค้าใหม่ล่าสุด</h4>
        <?php while($row_new = mysql_fetch_array($rs_new)) { ?>
            <div class="d-flex align-items-center justify-content-start">
                <div class="rounded me-4" style="width: 100px; height: 100px;">
                    <img src="<?php echo $row_new["product_img"] ?>" class="img-fluid rounded" alt="">
                </div>
                <div>
                    <h6 class="mb-2 product_new"><?php echo $row_new["product_nameth"] ?></h6>
                    <div class="d-grid gap-2">
                        <a href="detail.php?product_id=<?php echo $row_new["product_id"];?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fas fa-angle-right me-2 text-primary"></i>รายละเอียด</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="d-flex justify-content-center my-4">
            <a href="product.php" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">สินค้าทั้งหมด</a>
        </div>
    </div>
</div>