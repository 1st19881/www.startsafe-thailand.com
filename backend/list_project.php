<?php include("../config/config.php");

$sql_pd = "SELECT * FROM product as p
INNER JOIN category as c ON p.cate_id = c.cate_id";
$result_pj = mysql_query($sql_pd);

$i = 1;

?>
<div class="card">
    <div class="card-body">
        <div class="card p-2">
            <h5 class="card-header text-center">จัดการ Project</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped card-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project</th>
                            <th>Category</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <div class="p-3">
                            <a class="btn btn-primary mb-3" href="project.php?act=add">Add Project</a>
                        </div>
                        <?php while ($row_pj = mysql_fetch_array($result_pj)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium"><?php echo $row_pj["project_name"]; ?></span></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium"><?php echo $row_pj["cate_name"]; ?></span></td>
                                <td><img src="../<?php echo $row_pj["project_img"]; ?>" width="100px" alt=""></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="project.php?act=edit&cate_id=<?php echo $row_pj["cate_id"]; ?>"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
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

