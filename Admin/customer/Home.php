<?php
include "../layout/header.php";
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>

                    </div>
                </div>
            </div>
            <?php
                           $sql2 = "SELECT * FROM truycap";
                                    $query2 = mysqli_query($conn,$sql2) or die("can't connect");
                                    $user = mysqli_num_rows($query2);
                                

                                    $sql3 = "SELECT DISTINCT * FROM truycap where trangthai='1'";
                                    $query3 = mysqli_query($conn,$sql3) or die("can't connect");
                                    $user_ol = mysqli_num_rows($query3);
                                   // echo $user_ol;
                       echo '     
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>
                                                '.$user.'
                                                </h2>
                                                <span>Số lượt truy cập</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>'.$user_ol.'</h2>
                                                <span>Đang Online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ';
                            ?>
            <?php
                            include "../core/Connect.php";
                            $query=mysqli_query($conn,"Select sum(soluong) as sl from giohang where trangthai=1");
                            $val=mysqli_fetch_row($query);
                            echo '
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">

                                                <h2>'.$val[0].'</h2>
                                                <span>Số lượng đã bán</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                            ?>
            <?php
                            include "../core/Connect.php";
                            $query=mysqli_query($conn,"Select sum(TONGTIEN) as tong from giohang where trangthai=1");
                            $val=mysqli_fetch_row($query);
                            echo '
                            
                            <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4" style="height:279px">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-money"></i>
                                        </div>
                                        <div class="text">
                                            <h2 style="font-size:28px">'.number_format ($val[0]).'đ</h2>

                                            <span>Doanh Thu</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart4" style="height:50px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                            ';
                            ?>


        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="au-card recent-report">
                    <div class="au-card-inner">
                        <h3 class="title-2">recent reports</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot--green"></span>
                                    <span>services</span>
                                </div>
                            </div>
                            <div class="chart-info__right">
                                <div class="chart-statis">
                                    <span class="index incre">
                                        <i class="zmdi zmdi-long-arrow-up"></i>25%
                                    </span>
                                    <span class="label">products</span>
                                </div>
                                <div class="chart-statis mr-0">
                                    <span class="index decre">
                                        <i class="zmdi zmdi-long-arrow-down"></i>10%
                                    </span>
                                    <span class="label">services</span>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card chart-percent-card">
                    <div class="au-card-inner">
                        <h3 class="title-2 tm-b-5">char by %</h3>
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="chart-note-wrap">
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--red"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="percent-chart">
                                    <canvas id="percent-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">

        </div>
        <div class="row">
            <div class="col-lg-9">
                <h2 class="title-1 m-b-25">Đơn hàng đã bán</h2>

                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">

                        <thead>
                            <tr>
                                <th>HĐ</th>
                                <th>Ngày lập</th>
                                <th>Tổng tiền</th>
                                <th class="text-right">SL</th>
                                <th class="text-right">KH</th>
                                <th class="text-right">Địa chỉ</th>
                            </tr>
                        </thead>
                        <?php
                        include "../core/Connect.php";
                        $query=mysqli_query($conn,"select * from giohang where trangthai=1");
                        while($row=mysqli_fetch_array($query))
                        {
                           echo' <tbody>
                            <tr>
                                <td>'.$row['MAGH'].'</td>
                                <td>'.$row['NGAYLAP'].'</td>
                                <td>'.number_format($row['TONGTIEN']).'đ</td>
                                <td class="text-right">'.$row['SOLUONG'].'</td>
                                <td class="text-right">'.$row['MAKH'].'</td>

                                <td class="text-right">'.$row['DIACHI'].'</td>
                            </tr>
                            
                        </tbody>';
                        }
                        ?>


                    </table>
                </div>



                <h2 class="title-1 m-b-25">Đơn hàng Chờ duyệt</h2>

                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">

                        <thead>
                            <tr>
                                <th>HĐ</th>
                                <th>Ngày lập</th>
                                <th>Tổng tiền</th>
                                <th class="text-right">SL</th>
                                <th class="text-right">KH</th>
                                <th class="text-right">Địa chỉ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                        include "../core/Connect.php";
                        $query=mysqli_query($conn,"select * from giohang where trangthai=0");
                     
                        while($row=mysqli_fetch_array($query))
                        {
                            $kh=$row['MAKH'];
                            $query1=mysqli_query($conn,"select email from khachhang where MAKH=$kh");
                            $val=mysqli_fetch_row($query1);
                           echo' <tbody>
                            <tr>
                                <td>'.$row['MAGH'].'</td>
                                <td>'.$row['NGAYLAP'].'</td>
                                <td>'.number_format($row['TONGTIEN']).'đ</td>
                                <td class="text-right">'.$row['SOLUONG'].'</td>
                                <td class="text-right">'.$row['MAKH'].'</td>

                                <td class="text-right">'.$row['DIACHI'].'</td>
                                <td><a href="mailto:'.$val[0].'"> Liên hệ</a></td>
                            </tr>
                            
                        </tbody>';
                        }
                        ?>


                    </table>
                </div>

            </div>
            <div class="col-lg-3">
                <h2 class="title-1 m-b-25">Top khách hàng</h2>
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>
                                    <?php
                            include "../core/Connect.php";
                            $stt=0;
                            $query=mysqli_query($conn,"select * from giohang where trangthai=1 order by SOLUONG DESC limit 0,3");
                     
                            while($row=mysqli_fetch_array($query))
                            {
                                $stt++;
                            echo '
                            <tr>
                                <td>'.$stt.'</td>
                                <td class="text-right">'.number_format($row['TONGTIEN']).'</td>
                            </tr>
                            ';

                            }
                             
                            ?>


                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title"
                        style="background-image:url('http://localhost/webNoiThat/templace/images/bg-title-01.jpg');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2021
                        </h3>
                        <button class="au-btn-plus">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="au-task js-list-load">
                        <div class="au-task__title">
                            <p>Tasks for John Doe</p>
                        </div>
                        <div class="au-task-list js-scrollbar3">
                            <div class="au-task__item au-task__item--danger">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Meeting about plan for Admin Template 2021</a>
                                    </h5>
                                    <span class="time">10:00 AM</span>
                                </div>
                            </div>
                            <div class="au-task__item au-task__item--warning">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Create new task for Dashboard</a>
                                    </h5>
                                    <span class="time">11:00 AM</span>
                                </div>
                            </div>
                            <div class="au-task__item au-task__item--primary">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Meeting about plan for Admin Template 2021</a>
                                    </h5>
                                    <span class="time">02:00 PM</span>
                                </div>
                            </div>
                            <div class="au-task__item au-task__item--success">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Create new task for Dashboard</a>
                                    </h5>
                                    <span class="time">03:30 PM</span>
                                </div>
                            </div>
                            <div class="au-task__item au-task__item--danger js-load-item">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Meeting about plan for Admin Template 2021</a>
                                    </h5>
                                    <span class="time">10:00 AM</span>
                                </div>
                            </div>
                            <div class="au-task__item au-task__item--warning js-load-item">
                                <div class="au-task__item-inner">
                                    <h5 class="task">
                                        <a href="#">Create new task for Dashboard</a>
                                    </h5>
                                    <span class="time">11:00 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-task__footer">
                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title"
                        style="background-image:url('http://localhost/webNoiThat/templace/images/bg-title-02.jpg');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-comment-text"></i>New Messages
                        </h3>
                        <button class="au-btn-plus">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="au-inbox-wrap js-inbox-wrap">
                        <div class="au-message js-list-load">
                            <div class="au-message__noti">
                                <p>
                                    You Have
                                    <span>2</span>

                                    new messages
                                </p>
                            </div>
                            <div class="au-message-list">
                                <?php
                                                include "../core/Connect.php";
                                                $query=mysqli_query($conn,"Select * from danhgia");
                                                while ($val=mysqli_fetch_array($query))
                                                {
                                                    echo '
                                                    <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="http://localhost/webNoiThat/templace/images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                    ';
                                                }
                                                ?>


                                <div class="au-message__item">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap online">
                                                <div class="avatar">
                                                    <img src="http://localhost/webNoiThat/templace/images/icon/avatar-04.jpg"
                                                        alt="Michelle Sims">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h5 class="name">Michelle Sims</h5>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span>Yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-message__item">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap">
                                                <div class="avatar">
                                                    <img src="http://localhost/webNoiThat/templace/images/icon/avatar-05.jpg"
                                                        alt="Michelle Sims">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h5 class="name">Michelle Sims</h5>
                                                <p>Purus feugiat finibus</p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span>Sunday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-message__item js-load-item">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap online">
                                                <div class="avatar">
                                                    <img src="http://localhost/webNoiThat/templace/images/icon/avatar-04.jpg"
                                                        alt="Michelle Sims">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h5 class="name">Michelle Sims</h5>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span>Yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-message__item js-load-item">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap">
                                                <div class="avatar">
                                                    <img src="http://localhost/webNoiThat/templace/images/icon/avatar-05.jpg"
                                                        alt="Michelle Sims">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h5 class="name">Michelle Sims</h5>
                                                <p>Purus feugiat finibus</p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span>Sunday</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__footer">
                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                            </div>
                        </div>
                        <div class="au-chat">
                            <div class="au-chat__title">
                                <div class="au-chat-info">
                                    <div class="avatar-wrap online">
                                        <div class="avatar avatar--small">
                                            <img src="http://localhost/webNoiThat/templace/images/icon/avatar-02.jpg"
                                                alt="John Smith">
                                        </div>
                                    </div>
                                    <span class="nick">
                                        <a href="#">John Smith</a>
                                    </span>
                                </div>
                            </div>
                            <div class="au-chat__content">
                                <div class="recei-mess-wrap">
                                    <span class="mess-time">12 Min ago</span>
                                    <div class="recei-mess__inner">
                                        <div class="avatar avatar--tiny">
                                            <img src="http://localhost/webNoiThat/templace/images/icon/avatar-02.jpg"
                                                alt="John Smith">
                                        </div>
                                        <div class="recei-mess-list">
                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit non iaculis</div>
                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="send-mess-wrap">
                                    <span class="mess-time">30 Sec ago</span>
                                    <div class="send-mess__inner">
                                        <div class="send-mess-list">
                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit non iaculis</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="au-chat-textfield">
                                <form class="au-form-icon">
                                    <input class="au-input au-input--full au-input--h65" type="text"
                                        placeholder="Type a message">
                                    <button class="au-input-icon">
                                        <i class="zmdi zmdi-camera"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->


<?php
    include "../layout/fooder.php";
    ?>