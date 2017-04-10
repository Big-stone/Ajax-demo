<?php 

    //响应的数据格式
    header("Content-Type:text/json;charset=utf-8");
    //读取文件
    $data = file_get_contents("province.txt");

    echo $data;
?>