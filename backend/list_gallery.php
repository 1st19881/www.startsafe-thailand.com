<?php include("../config/config.php");

$sql_gallery = "SELECT p.*,c.* FROM  gallery as p
INNER JOIN category as c ON p.cate_id = c.cate_id";
$result_g = mysql_query($sql_gallery);

$i = 1;

?>
<div class="card">
    <div class="card-body">
        <div class="card p-2">
            <h5 class="card-header text-center">จัดการ Gallery</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped card-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Images</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <div class="p-3">
                            <a class="btn btn-primary mb-3" href="gallery.php?act=add">Add Gallery</a>
                        </div>
                        <?php while ($row_g = mysql_fetch_array($result_g)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium"><?php echo $row_g["cate_name"]; ?></span></td>
                                <td><img src="../<?php echo $row_g["gall_img"]; ?>" width="100px" alt=""></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="save.php?act=delete_gall&gall_id=<?php echo $row_g["gall_id"]; ?>"><i class="bx bx-trash me-1"></i>Delete</a>
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

