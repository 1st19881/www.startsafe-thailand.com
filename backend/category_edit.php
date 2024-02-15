<?php include("../config/config.php");
$cate_id = $_GET["cate_id"];
$sql_category = "SELECT * FROM  category WHERE cate_id=$cate_id";
$result_ct = mysql_query($sql_category);
$row_ct = mysql_fetch_array($result_ct);

?>
<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>Edit Category</h3>
        </div>
        <form action="save.php?act=edit" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Cate_name</label>
                <input type="text" name="cate_name" class="form-control" id="defaultFormControlInput" placeholder="Cate_name" aria-describedby="defaultFormControlHelp" / value="<?php echo $row_ct["cate_name"]; ?>">
            </div>
            <div class="mb-3">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพหน้าปก ขนาด 600X450 </label>
                <input class="form-control" name="cate_img" type="file" id="formFile" onchange="loadFile(event)">
                <div class="py-3">
                    <img id="output" width="150px" />
                    <div class="py-3">
                        <img src="../<?php echo $row_ct["cate_img"];  ?>" width="150px" />
                    </div>
                </div>
            </div>
            <div class="mb-3 text-center">
                <input type="text" name="cate_img1" value="<?php echo$row_ct["cate_img"]; ?>">
                <input type="hidden" name="cate_id" value="<?php echo $cate_id; ?>">
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