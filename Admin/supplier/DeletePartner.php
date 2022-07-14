<?php
ob_start();
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
                    <?php
                     include "../core/Connect.php";
                     $MANCC=$_GET['MANCC'];
                     $query=mysqli_query($conn,"SELECT * FROM NHACUNGCAP where MANCC=$MANCC");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                            <div class="au-card-inner">
                                <div class="table-responsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                                <tr>
                                                    <td>MÃ NHÀ CUNG CẤP</td>
                                                    <td class="text-right">'.$value['MANCC'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>TÊN NHÀ CUNG CẤP</td>
                                                    <td class="text-right">'.$value['TENNCC'].'</td>
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
                  <button type="submit" class="btn btn-danger" name ="delete">
                     Delete
        </button>
                    </form>  
<?php
include "../core/Connect.php";
if (isset($_POST['delete'])){
    $MANCC=$_GET['MANCC'];
   
    $sql ="DELETE FROM NHACUNGCAP Where MANCC='$MANCC'";
    if ($conn->query($sql) === TRUE) {
        // echo "Xóa thành công";
        header("location: IndexPartner.php");

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