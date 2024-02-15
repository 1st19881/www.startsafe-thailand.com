<?php include("../config/config.php");

$sql_category = "SELECT * FROM  category";
$result_ct = mysql_query($sql_category);

$i = 1;

?>
<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>เพิ่มสินค้า</h3>
        </div>
        <form action="save.php?act=add_pd" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ชื่อสินค้า ภาษาไทย</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="product_nameth" value="" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ชื่อสินค้า ภาษาอังกฤษ</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="product_nameen" value="" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">รุ่น</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="model" value="" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">หมวดหมู่</label>
                <div class="col-md-10">
                    <select class="form-select" name="cate_id" id="exampleFormControlSelect1" aria-label="Default select example" required>
                        <option selected>เลือกหมวดหมู่:</option>
                        <?php while ($row_ct = mysql_fetch_array($result_ct)) { ?>
                            <option value="<?php echo $row_ct["cate_id"] ?>">- <?php echo $row_ct["cate_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพหน้าปก ขนาด 600X450 </label>
                <div class="col-md-10">
                    <input class="form-control" name="product_img" type="file" id="formFile" onchange="loadFile(event)" required>
                    <div class="py-3">
                        <img id="output" width="150px" />
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพสเปคสินค้า</label>
                <div class="col-md-10">
                    <input class="form-control" name="product_spec" type="file" id="formFile1">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">รายละเอียดสินค้า</label>
                <div class="col-md-10">
                    <textarea name="product_detail" class="form-control" id="detail"></textarea>
                </div>
            </div>
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