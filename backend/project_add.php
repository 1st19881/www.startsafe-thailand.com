<?php include("../config/config.php");

$sql_category = "SELECT * FROM  category";
$result_ct = mysql_query($sql_category);

$i = 1;

?>
<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>Add Project</h3>
        </div>
        <form action="save.php?act=add_pj" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Project_name</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="project_name" value="" id="html5-text-input" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Category</label>
                <div class="col-md-10">
                    <select class="form-select" name="cate_id" id="exampleFormControlSelect1" aria-label="Default select example" required>
                        <option selected>Open this select category</option>
                        <?php while ($row_ct = mysql_fetch_array($result_ct)) { ?>
                            <option value="<?php echo $row_ct["cate_id"] ?>">- <?php echo $row_ct["cate_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">IMAGES</label>
                <div class="col-md-10">
                    <input class="form-control" name="project_img" type="file" id="formFile" onchange="loadFile(event)" required>
                    <div class="py-3">
                        <img id="output" width="150px" />
                    </div>
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