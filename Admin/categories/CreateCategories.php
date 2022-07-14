<?php
ob_start();
include "../layout/header.php";
?>
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">TÊN LOẠI SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="TENLSP" name="TENLSP" placeholder="Text" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">MÃ LOẠI SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="MALSP" name="MALSP" placeholder="Text" class="form-control">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="add" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
        <a href="IndexCategories.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>

</div>
<?php
include "../core/Connect.php";

if(isset($_POST["add"]))
{
    $TENLSP=$_POST['TENLSP'];
    $MALSP=$_POST['MALSP'];
    $sql ="INSERT into LOAISP (TENLSP, MALSP) values ('".$TENLSP."','".$MALSP."')";
    if ($conn->query($sql) === TRUE) {
    // echo "Thêm  thành công";
    header("location: IndexCategories.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
}
?>




<?php
    include_once "../layout/fooder.php";
    ob_end_flush();
?>