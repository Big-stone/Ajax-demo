<?php 

    header("Content-Type:text/xml;charset=utf-8");

    $data=file_get_contents("user.xml");

    echo $data;
?>