<?php
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
<?php
                     include "../core/Connect.php";
                     $MAKH=$_GET['MAKH'];
                     $query=mysqli_query($conn,"SELECT * from KHACHHANG where MAKH=$MAKH");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                            <div class="au-card-inner">
                                <div class="table-reKHonsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                                <tr>
                                                    <td>TÊN KHÁCH HÀNG</td>
                                                    <td class="text-right">'.$value['TENKH'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>SĐT</td>
                                                    <td class="text-right">'.$value['SDT'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>ĐỊA CHỈ</td>
                                                    <td class="text-right">'.$value['DIACHI'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>TÍCH ĐIỂM</td>
                                                    <td class="text-right">'.$value['TICHDIEM'].'</td>
                                                </tr>
                                                <tr>
                                                <td>EMAIL</td>
                                                <td class="text-right">'.$value['EMAIL'].'</td>
                                            </tr>
                                                
                                                </tbody>
                                      </table>
                                            </div>
                                        </div>
                                    </div>

                            ';
                        }
                        
                        
                    ?>

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
</form>
<?php
include "../core/Connect.php";
if (isset($_POST['delete'])){
    $MAKH=$_GET['MAKH'];
   
    $sql ="DELETE From KHACHHANG Where MAKH='$MAKH'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa thành công";

    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
     
    // Ngắt kết nối
    $conn->close();
}

?>
<?php
include "../layout/fooder.php";
?>