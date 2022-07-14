<?php
ob_start();
include "../layout/header.php";
?>
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php
        include "../core/Connect.php";
        $MALSP=$_GET['MALSP'];
        $query=mysqli_query($conn,"SELECT * FROM LOAISP where MALSP=$MALSP");
        while($row=mysqli_fetch_array($query))
        {
            echo'
           
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">TÊN LOẠI SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
            
                    <input type="text" id="TENLSP" name="TENLSP"value='.$row['TENLSP'].' class="form-control">
                    
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
    $MALSP=$_GET['MALSP'];
    $TENLSP=$_POST['TENLSP'];

    $sql ="UPDATE LOAISP  SET TENLSP ='$TENLSP' Where MALSP='$MALSP'";
    if ($conn->query($sql) === TRUE) {
        // echo "Sửa thành công";
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