<?php 

    // array_key_exists()检测数组中是否存在这个key（用在关联数组中）;

    $arr = array("name"=>"李雷","age"=>18);

    $flag = array_key_exists("name",$arr);

    echo $flag;//1

?>