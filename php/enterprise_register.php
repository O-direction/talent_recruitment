<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">

<head>
    <title>注册</title>
    <link rel="shortcut icon" href="../img/20181229051952188_easyicon_net_16.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/enterprise_register.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/enterprise_register.js"></script>
</head>

<body>
    <div id="all">
        <div id="mid">
            <form action="enterprise_register_action.php" method="post">
                <span>公司名:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" class="one" name="enterprise_name"><br>
                <span>账户名:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input class="one" type="text" name="account_name" /><br>
                <span>密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input class="change" type="password" name="password" /><br>
                <span>重复密码:&nbsp;&nbsp;&nbsp;</span><input class="one" type="password" name="repeat" /><br>
                <span>企业地址:&nbsp;&nbsp;&nbsp;</span><input type="text" name="address" class="one"><br>
                <span>邮箱:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="email" class="change"><br>
                <span>手机号:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input class="change" type="text" name="telephone" id="telephone" /><br>
                <span>图片验证码:</span><input class="two" type="text" name="captcha" /><br>
                <img class="captcha pull-right clear-fix" src="image_captcha.php" alt="" onclick="this.src='image_captcha.php?'+new Date().getTime();" width="50" height="50" ><br>
                <span>手机验证码:</span><input class="two twoo" type="text" name="check_code" /><br>
                <input type="button" value="获取手机验证码" id="getCodeBtn" /><br>
                <input type="reset" value="错了重填" class="three" />&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="立即注册" class="three"/><br>
            </form>
        </div>
    </div>
</body>

</html>