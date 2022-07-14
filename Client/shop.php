<!DOCTYPE html>
<!--<?php
session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];    
$name = (isset($_SESSION['name']))?$_SESSION['name']:[];     
?>
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="../Admin/account/login.php"><i class="fa fa-user"></i> Admin</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span
                                        class="key">currency :</span><span class="value">USD </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <img src="img_sp/Screenshot (684).png" />
                    </div>
                </div>
                <?php $tong=0;
                        $sl=0;
                     foreach( $cart as $key => $row): 
                        $sl++;
                      $tong += $row['GIABAN'] * $row['soluong'];
                  
                endforeach ?>
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt"><?php echo number_format ($tong);?>đ</span>
                            <i class="fa fa-shopping-cart"></i> <span
                                class="product-count"><?php echo  ($sl);?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Product</a></li>
                        <li><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </nav>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Ghế SOFA</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Bàn ăn</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Giường ngủ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab1" data-bs-toggle="pill"
                        data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1"
                        aria-selected="false">Đồ trang trí</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill"
                        data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1"
                        aria-selected="false">Ghế thư giãn</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <?php
                            include_once "./config/Connect.php";
                            $query=mysqli_query($conn,"Select MALSP from LOAISP where TENLSP='Ghế sofa'");
                            $row=mysqli_fetch_row($query);
                            $query1=mysqli_query($conn,"Select * from SANPHAM where MALSP ='$row[0]'");
                            while($row1=mysqli_fetch_array($query1))
                            {

                                
                                echo'
                                <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <img src="img_sp/'.$row1['ANH'].'" alt="">
                                    </div>
                                <h2><a href="single-product.php?MASP='.$row1['MASP'].'">'.$row1['TENSP'].'</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>'.number_format($row1['GIABAN']).'</ins> <del>'.number_format($row1['GIANHAP']).'</del>
                                    </div>  
                                    
                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                    </div>                       
                                </div>
                            </div>
                                ';
                            }
                    ?>


                    </div>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <?php
                                include_once "./config/Connect.php";
                                $query=mysqli_query($conn,"Select MALSP from LOAISP where TENLSP='Bàn ăn'");
                                $row=mysqli_fetch_row($query);
                                $query1=mysqli_query($conn,"Select * from SANPHAM where MALSP ='.$row[0].'");
                                while($row1=mysqli_fetch_array($query1))
                                {

                                    
                                    echo'
                                    <div class="col-md-3 col-sm-6">
                                    <div class="single-shop-product">
                                        <div class="product-upper">
                                            <img src="img_sp/'.$row1['ANH'].'" alt="">
                                        </div>
                                    <h2><a href="single-product.php?MASP='.$row1['MASP'].'">'.$row1['TENSP'].'</a></h2>
                                        <div class="product-carousel-price">
                                            <ins>'.number_format($row1['GIABAN']).'</ins> <del>'.number_format($row1['GIANHAP']).'</del>
                                        </div>  
                                        
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                        </div>                       
                                    </div>
                </div>
                    ';
                }
                ?>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <?php
                include_once "./config/Connect.php";
                $query=mysqli_query($conn,"Select MALSP from LOAISP where TENLSP='Giường ngủ'");
                $row=mysqli_fetch_row($query);
                $query1=mysqli_query($conn,"Select * from SANPHAM where MALSP ='.$row[0].'");
                while($row1=mysqli_fetch_array($query1))
                {

                    
                    echo'
                    <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img_sp/'.$row1['ANH'].'" alt="">
                        </div>
                      <h2><a href="single-product.php?MASP='.$row1['MASP'].'">'.$row1['TENSP'].'</a></h2>
                        <div class="product-carousel-price">
                            <ins>'.number_format($row1['GIABAN']).'</ins> <del>'.number_format($row1['GIANHAP']).'</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                    ';
                }
                ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab1">
                    <div class="row">
                        <?php
                include_once "./config/Connect.php";
                $query=mysqli_query($conn,"Select MALSP from LOAISP where TENLSP='Đồ trang trí'");
                $row=mysqli_fetch_row($query);
                $query1=mysqli_query($conn,"Select * from SANPHAM where MALSP ='.$row[0].'");
                while($row1=mysqli_fetch_array($query1))
                {

                    
                    echo'
                    <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img_sp/'.$row1['ANH'].'" alt="">
                        </div>
                      <h2><a href="single-product.php?MASP='.$row1['MASP'].'">'.$row1['TENSP'].'</a></h2>
                        <div class="product-carousel-price">
                            <ins>'.number_format($row1['GIABAN']).'</ins> <del>'.number_format($row1['GIANHAP']).'</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                    ';
                }
                ?>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                    <div class="row">
                        <?php
                            include_once "./config/Connect.php";
                            $query=mysqli_query($conn,"Select MALSP from LOAISP where TENLSP='Ghế thư giãn'");
                            $row=mysqli_fetch_row($query);
                            $query1=mysqli_query($conn,"Select * from SANPHAM where MALSP ='.$row[0].'");
                            while($row1=mysqli_fetch_array($query1)) {

                                echo'
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-shop-product">
                                        <div class="product-upper">
                                            <img src="img_sp/'.$row1['ANH'].'" alt="">
                                        </div>
                                        <h2><a href="single-product.php?MASP='.$row1['MASP'].'">'.$row1['TENSP'].'</a></h2>
                                        <div class="product-carousel-price">
                                            <ins>'.number_format($row1['GIABAN']).'</ins> <del>'.number_format($row1['GIANHAP']).'</del>
                                        </div>  
                                        
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                        </div>                       
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <?php
   include "footer.php";
?>