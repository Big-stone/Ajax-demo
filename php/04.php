<?php 

    header("Content-Type:text/html;chaset=utf-8");

    // 数组
    //    1：普通数组
    //    2：关联数组

    // 定义普通数组
    /*$arr = array("你好","世界");
    //php数组没有length属性,它提供了count方法来统计数组长度.
    echo count($arr);//2*/

    //遍历数组
    /*for($i = 0;$i<count($arr);$i++){

        echo $arr[$i];//你好世界
    }*/

// ************************分割线**********************************

    // 定义关联数组

    /*$arr = array(
        "name" => "韩梅梅",
        "age" => 18
    );

    echo $arr["name"];*/

    // 二维数组
    $arr = array(
        array("name"=>"韩梅梅","age"=>"18"),
        array("name"=>"李雷","age"=>18)
    );
    
    // 二维数组的遍历
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i]["name"];
        echo "<br/>";   
    };
?>