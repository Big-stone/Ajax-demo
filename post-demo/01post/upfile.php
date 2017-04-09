<?php 
        /*在php 里面怎么去接收文件上传的数据.*/

        /*如果客户端是get 方式提交的数据，我就$_get 接收*/
         /*如果客户端是post 方式提交的数据，我就$_POST 接收*/
        /* 假设要接收文件上传的收据  $_FILES

        $_FILES 得到的也是一个数组，看里面的详细信息

        接收到客户端的数据是一个数组

        array
        'name' => string 'funengliang.jpg' (length=15)
        'type' => string 'image/jpeg' (length=10)
        'tmp_name' => string 'C:\wamp\tmp\php4C18.tmp' (length=23)
        'error' => int 0
        'size' => int 125120
        
        */

        $data = $_FILES["photo"];

        // var_dump($data);

        // 获取到apache临时存储的文件
        $file=$data["tmp_name"];
        //获取到文件名
        $fileName = $data["name"];

        move_uploaded_file($file,"images/".$fileName);

?>