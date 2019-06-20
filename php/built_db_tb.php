<?php
/**
 * Created by PhpStorm.
 * User: chuan
 * Date: 2018/12/21
 * Time: 21:01
 */

include_once("../inc/connect_database.php");
//创建数据库db
$sql = "CREATE DATABASE DB";
if ($conn->query($sql) == TRUE) {
    echo "创建数据库成功.\n";
} else {
    echo "Error creating database:" . $conn->error.'\n';
}
//建立连接
get_connect();
//创建基本表
$sql = "CREATE TABLE enterprise_info(
e_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
e_name VARCHAR(5) NOT NULL,
e_username VARCHAR(30) NOT NULL ,
e_password VARCHAR(30) NOT NULL,
e_address VARCHAR(30) NOT NULL ,
e_email VARCHAR(30) NOT NULL                   
)";
if ($conn->query($sql) == TRUE) {
    echo "Table enterprise_info created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}
$sql = "CREATE TABLE user_info(
u_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
u_name VARCHAR(5) NOT NULL,
u_username VARCHAR(30) NOT NULL ,
u_password VARCHAR(30) NOT NULL,
u_email VARCHAR(30) NOT NULL                   
)";
if ($conn->query($sql) == TRUE) {
    echo "Table user_info created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}
$sql = "CREATE TABLE news_info(
n_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
n_title VARCHAR(30) NOT NULL,
n_content VARCHAR(100) NOT NULL ,
n_picture BLOB NOT NULL,
n_resource VARCHAR(30) NOT NULL,
n_publish_time DATETIME NOT NULL,
n_click_num INT(10) NOT NULL 
)";
if ($conn->query($sql) == TRUE) {
    echo "Table news_info created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}
$sql = "CREATE TABLE recruit_info(
r_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
r_e_id INT(6) UNSIGNED  ,
r_e_name VARCHAR(5) NOT NULL,
r_e_type VARCHAR(30) NOT NULL ,
r_e_email VARCHAR(30) NOT NULL,
r_e_phone INT(11) NOT NULL ,
r_e_address VARCHAR(30) NOT NULL ,
r_e_zip INT(6) NOT NULL ,
r_work_position VARCHAR(10) NOT NULL ,
r_recruit_num INT(5) NOT NULL ,
r_work_city VARCHAR(5) NOT NULL ,
r_introduce_job VARCHAR(200) NOT NULL ,
r_publish_time DATETIME NOT NULL ,
r_click_num INT(10) NOT NULL 
)";
if ($conn->query($sql) == TRUE) {
    echo "Table recruit_info created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}

$sql = "CREATE TABLE personal_resume(
p_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
p_u_id INT(6) UNSIGNED ,
p_u_name VARCHAR(5) NOT NULL,
p_u_sex VARCHAR(10) DEFAULT '男',
p_u_email VARCHAR(30) NOT NULL ,
p_u_phone INT(11) NOT NULL ,
p_u_address VARCHAR(30) NOT NULL ,
p_u_zip INT(6) NOT NULL ,
p_u_education VARCHAR(10) DEFAULT '小学',
p_u_forte VARCHAR(10) ,
p_work_type VARCHAR(10) NOT NULL ,
p_work_position VARCHAR(10) NOT NULL ,
p_work_city VARCHAR(5) NOT NULL ,
p_except_salary INT(10) UNSIGNED ,
p_introduce_yourself VARCHAR(200) NOT NULL ,
p_publish_time DATETIME NOT NULL ,
p_click_num INT(10) NOT NULL              
)";
if ($conn->query($sql) == TRUE) {
    echo "Table personal_resume created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}
$sql = "CREATE TABLE online_apply(
o_p_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
o_u_id INT(6) UNSIGNED,
o_e_id INT(6) UNSIGNED,
o_u_name VARCHAR(10) NOT NULL ,
o_e_name VARCHAR(10) NOT NULL ,
o_r_work_position VARCHAR(10) NOT NULL ,
o_p_work_position VARCHAR(10) NOT NULL               
)";


if ($conn->query($sql) == TRUE) {
    echo "Table online_apply created successfully\n";
} else {
    echo "Created table error:" . $conn->error.'\n';
}
//关闭数据库
close_connect();