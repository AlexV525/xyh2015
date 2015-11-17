<?php	
		include '../config.php';
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=0&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv00=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=1&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv01=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=2&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv02=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=3&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv03=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=4&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv04=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=5&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv05=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=6&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv06=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=7&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv07=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=8&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv08=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=9&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv09=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=10&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv010=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=11&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv011=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=12&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv012=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=13&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv013=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=14&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv014=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=15&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv015=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=16&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv016=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=17&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv017=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=18&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv018=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=19&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv019=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=20&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv020=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=21&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv021=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=22&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv022=$rs['pv'];
		
		$rs=mysqli_query($link_r,"select * from xyh_pv where time=23&&day=0 ;");
		$rs=mysqli_fetch_array($rs);
		$pv023=$rs['pv'];
		
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv00 WHERE `time` =0 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv01 WHERE `time` =1 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv02 WHERE `time` =2 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv03 WHERE `time` =3 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv04 WHERE `time` =4 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv05 WHERE `time` =5 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv06 WHERE `time` =6 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv07 WHERE `time` =7 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv08 WHERE `time` =8 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv09 WHERE `time` =9 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv010 WHERE `time` =10 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv011 WHERE `time` =11 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv012 WHERE `time` =12 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv013 WHERE `time` =13 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv014 WHERE `time` =14 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv015 WHERE `time` =15 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv016 WHERE `time` =16 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv017 WHERE `time` =17 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv018 WHERE `time` =18 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv019 WHERE `time` =19 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv020 WHERE `time` =20 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv021 WHERE `time` =21 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv022 WHERE `time` =22 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pv023 WHERE `time` =23 AND `day` =1 LIMIT 1 ;");
		mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` = 0 WHERE `day` =0  ;");
		echo "ok";
		?>