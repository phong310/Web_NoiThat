<?php
ob_start();
include "../layout/header.php";
?>
<div class="card">
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" style="padding-top: 80px">
        <?php
        include "../core/Connect.php";
        $MASP=$_GET['MASP'];
        $query=mysqli_query($conn,"select * from SANPHAM where MASP=$MASP");
        while($row=mysqli_fetch_array($query))
        {
            echo'
           
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">TÊN SẢN PHẨM</label>
            </div>
            <div class="col-12 col-md-9">
        
                <input type="text" id="TENSP" name="TENSP"value='.$row['TENSP'].' class="form-control" required>
                
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="email-input" class=" form-control-label">NGÀY SẢN XUẤT</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="date" id="email-input" name="NSX"value='.$row['NSX'].' class="form-control" >
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="password-input" class=" form-control-label">HẠN SỬ DỤNG</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="date" id="password-input" name="HSD"value='.$row['HSD'].' class="form-control">
               
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="disabled-input" class=" form-control-label">MÃ LOẠI SẢN PHẨM</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="disabled-input" name="MNCC"value='.$row['MALSP'].'  class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="disabled-input" class=" form-control-label">SỐ LƯỢNG</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="disabled-input" name="SL"value='.$row['SOLUONG'].'  class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="textarea-input" class=" form-control-label">MÔ TẢ</label>
            </div>
            <div class="col-12 col-md-9">
                <textarea name="MOTA" id="textarea-input" rows="9" class="form-control">'.$row['MOTA'].'</textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">MÃ LOẠI SẢN PHẨM</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="disabled-input" name="MLSP" value='.$row['MALSP'].'  class="form-control">
            </div>
           
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">GIÁ NHẬP</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="disabled-input" name="GIANHAP"value='.$row['GIANHAP'].'  class="form-control">
            </div>
           
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">GIÁ BÁN</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="disabled-input" name="GIABAN"value='.$row['GIABAN'].'  class="form-control">
            </div>
           
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="file-multiple-input" class=" form-control-label">ẢNH</label>
                
            </div>
            <div class="col-12 col-md-9">
            <input type="text" class="form-control" id="ANH" name="ANH" value="'.$row['ANH'].'">
            <input type="file" class="form-control" id="ANH" name="ANH">
                <img src="http://localhost/webNoiThat/Client/img_sp/'.$row['ANH'].'" width="500" height="100">
            </div>
        </div>
            ';
        }
        ?>
           
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name ="update">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>


    </div>
    
</div>    
<?php
include "../core/Connect.php";
if (isset($_POST['update'])){
    $MASP=$_GET['MASP'];
    $TSP=$_POST['TENSP'];
    $NSX=$_POST['NSX'];
    $HSD=$_POST['HSD'];
    $MNCC=$_POST['MNCC'];
    $SL=$_POST['SL'];
    $MOTA=$_POST['MOTA'];
    $MLSP=$_POST['MLSP'];
    $GIANHAP=$_POST['GIANHAP'];
    $GIABAN=$_POST['GIABAN'];
    $FILE = $_FILES['ANH']["name"];
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_FILES['ANH']))) {

        $names      = $_FILES['ANH']['name'];
        $types      = $_FILES['ANH']['type'];
        $tmp_names  = $_FILES['ANH']['tmp_name'];
        $errors     = $_FILES['ANH']['error'];
        $sizes      = $_FILES['ANH']['size'];

            if ($errors == 0)
            {
                $target_dir    = "../../Client/img_sp/";
                 $target_file   = $TSP. basename($_FILES['ANH']['name']);
                 move_uploaded_file($tmp_names, $target_dir.$target_file);
            }
    }
    $sql ="UPDATE `sanpham`  SET TENSP ='$TSP', NSX='$NSX',HSD='$HSD', MANCC='$MNCC', ANH='$target_file', SOLUONG='$SL', MOTA='$MOTA', MALSP='$MLSP', GIANHAP='$GIANHAP', GIABAN='$GIABAN' Where MASP='$MASP'";
    if ($conn->query($sql) === TRUE) {
        echo "Sửa thành công";
        header("location: IndexProduct.php");
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