<div class="card " style="padding: 100px 40px;">
    <div class="container">
        <div class="text-center">
            <h3>Add keyword</h3>
        </div>
        <form action="save.php?act=add_keyword" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Keyword</label>
                <input type="text" name="keyword_name" class="form-control" id="defaultFormControlInput" placeholder="Keyword" aria-describedby="defaultFormControlHelp" />
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success" type="submit">save</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
</div>

