<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="shortcut icon" href="../img/20181229051952188_easyicon_net_16.ico">
    <link rel="stylesheet" href="../css/发布职位.css">
    <script src="../js/发布职位.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <div class="all">
        <div class="content">
            <div class="top">
                <div class="first pull-left active">
                    账号登陆
                </div>
                <div class="second pull-right">
                    短信快捷登陆
                </div>
            </div>
            <div class="mid">
                <div class="account">
                    <div class="ac">
                        <form action="login.php" method="post">
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-id card.png" alt="" width="20" height="20">
                            </div>
                            <input class="pull-left clear-fix" name="username" type="text" placeholder="用户名"><br>
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-pen.png" alt="" width="20" height="20">
                            </div>
                            <input class="pull-left clear-fix" name="password" type="password" placeholder="密码"><br>
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-right.png" alt="" width="20" height="20">
                            </div>
                            <input class="yan pull-left clear-fix" type="text" name="captcha" placeholder="验证码">
                            <img class="captcha pull-right clear-fix" src="image_captcha.php" alt="" onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200" ><br>
                            <input class="log" type="submit" value="登录">
                            <div class="forget">
                                <a href="retrieve.php">密码遗失了？点这里试试</a><br>
                                <a href="enterprise_register.php">还没有账号？来注册一个</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="phone">
                    <div class="ph">
                        <form action="login.php" method="post">
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-tel.png" alt="" width="20" height="20">
                            </div>
                            <input name="mobile_phone" type="text" placeholder="手机号">
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-right.png" alt="" width="20" height="20">
                            </div>
                            <input class="yan pull-left clear-fix" type="text" name="captcha" placeholder="验证码">
                            <img class="captcha pull-right clear-fix" src="image_captcha.php" alt="" onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200" ><br>
                            <div class="move pull-left clear-fix">
                                <img src="../img/icon-mail.png" alt="" width="20" height="20">
                            </div>
                            <input name="input_message" class="other" type="text" placeholder="请输入短信验证码">
                            <input name="get_message" class="others" type="button" value="获取短信验证码" >
                            <input class="log" type="submit" value="登录">
                            <div class="forget">
                                <a href="enterprise_register.php">还没有账号？来注册一个</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>