<?php 

		$data=$_POST['username'];

		if($data=='hanmeimei'){
			echo '该用户名已被注册';
		} else {
			echo '可以注册';
		}

?>