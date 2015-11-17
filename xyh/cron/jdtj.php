<?php
	include '../config.php';
	//计算项目进度
	$result=mysqli_query($link_r,"SELECT count(*) FROM xyh_bsxm WHERE `status`=3");
	$result=mysqli_fetch_array($result);
	$result=$result['count(*)'];
	$result=intval($result);
	var_dump($result);
	$result=$result/81*100;
	$result=intval($result);
	var_dump($result);
	//存入kvdb
	$ret = $kvdb->set('xmjd', $result);
	var_dump($ret);
	$ret = $kvdb->get('xmjd');
	var_dump($ret);
?>