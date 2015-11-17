<?php
	include 'config.php';
	//pv计算
	$pvnow=$kvdb->get('pv');
	$pvnow=$pvnow+1;
	$result=$kvdb->set('pv',$pvnow);
	$result=$kvdb->get('pv');
?>