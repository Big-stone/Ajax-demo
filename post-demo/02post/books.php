<?php 

    //向客户端输出一个响应头
    header("Content-Type:text/xml;charset=utf-8");
    //读取xml文件
    $data=file_get_contents("books.xml");
    //输出数据
    echo $data;
?>