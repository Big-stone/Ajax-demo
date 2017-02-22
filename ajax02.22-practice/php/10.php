<?php 

	header('Content-Type:text/html;charset=utf-8');

	$array=array('username'=>'韩梅梅','age'=>18);
	//array_key_exists()检测数组中是否存在这个key
	$flag=array_key_exists('username', $array);

	echo $flag;

?>