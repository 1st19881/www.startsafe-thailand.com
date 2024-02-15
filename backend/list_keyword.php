<?php include("../config/config.php");

$sql_keywordsss = "SELECT * FROM  keywordsss";
$result_kw = mysql_query($sql_keywordsss);

$i = 1;

?>
<div class="card">
    <div class="card-body">
        <div class="card p-2">
            <h5 class="card-header text-center">จัดการ keyword</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped card-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>keyword</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="p-3">
                            <a class="btn btn-primary mb-3" href="keyword.php?act=add">Add keyword</a>
                        </div>
                        <?php while ($row_kw = mysql_fetch_array($result_kw)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium"><?php echo $row_kw["keyword_name"]; ?></span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="category.php?act=edit&key_id=<?php echo $row_kw["key_id"]; ?>"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                            <a class="dropdown-item" href="save.php?act=delete&key_id=<?php echo $row_kw["key_id"]; ?>" onclick="return confirm('Are You Sure ?')"><i class="bx bx-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

