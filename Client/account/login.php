<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hoặc đăng ký</title>
    <link rel="shortcut icon" type="image/png" href="img/favi.png"/>
    <link rel="stylesheet" type="text/css" href="../css/log.css">
</head>
<body>

    <h2>ĐĂNG NHẬP HOẶC ĐĂNG KÝ TÀI KHOẢN</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="checklogin.php" method ="POST">
                <h1>Tạo tài khoản</h1>
                <span>Xin vui lòng điền các thông tin để đăng ký tài khoản</span>
                <input type="text" placeholder="Họ và tên" name ="username" required/>
                <input type="email" placeholder="Email" name ="email" required/>
                <input type="password" placeholder="Mật khẩu" name="password" required/>
                <button type ="submit" name="create">Đăng ký</button>
            </form>

        </div>
        <div class="form-container sign-in-container">
            <form action="checklogin.php" method="POST" >
                <h1>Đăng nhập</h1>
                <span>Vui lòng điền các thông tin để đăng nhập tài khoản</span>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Mật khẩu" name="password" required>
                <a href="#">Forgot your password?</a>
                <button type ="submit" name ="login">Đăng nhập</button>
            </form>
            
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng quý khách trở lại!</h1>
                    <p>Nếu bạn đã có tài khoản hãy đăng nhập để bắt đầu mua sắm online cùng chúng tôi!</p>
                    <button class="ghost" id="signIn">Đăng nhập tài khoản</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào quý khách!</h1>
                    <p>Nhập thông tin của bạn để đăng nhập và bắt đầu mua sắm online với chúng tôi!</p>
                    <button class="ghost" id="signUp">Hoặc đăng ký tài khoản</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });
</script>
</html>