<?php
include "../layout/header.php";

?>
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <?php
        include "../core/Connect.php";
        $MAKH=$_GET['MAKH'];
        $query=mysqli_query($conn,"SELECT * from KHACHHANG where MAKH=$MAKH");
        while($row=mysqli_fetch_array($query))
        {
            echo'
           
            <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">TÊN KHÁCH HÀNG</label>
                    </div>
                    <div class="col-12 col-md-9">
                
                        <input type="text" id="TENKH" name="TENKH"value="'.$row['TENKH'].'" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">SỐ ĐIỆN THOẠI</label>
                </div>
                <div class="col-12 col-md-9">
            
                    <input type="text" id="SDT" name="SDT" value="'.$row['SDT'].'" class="form-control">
                    
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">ĐỊA CHỈ</label>
            </div>
            <div class="col-12 col-md-9">
        
                <input type="text" id="TENKH" name="DIACHI"value="'.$row['DIACHI'].'" class="form-control">
                
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">TÍCH ĐIỂM</label>
            </div>
            <div class="col-12 col-md-9">

                <input type="text" id="TD" name="TD"value='.$row['TICHDIEM'].' class="form-control">
                
            </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">EMAIL</label>
            </div>
            <div class="col-12 col-md-9">

                <input type="text" id="TENKH" name="EMAIL"value='.$row['EMAIL'].' class="form-control">
                
            </div>
            </div>
                ';
}
        ?>
        <form>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm" name="update">
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
    $MAKH=$_GET['MAKH'];
    $TENKH=$_POST['TENKH'];
    $SDT=$_POST['SDT'];
    $DC=$_POST['DIACHI'];
    $TD=$_POST['TD'];
    $EMAIL=$_POST['EMAIL'];

    $sql ="UPDATE KHACHHANG  SET TENKH ='$TENKH',SDT='$SDT',DIACHI='$DC',TICHDIEM='$TD',EMAIL='$EMAIL' Where MAKH='$MAKH'";
    if ($conn->query($sql) === TRUE) {
        echo "Sửa thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
     
    // Ngắt kết nối
    $conn->close();
}

?>

<?php
    include_once "../layout/fooder.php";
    ?>