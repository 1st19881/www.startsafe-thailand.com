<?php include("../config/config.php");
$product_id = $_GET["product_id"];
$cate_id = $_GET["cate_id"];
$sql_ct = "SELECT * FROM  category WHERE cate_id !=$cate_id";
$result_ct = mysql_query($sql_ct);

$sql_detail = "SELECT * FROM  product  as p
INNER JOIN category as c ON p.cate_id = c.cate_id 
WHERE p.product_id =$product_id";
$result_dt = mysql_query($sql_detail);
$row_dt = mysql_fetch_array($result_dt);


?>
<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>เพิ่มสินค้า</h3>
        </div>
        <form action="save.php?act=edit_pd" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ชื่อสินค้า ภาษาไทย</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="product_nameth" value="<?php echo $row_dt["product_nameth"];  ?>" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ชื่อสินค้า ภาษาอังกฤษ</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="product_nameen" value="<?php echo $row_dt["product_nameen"];  ?>" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">รุ่น</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="model" value="<?php echo $row_dt["model"];  ?>" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">หมวดหมู่</label>
                <div class="col-md-10">
                    <select class="form-select" name="cate_id" id="exampleFormControlSelect1" aria-label="Default select example" required>
                        <option name="cate_id" value="<?php echo $row_dt["cate_id"] ?>"><?php echo $row_dt["cate_name"];  ?></option>
                        <?php while ($row_ct = mysql_fetch_array($result_ct)) { ?>
                            <option value="<?php echo $row_ct["cate_id"] ?>">- <?php echo $row_ct["cate_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพหน้าปก ขนาด 600X450 </label>
                <div class="col-md-10">
                    <input class="form-control" name="product_img" type="file" id="formFile" onchange="loadFile(event)">
                    <div class="py-3">
                        <img id="output" width="150px" />
                    </div>
                    <div class="py-3">
                        <img src="../<?php echo $row_dt["product_img"];  ?>" width="150px" />
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพสเปคสินค้า</label>
                <div class="col-md-10">
                    <input class="form-control" name="product_spec" type="file" id="formFile1">
                    <div class="py-3">
                        <img src="../<?php echo $row_dt["product_spec"];  ?>" width="150px" />
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">รายละเอียดสินค้า</label>
                <div class="col-md-10">
                    <textarea name="product_detail" class="form-control" id="detail"><?php echo $row_dt["product_detail"];  ?></textarea>
                </div>
            </div>
            <input type="hidden" name="product_id" value="<?php echo $row_dt["product_id"]  ?>">
            <input type="hidden" name="product_img1" value="<?php echo $row_dt["product_img"];  ?>">
            <input type="hidden" name="product_spec1" value="<?php echo $row_dt["product_spec"];  ?>">
            <div class="mb-3 text-center">
                <button class="btn btn-success" type="submit">save</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('detail');

    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
</script>