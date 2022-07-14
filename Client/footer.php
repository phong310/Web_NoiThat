<div class="container">
        <section class="section brands">
            <div class="container-fluid text-center">
                <h2 class="section-title">
                    NGƯỜI NỔI TIẾNG TIN DÙNG
                </h2>
                <span>
                Chọn lựa từ các thương hiệu sản phẩm cao cấp và tiết kiệm nhất
            </span>
            </div>
            
            <div class="brand-layout container">
                <div class="glide" id="glide1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/169.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/170.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/171.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/173.png" alt="">
                            </li>

                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/175.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/176.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/177.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/178.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/180.png" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="img_sp/nguoinoitieng/181.png" alt="">
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/glide.js">
        </script>
    </div>
<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                    <img src="img_sp/logo-f.png" style="float: left;
                        width: 160px;
                        overflow: hidden;                      
                        margin-right: 68px;
                        font-size: 13px;
                        background-size: auto 80px;"/> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <?php
                            include "Connect.php";
                            $query=mysqli_query($conn,"select TENLSP from LOAISP");
                            while ($row=mysqli_fetch_array($query))
                            {
                                echo'
                                        <li><a href="#">'.$row['TENLSP'].'</a></li>
                                ';
                               
                            }

                            ?>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>