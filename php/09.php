<?php 

    //判断数组当中是否存在某个元素

    $arr = array("你好","世界","禾禾");

    // in_array()数组中是否存在这个元素，如果存在返回true

    $flag = in_array("禾禾",$arr);

    echo $flag;//1
?>