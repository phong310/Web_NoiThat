<?php
include_once "../core/Connect.php";
?>
<?php
include_once "../layout/header.php";
?>

<!-- MAIN CONTENT-->

<div class="main-content">
    <div class="section__content section__content--p30">


        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Properties</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="time">
                                        <option selected="selected">Today</option>
                                        <option value="">3 Days</option>
                                        <option value="">1 Week</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="CreateSp.php"> <i class="zmdi zmdi-plus"></i>ADD</button></a>
                                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                    <select class="js-select2" name="type">
                                        <option selected="selected">Export</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <form action="" method="POST">
                                <div class="row">
                                    <input class="au-input au-input--xl" type="text" name="Search"
                                        placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <thead>
                            <tr>
                                <th>TÊN SẢN PHẨM  </th>
                                <th>ẢNH</th>
                                <th>SỐ LƯỢNG </th>
                                <th>MÔ TẢ</th>
                                <th>GIÁ NHẬP</th>
                                <th>GIÁ BÁN</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                           $query=mysqli_query($conn,"SELECT * FROM SANPHAM");
                                          // $index = 1;
                                           while($row=mysqli_fetch_array($query))
                                           {
                                             echo '
                                               <tr>
                                                 <td>'.$row['TENSP'].'</td>
                                                 <td><img src="http://localhost/webNoiThat/Client/img_sp/'.$row['ANH'].'" width=800%,height=800% /></td>
                                                 <td>'.$row['SOLUONG'].'</td>
                                                 <td>'.$row['MOTA'].'</td>
                                                 <td>'.$row['GIANHAP'].'</td>
                                                 <td>'.$row['GIABAN'].'</td>
                                                 <td><a href="EditSP.php? MASP='.$row['MASP'].'"><i class="fa-solid fa-pen"></i></a>
                                                 <br>
                                                 <br>
                                                 <a href="DetailSP.php? MASP='.$row['MASP'].'"><i class="fa-solid fa-circle-info"></i></a>
                                                 <br>
                                                 <br>
                                                 <a onclick href="DeleteSP.php? MASP='.$row['MASP'].'"><i class="fa-solid fa-trash-can"></a></td>
                                               </tr>
                                             ';
                                           }
                                        ?>

                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        <?php
            include_once "../layout/fooder.php";
        ?>