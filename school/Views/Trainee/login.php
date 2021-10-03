<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?php echo assets_css()?>stylelogin.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo SITE_URL ?>index.php?controller=trainee&action=login" class="form-login" method="post">
            <h1>Đăng nhập</h1>
            <h4>Xin chào! Hãy bắt đầu nào</h4>
            <div class="form-text">
                <label>Username</label>
                <span id="errorname" class="error"></span>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-text">
                <label>Mật khẩu người dùng</label>
                <span id="errorpassword" class="error"></span>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="submit">Đăng nhập</button>
            <!-- <span>Bạn chưa có tài khoản ? <a href="create.php">Đăng ký </a></span> -->
        </form>
    </div>
    <script>
        const formLogin = document.querySelectorAll('.form-text input')
        const formLabel = document.querySelectorAll('.form-text label')
        for (let i = 0;i<2;i++)
        {
            formLogin[i].addEventListener("mouseover", function () {
                formLabel[i].classList.add("focus")
            })
            formLogin[i].addEventListener("mouseout", function () {
                if (formLogin[i].value =="")
                {
                    formLabel[i].classList.remove("focus")
                }
            })
        }
    </script>
</body>
</html>