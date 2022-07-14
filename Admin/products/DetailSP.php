<?php
include "../layout/header.php";
?>
<?php
include_once "../core/Connect.php";
?>
<div class="au-card au-card--bg-blue au-card-top-countries m-b-30" style="padding-top:80px">
    <div class="au-card-inner">
        <div class="table-responsive">
            <table class="table table-top-countries">
                <tbody>
                    <?php
                     include "../core/Connect.php";
                     $MASP=$_GET['MASP'];
                     $query=mysqli_query($conn,"select * from SANPHAM where MASP=$MASP");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <tr>
                                <td>TÊN SẢN PHẨM</td>
                                <td class="text-right">'.$value['TENSP'].'</td>
                            </tr>
                            <tr>
                                <td>NGÀY SẢN XUẤT</td>
                                <td class="text-right">'.$value['NSX'].'</td>
                            </tr>
                            <tr>
                                <td>HẠN SỬ DỤNG</td>
                                <td class="text-right">'.$value['HSD'].'</td>
                            </tr>
                            <tr>
                                <td>MÃ NHÀ CUNG CẤP</td>
                                <td class="text-right">'.$value['MANCC'].'</td>
                            </tr>
                            <tr>
                                <td>ẢNH</td>
                                <td class="text-right">'.$value['ANH'].'</td>
                            </tr>
                            <tr>
                                <td>SỐ LƯỢNG</td>
                                <td class="text-right">'.$value['SOLUONG'].'</td>
                            </tr>
                            <tr>
                                <td>MÔ TẢ</td>
                                <td class="text-right">'.$value['MOTA'].'</td>
                            </tr>
                            <tr>
                                <td>MÃ LOẠI SẢN PHẨM</td>
                                <td class="text-right">'.$value['MALSP'].'</td>
                            </tr>
                            <tr>
                                <td>GIÁ NHẬP</td>
                                <td class="text-right">'.$value['GIANHAP'].'</td>
                            </tr>
                            <tr>
                                <td>GIÁ BÁN</td>
                                <td class="text-right">'.$value['GIABAN'].'</td>
                            </tr>
                            <td><a href="EditSP.php? MASP='.$value['MASP'].'"><button class="btn btn-warning">Edit</button></a></td>
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