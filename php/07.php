<?php 

    header("Content-Type:text/html;charset=utf-8");

    // 内容输出:访问php，访问的是一个资源，服务端向客户端输出内容，一般是输出字符串

    // echo 输出字符串

    $arr = array("name"=>"韩梅梅","age"=>18);
   // var_dump 向客户端输出一个数组，输出数组里面的详细信息
   // var_dump($arr);//array
                     //'name' => string '韩梅梅' (length=9)
                     //'age' => int 18
    // 输出数组详细信息
   print_r($arr); //Array ( [name] => 韩梅梅 [age] => 18 )
?>