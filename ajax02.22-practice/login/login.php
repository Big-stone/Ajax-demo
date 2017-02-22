<?php 

	header("Content-Type:text/html;charset=utf-8");

	//接收客户端数据
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username=='hanmeimei' && $password=="123456"){
		echo '登录成功';
	} else { 
		echo '账号或密码错误';
	 };

?>