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
                     $MALSP=$_GET['MALSP'];
                     $query=mysqli_query($conn,"SELECT * FROM LOAISP where MALSP=$MALSP");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <tr>
                                <td>MÃ LOẠI SẢN PHẨM</td>
                                <td class="text-right">'.$value['MALSP'].'</td>
                            </tr>
                            <tr>
                                <td>TÊN SẢN PHẨM</td>
                                <td class="text-right">'.$value['TENLSP'].'</td>
                            </tr>
                            
                            <td><a href="EditCategories.php? MALSP='.$value['MALSP'].'"><button class="btn btn-warning">Edit</button></a></td>
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