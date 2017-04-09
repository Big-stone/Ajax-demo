<?php 

    $data=$_POST["username"];

    if($data=="admin"){
        echo "该用户名已被占用";
    }else{
        echo "可以注册";
    }

?>