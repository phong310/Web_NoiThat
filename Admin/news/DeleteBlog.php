<?php
ob_start();
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
                    <?php
                     include "../core/Connect.php";
                     $id=$_GET['id'];
                     $query=mysqli_query($conn,"SELECT * FROM blog where id=$id");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                            <div class="au-card-inner">
                                <div class="table-responsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                                <tr>
                                                    <td>Ảnh</td>
                                                    <td class="text-right">'.$value['anh'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Mô tả</td>
                                                    <td class="text-right">'.$value['mota'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiêu đề</td>
                                                    <td class="text-right">'.$value['tieude'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td class="text-right">'.$value['email'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Trạng Thái</td>
                                                    <td class="text-right">'.$value['trangthai'].'</td>
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
                       <button type="submit" class="btn btn-danger" name ="delete">Delete</button>
                  </form>  
<?php
include "../core/Connect.php";
if (isset($_POST['delete'])){
    $id=$_GET['id'];
   
    $sql ="DELETE FROM blog Where id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa thành công";
        header("location: IndexBlog.php");

    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
     
    // Ngắt kết nối
    $conn->close();
}

?>
<?php
include "../layout/fooder.php";
ob_end_flush();
?>