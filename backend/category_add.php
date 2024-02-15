<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>Add Category</h3>
        </div>
        <form action="save.php?act=add" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Cate_name</label>
                <input type="text" name="cate_name" class="form-control" id="defaultFormControlInput" placeholder="Cate_name" aria-describedby="defaultFormControlHelp" />
            </div>
            <div class="mb-3 ">
                <label for="html5-text-input" class="col-md-2 col-form-label">ภาพหน้าปก ขนาด 600X450 </label>
                <input class="form-control" name="cate_img" type="file" id="formFile" onchange="loadFile(event)" required>
                <div class="py-3">
                    <img id="output" width="150px" />
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