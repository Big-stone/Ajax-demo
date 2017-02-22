<?php 
		
	header('Content-Type:text/html;charset=utf-8');

	//定义普通数组
	$array1=array('li','lei','han','meimei');

	for($i=0;$i<count($array1);$i++){

		echo $array1[$i];
	 };

	 //定义关联数组
	 $array2=array(
	 	'username'=>'hanmeimei',
	 	 'age'=>18
	 	);

	 echo $array2['username'];

	 //二位数组
	 $array3=array(
	 	array('username'=>'李雷','age'=>18),
	 	array('username'=>'韩梅梅','age'=>18)
	 	);
	 //二维数组的遍历
	 for($i=0;$i<count($array3);$i++){
	 	echo $array3[$i]['username'];
	 	echo '<br/>';
	  };
?>