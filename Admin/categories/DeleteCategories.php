<?php
// ob_start();
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
                    <?php
                     include "../core/Connect.php";
                     $MALSP=$_GET['MALSP'];
                     $query=mysqli_query($conn,"SELECT * FROM LOAISP where MALSP=$MALSP");
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
                                                    <td class="text-right">'.$value['MALSP'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>TÊN NHÀ CUNG CẤP</td>
                                                    <td class="text-right">'.$value['TENLSP'].'</td>
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
                  <button type="submit" class="btn btn-danger" name ="delete"> Delete </button>
                    </form>  
<?php
include "../core/Connect.php";
if (isset($_POST['delete'])){
    $MALSP=$_GET['MALSP'];
   
    $sql ="DELETE From LOAISP Where MALSP='$MALSP'";
    if ($conn->query($sql) === TRUE) {
        // echo "Xóa thành công";
        header("location: IndexCategories.php");

    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
     
    // Ngắt kết nối
    $conn->close();
}

?>
<?php
include "../fooder.php";
// ob_end_flush();
?>