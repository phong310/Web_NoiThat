<?php 
                            session_start();
                            include "../core/Connect.php";
                            
                            if(isset($_POST['login'])){
                                
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                               // echo $email;

                                
                                $sql = "SELECT * FROM taikhoan where email= '$email' and password= '$password'";
                                $result=mysqli_query($conn,$sql) or die(" that bai.");
                                $row = mysqli_num_rows($result);
                                if ($row==1)
                                {
                                  
                                    $_SESSION['name']=$email;
                                  // echo $_SESSION['name'];
                                   header('location:../products/Home.php');
                                   
                                }
                                else{
                                    echo  "Tài khoản hoặc mật khẩu chưa chính xác!!!";
                                }
                            }
                            if(isset($_POST['create'])){
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $username =$_POST['username'];
                                $kt="SELECT * from taikhoan where email='$email'";
                                $result_kt=mysqli_query($conn,$kt) or die(" that bai.");
                                $row = mysqli_num_rows($result_kt);
                                if ($row==1)
                                {
                                    echo 'Tài khoản đã có trên hệ thống vui lòng đăng nhập !';
                                }
                                else
                                {
                                $sql = "insert into taikhoan(username,password,email) values('$username','$password','$email',)";
                                $result=mysqli_query($conn,$sql) or die("Thêm du lieu that bai.");
                                header('location:login.php');
                                }
                            }
                            ?>
                            
                            <?php

                                if(isset($_GET['action'])){
                                unset($_SESSION['name']);
                               // session_destroy();
                                header('location:../products/Home.php');
                                }
                            ?>