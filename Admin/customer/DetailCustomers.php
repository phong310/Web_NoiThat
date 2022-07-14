<?php
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
    <div class="au-card-inner">
        <div class="table-responsive">
            <table class="table table-top-countries">
                <tbody>
                    <?php
                     include "../core/Connect.php";
                     $MAKH=$_GET['MAKH'];
                     $query=mysqli_query($conn,"SELECT * from KHACHHANG where MAKH=$MAKH");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <tr>
                                <td>MÃ KHÁCH HÀNG</td>
                                <td class="text-right">'.$value['MAKH'].'</td>
                            </tr>
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
                                <td>TICHDIEM</td>
                                <td class="text-right">'.$value['TICHDIEM'].'</td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td class="text-right">'.$value['EMAIL'].'</td>
                            </tr>
                            
                            <td><a href="EditCustomers.php? MAKH='.$value['MAKH'].'"><button class="btn btn-warning">Edit</button></a></td>
                            ';
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "../layout/fooder.php";
?>