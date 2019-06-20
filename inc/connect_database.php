<?php
/**
 * Created by PhpStorm.
 * User: chuan
 * Date: 2018/12/30
 * Time: 22:30
 */
//PHP与Mysql和数据库建立连接
$conn=null;
function get_connect()
{
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $DB_name = "db";
    global $conn;
    $conn = new mysqli($servername, $username, $password, $DB_name);
    if ($conn->connect_error) {
        die("连接失败：" . $conn->connect_error . '\n');
    } else {
        echo "连接成功.\n";
    }
}
function close_connect(){
    global $conn;
    if($conn){
        $conn->close();
    }
}