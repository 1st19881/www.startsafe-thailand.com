<style>
    .img-bd-list{
	border:1px solid #ababab;
}
.img-list-main{
    text-align:center;
	padding:20px;
	margin:10px;
    height:300px;
}
.img-list{
    text-align:center;
	padding:5px;
    width:100%;
    margin-bottom:10px;
    
    float:left;
}
.img-list img{
    width:100%;
    height:100%;
}
#ShowPics img{
    width:250px;
} 
#ShowIMGlist {
    border: 1px solid #ababab;
    width: 190px;
    margin: 10px;
    padding: 20px;
    text-align: center;
    float: left;
}
#ShowIMGlist img {
    width: 150px;
}
.btn-del{
	margin-top:10px;	
}

</style>
<?php include("../config/config.php");

$sql_category = "SELECT * FROM  category";
$result_ct = mysql_query($sql_category);

$i = 1;

?>
<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>Add Gallery</h3>
        </div>
        <form action="save.php?act=add_img" method="post" enctype="multipart/form-data">
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
                    <input type="file" onchange="previewMultiple(event)" id="image-add" name="imagesfile[]" class="form-control" multiple="multiple">
                    <div id="ShowPics">
                        <input type="hidden" id="numFiles" name="numFiles" value="0">
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


<script>
    // Show Images Gallery 
    function previewMultiple(event) {
        var images = document.getElementById("image-add");
        var numFiles = images.files.length;
        for (i = 0; i < numFiles; i++) {
            var urls = URL.createObjectURL(event.target.files[i]);
            document.getElementById("ShowPics").innerHTML += '<img style="margin:10px;padding:10px; border:1px solid #000; " src="' + urls + '">';
        }
        var type = document.getElementById("numFiles").value = numFiles;
    }
</script>