<?php 
	
	$data=$_FILES['photo'];
	//获取到apache临时存储的文件;
	$file=$data['tmp_name'];
	//获取到文件名
	$fileName=$data['name'];
	//文件储存的位置
	move_uploaded_file($file, 'images/'.$fileName);

	// var_dump($_FILES);
?>
<!-- array
  'photo' => 
    array
      'name' => string 'funengliang03.jpg' (length=17)
      'type' => string 'image/jpeg' (length=10)
      'tmp_name' => string 'C:\wamp\tmp\php8FB1.tmp' (length=23)
      'error' => int 0
      'size' => int 145881 -->