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
                     $id=$_GET['id'];
                     $query=mysqli_query($conn,"SELECT * FROM blog where id=$id");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            
                              
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
                                                <td><a href="Editblog.php? id='.$value['id'].'"><button class="btn btn-warning">Edit</button></a></td>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

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