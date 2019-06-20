<?php
/**
 * Created by PhpStorm.
 * User: chuan
 * Date: 2018/12/27
 * Time: 22:14
 */
session_start();
$image=imagecreatetruecolor(100,30);
$bg_color=imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$bg_color);
$content="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$captcha="";
for($i=0;$i<4;$i++){
    $fontsize=10;
    $fontcolor=imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
    $font_content=substr($content,mt_rand(0,strlen($content)),1);
    $captcha.=$font_content;
    //显示的坐标
    $x=($i*100/4)+mt_rand(5,10);
    $y=mt_rand(5,10);
    //填充内容到画布中
    imagestring($image,$fontsize,$x,$y,$font_content,$fontcolor);
}
$_SESSION["captcha"]=$captcha;
//设置背景干扰元素
for($$i=0;$i<200;$i++){
    $point_color=imagecolorallocate($image,mt_rand(50,200),mt_rand(50,200),mt_rand(50,200));
    imagesetpixel($image,mt_rand(1,99),mt_rand(1,29),$point_color);
}
//设置干扰线
for($i=0;$i<3;$i++){
    $line_color=imagecolorallocate($image,mt_rand(50,200),mt_rand(50,200),mt_rand(50,200));
    imageline($image,mt_rand(1,99),mt_rand(1,29),mt_rand(1,99),mt_rand(1,29),$line_color);
}
//向浏览器输出图片头信息
header('content-type:image/png');
imagepng($image);
imagedestroy($image);