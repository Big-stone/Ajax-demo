<?php 
    header("Content-Type:text/html;charset=utf-8");

    //接收客户端数据
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 简单判断

    if($username=="admin" && $password=="123456"){
        echo "登录成功";
    }else{
        echo "密码或昵称错误";
    }
?>