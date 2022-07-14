<?php
include "header.php";
?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="shop.php">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <?php
                        include_once "./config/Connect.php";
                        $MASP=$_GET['MASP'];
                        $query =mysqli_query($conn,"SELECT MALSP FROM SANPHAM where MASP ='$MASP'");
                        $row=mysqli_fetch_row($query);
                        $query1=mysqli_query($conn,"select * from sanpham where MALSP ='$row[0]' order by MASP DESC limit 0,3");
                        while($row1=mysqli_fetch_array($query1))
                        
                        { 
                            echo '
                            <div class="thubmnail-recent">
                            <img src="img_sp/'.$row1['ANH'].'" alt="">
                            <h2 class="product-name">'.$row1['TENSP'].'</h2>
                            <div class="product-inner-price">
                                <ins>'.$row1['GIABAN'].'</ins> <del>'.$row1['GIANHAP'].'</del>
                            </div>                
                        </div>
                            ';   
                        }
                        ?>
                    </div>
                    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                           
                        </div>
                        
                        
                        <?php
                  include "./config/Connect.php";
                  $MASP=$_GET['MASP'];
                  $query =mysqli_query($conn,"Select * from SANPHAM where MASP ='$MASP'");
                  $query1 =mysqli_query($conn,"Select * from imgcon where id_sp ='$MASP'");
                  while($row=mysqli_fetch_array($query))
                  {
                    $row1=mysqli_fetch_array($query1);
                    echo ' 
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="product-images">
                            <div class="product-main-img">
                                <img src="img_sp/'.$row['ANH'].'" alt="">
                            </div>
                            ';
                    if($row1!=null)
                    {
                       echo '
                                <div class="product-gallery">
                                    <img src="img_sp/img_con/'.$row1['img1'].'" alt="">
                                    <img src="img_sp/img_con/'.$row1['img2'].'" alt="">
                                    <img src="img_sp/img_con/'.$row1['img3'].'" alt="">
                                </div>
                          ';
                    }
                      echo '

                      </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="product-inner">
                              <h2 class="product-name">'.$row['TENSP'].'</h2>
                              <div class="product-inner-price">
                                  <ins>'.$row['GIABAN'].'</ins> <del>'.$row['GIANHAP'].'</del>
                              </div>    
                              
                              <form action="Cart_cn.php"  class="cart">
                                  <div class="quantity">
                                  <input type ="hidden" name="action" value="add">
                                  <input type ="text" name ="MASP"  value="'.$row['MASP'].'" style ="display:none" />
                                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="soluong" min="1" step="1">
                                  </div>
                                  <a> <button class="add_to_cart_button" type="submit" >Add to cart</button></a>
                                 
                              </form>   
                              
                              <div class="product-inner-category">
                                  <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                              </div> 
                              
                              <div role="tabpanel">
                                  <ul class="product-tab" role="tablist">
                                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                  </ul>
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade in active" id="home">
                                          <h2>Product Description</h2>  
                                          <p>
                                          '.$row['MOTA'].'
                                          </p>
                                      </div>
                                      
                      ';
                  }
                  
                ?>
                
                <div role="tabpanel" class="tab-pane fade" id="profile">
                                          <h2>Reviews</h2>
                                          <div class="submit-review">
                                              <form action="" method="POST">
                                              <p><label for="name">Name</label> <input name="name" type="text"></p>
                                              <p><label for="email">Email</label> <input name="email" type="email"></p>
                                              <div class="rating-chooser">
                                                  <p>Your rating</p>

                                                  <div class="rating-wrap-post">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                  </div>
                                              </div>
                                              <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                              <p><input type="submit" value="Submit"></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              include "./config/Connect.php";
                              if(isset($_POST['review']))
                              {
                              $email=$_POST['email'];
                              $mota=$_POST['review'];
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                              $date=date("Y-m-d H:i:s");
                              $ten=$_POST['name'];
                              $sql="insert into danhgia(email,mota,datetime,ten) values('$email','$mota','$date','$ten')";
                              $val=mysqli_query($conn,$sql) or die ('Lỗi');
                              
                              }
                              ?>

                              
                          </div>
                      </div>
                  </div>                      
                 
<div class="blog-post-area" >

<h2 class="title text-center">Latest From our Blog</h2>
<?php
include "./config/Connect.php";
$sql=mysqli_query($conn,"Select * from danhgia");
while($row=mysqli_fetch_array($sql))
{
        echo '
        <div class="single-blog-post">
        <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> '.$row['ten'].'</li>
                    <li><i class="fa fa-clock-o"></i> '.$row['datetime'].'</li>
                
                </ul>
                <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                </span>
        </div>
        <p>'.$row['mota'].'</p>
        </div>
       ';
}
?>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            <?php
                        include_once "./config/Connect.php";
                        $MASP=$_GET['MASP'];
                        $query =mysqli_query($conn,"Select MALSP from SANPHAM where MASP ='$MASP'");
                        $row=mysqli_fetch_row($query);
                        $query1=mysqli_query($conn,"select * from sanpham where MALSP ='.$row[0].'");
                        while($row1=mysqli_fetch_array($query1))
                        
                        { 
                            echo '
                            <div class="single-product">
                                    <div class="product-f-image">
                                    <img src="img_sp/'.$row1['ANH'].'" alt="">
                                        <div class="product-hover">
                                          
                                            <a href="single-product.php?MASP='.$row1['MASP'].'" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                     <h2 class="product-name">'.$row1['TENSP'].'</h2>
                                    <div class="product-inner-price">
                                        <ins>'.number_format($row1['GIABAN']).'đ</ins> <del>'.number_format($row1['GIANHAP']).'đ</del>
                                    </div>    
                                </div>
                            ';
                        }
                        ?>
                                
                                  
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


<?php
include "footer.php";
?>