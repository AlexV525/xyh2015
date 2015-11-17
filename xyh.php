<?php	
	$id = $_GET['id'];
	if ('main' == $id){
		include 'xyh/main.php';
	}
	elseif ('100runfirst' == $id){
		include 'xyh/100runfirst.php';
	}
	elseif ('100runlast' == $id){
		include 'xyh/100runlast.php';
	}
	elseif ('400run' == $id){
		include 'xyh/400run.php';
	}
	elseif ('800run' == $id){
		include 'xyh/800run.php';
	}
	elseif ('1500run' == $id){
		include 'xyh/1500run.php';
	}
	elseif ('throwingfirst' == $id){
		include 'xyh/throwingfirst.php';
	}
	elseif ('throwinglast' == $id){
		include 'xyh/throwinglast.php';
	}
	elseif ('highjumpingfirst' == $id){
		include 'xyh/highjumpingfirst.php';
	}
	elseif ('highjumpinglast' == $id){
		include 'xyh/highjumpinglast.php';
	}
	elseif ('triplejumpingfirst' == $id){
		include 'xyh/triplejumpingfirst.php';
	}
	elseif ('triplejumpinglast' == $id){
		include 'xyh/triplejumpinglast.php';
	}
	elseif ('longjumpingfirst' == $id){
		include 'xyh/longjumpingfirst.php';
	}
	elseif ('longjumpinglast' == $id){
		include 'xyh/longjumpinglast.php';
	}
	elseif ('20x50run' == $id){
		include 'xyh/20x50run.php';
	}
	elseif ('4x100run' == $id){
		include 'xyh/4x100run.php';
	}
	elseif ('jumpingrows' == $id){
		include 'xyh/jumpingrows.php';
	}
	elseif ('preload' == $id){
		include 'xyh/preload.php';
	}
	else {
		include 'xyh/preload.php';
	};
	$pvnow=$kvdb->get('pv');
	$pvnow=$pvnow+1;
	$result=$kvdb->set('pv',$pvnow);
	$result=$kvdb->get('pv');
?>