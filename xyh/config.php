<?php 
	//MySQL连接参数
	$link_r=mysqli_connect(SAE_MYSQL_HOST_S,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB,SAE_MYSQL_PORT);
	$link_w=mysqli_connect(SAE_MYSQL_HOST_M,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB,SAE_MYSQL_PORT);
	mysqli_select_db ($link_r, SAE_MYSQL_DB);
	mysqli_select_db ($link_w, SAE_MYSQL_DB);
	mysqli_query($link_r,"SET NAMES UTF8");
	mysqli_query($link_w,"SET NAMES UTF8");
	//kvdb连接参数
	$kvdb = new SaeKV();
	$ret = $kvdb->init("zzz041ymx2");
	//var_dump($ret)
	?>