<?php 
    header("Content-Type:text/html;charset=utf-8");

    //php的函数参数加了等号，就是给这个参数一个默认值

    // 定义函数
    function hello($name = "李雷"){
        
        echo $name;
    }
    //调用函数 传入实参覆盖默认值
    hello("韩梅梅");
?>