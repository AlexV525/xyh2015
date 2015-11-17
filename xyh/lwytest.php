<html>
    <head>
    <meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="http://nn33ztwwxwq.sinaapp.com/xyh/metronic/media/image/favicon.ico" media="screen" />
    </head>
	<form action="lwytest.php" method="post">
    	项目: <select name="name">
    		<option value="-1">请选择</option>
    	<?php
			include 'config.php';
			$nowstatus1=mysqli_query($link_r,"SELECT * FROM xyh_bsxm");
			while($xiangmubiao=mysqli_fetch_array($nowstatus1))
            {
                echo "<option value=\"".$xiangmubiao['name']."\">".$xiangmubiao['name']."</option>";
            }
		?>
        	</select><br>
        状态: <select name="status">
        	<option value="-1">请选择</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select><br>
        比赛日期: <select name="bsdate1">
        	<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
        	<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
        	<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12" selected="selected">12</option>
        	</select>月
        	<input type="number" name="badate2" min="1" max="31" step="1">日<br>
        比赛时间: <input type="number" name="time1" min="0" max="24" step="1">:<input type="number" name="time2" min="0" max="60" step="1"><br>
    <input type="submit" value="更改">
	</form>
<?php
	if($_POST['name'] != "-1")
    {
        if($_POST['status'] != "-1")
        {
            $changestatus="UPDATE xyh_bsxm SET status = '".$_POST['status']."' WHERE name = '".$_POST['name']."'";
            mysqli_query($link_w,$changestatus);
        }
        if(!empty($_POST['bsdate2']))
        {
            $changebsdate="UPDATE xyh_bsxm SET bsdate = '".$_POST['bsdate1']."-".$_POST['bsdate2']."' WHERE name = '".$_POST['name']."'";
         	mysqli_query($link_w,$changebsdate);
        }
        if(!empty($_POST['time1']) && !empty($_POST['time2']))
        {
         
            $changetime="UPDATE xyh_bsxm SET time = '".$_POST['time1'].":".$_POST['time2']."' WHERE name = '".$_POST['name']."'";
            mysqli_query($link_w,$changetime);
        }
    }
	$nowstatus2=mysqli_query($link_r,"SELECT * FROM xyh_bsxm");
	echo " <table border=\"1\">
	<tr>
    <td>ID</td>
	<td>比赛日期</td>
	<td>比赛时间</td>
	<td>比赛名字</td>
	<td>比赛状态</td>
	<td>比赛类别</td></tr>";
	while($out=mysqli_fetch_array($nowstatus2))
	{
		echo "<tr><td>".
        $out["id"]."</td><td>".
		$out['bsdate']."</td><td>".
		$out['time']."</td><td>".
		$out['name']."</td><td>".
		$out['status']."</td><td>".
		$out['kind']."</td></tr>";
	}
	echo "</table>"
?>
</html>