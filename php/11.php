<?php 

    header("Content-Type:text/html;charset=utf-8");

    //file_get_contents获取文件里面的内容，获取到的内容一定是字符串

    $data = file_get_contents("file.txt");

    echo $data;

?>