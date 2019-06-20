<?php
/**
 * Created by PhpStorm.
 * User: chuan
 * Date: 2018/12/27
 * Time: 22:14
 */
include_once ("../inc/connect_database.php");

session_start();
$captcha=$_POST["captcha"];
if(strtolower($_SESSION["captcha"])==strtolower($captcha)){
    echo "验证码正确";
    $_SESSION["captcha"]="";
}else{
    echo "验证码不正确 登陆失败";

}
unset('captcha');
$mobile=$_POST['mobile'];
