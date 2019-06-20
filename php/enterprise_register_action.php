<?php
//接收输入的手机验证码
include_once("../inc/connect_database.php");
if (empty($_POST)&&empty($_GET)){
    exit("你提交的数据超过最大配置! <br> ");
}
$enterprise_name=$_POST['enterprise_name'];
$account_name=$_POST['account_name'];
$password=$_POST['password'];
$repeat=$_POST['repeat'];
$address=$_POST['address'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$check_code = $_POST['check_code'];
session_start();
$code = $_SESSION['code'];
//把生成发送的验证码
//和用户手机收到的验证码进行比对
if($code==$check_code){
    echo '验证码正确<br>';
}else{
    exit('验证码不正确<br>');
}
unset($code);
$captcha=$_POST["captcha"];
if(strtolower($_SESSION["captcha"])==strtolower($captcha)){
    echo "验证码正确";
    $_SESSION["captcha"]="";
}else{
    echo "验证码不正确 登陆失败";

}
unset($captcha);
session_destroy();