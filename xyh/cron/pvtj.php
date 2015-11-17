<?php
	include '../config.php';
	use sinacloud\sae\Storage as Storage;
	$s = new Storage();
	//连接kvdb 数据库 存储服务
	$time=date(H,time());
	$pvnow=$kvdb->get('pv');
	mysqli_query($link_w,"UPDATE `xyh_pv` SET `pv` =$pvnow WHERE `time` =$time AND `day` =0 LIMIT 1;");
	var_dump($pvnow);
	$kvdb->set('pv','0');

	//01代表今天的1点，11代表昨天的1点
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
	//今天结束 昨天开始
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=0&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv10=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=1&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv11=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=2&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv12=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=3&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv13=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=4&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv14=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=5&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv15=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=6&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv16=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=7&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv17=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=8&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv18=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=9&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv19=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=10&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv110=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=11&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv111=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=12&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv112=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=13&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv113=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=14&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv114=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=15&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv115=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=16&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv116=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=17&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv117=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=18&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv118=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=19&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv119=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=20&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv120=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=21&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv121=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=22&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv122=$rs['pv'];
	
	$rs=mysqli_query($link_r,"select * from xyh_pv where time=23&&day=1 ;");
	$rs=mysqli_fetch_array($rs);
	$pv123=$rs['pv'];
	
	$fpdata="
		var Charts = function () {
		return {    //main function to initiate the module

			init: function () {
				App.addResponsiveHandler(function () {
					Charts.initPieCharts(); 
				});
			},

			initCharts: function () {
				if (!jQuery.plot) {
					return;
				}
				var data = [];
				var totalPoints = 250;    // random data generator for plot charts
				function getRandomData() {
					if (data.length > 0) data = data.slice(1);    // do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0) y = 0;
						if (y > 100) y = 100;
						data.push(y);
					}    // zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
					return res;
				}


				function chart1() {
					var pageviews = [
						[0,$pv10],[1,$pv11],[2,$pv12],[3, $pv13],[4, $pv14],[5,$pv15],[6, $pv16],[7, $pv17],[8, $pv18],[9, $pv19],[10, $pv110],[11, $pv111],[12, $pv112],[13, $pv113],[14, $pv114],[15, $pv115],[16, $pv116],[17, $pv117],[18, $pv118],[19, $pv119],[20, $pv120],[21, $pv121],[22, $pv122],[23, $pv123],
						];
					var visitors = [
						[0, $pv00],[1, $pv01],[2,$pv02],[3, $pv03],[4, $pv04],[5, $pv05],[6, $pv06],[7, $pv07],[8, $pv08],[9, $pv09],[10, $pv010],[11, $pv011],[12, $pv012],[13,$pv013],[14, $pv014],[15, $pv015],[16, $pv016],[17, $pv017],[18, $pv018],[19, $pv019],[20, $pv020],[21, $pv021],[22, $pv022],[23, $pv023],
					];
					var plot = $.plot($(\"#chart_1\"), [{
						data: pageviews,
						label: \"昨日访问量\"
					}, {
						data: visitors,
						label: \"今日访问量\"
					}], {
						series: {
							lines: {
								show: true,
								lineWidth: 2,
								fill: true,
								fillColor: {
									colors: [{
										opacity: 0.05
									}, {
										opacity: 0.01
									}]
								}
							},
							points: {
								show: true
							},
								shadowSize: 2
						},
						grid: {
							hoverable: true,
							clickable: true,
							tickColor: \"#eee\",
							borderWidth: 0
						},
						colors: [\"#d12610\", \"#37b7f3\", \"#52e136\"],
						xaxis: {
							ticks: 11,
							tickDecimals: 0
						},
						yaxis: {
							ticks: 11,
							tickDecimals: 0
						}
					});

					function showTooltip(x, y, contents) {
						$('<div id=\"tooltip\">' + contents + '</div>').css({
							position: 'absolute',
							display: 'none',
							top: y + 5,
							left: x + 15,
							border: '1px solid #333',
							padding: '4px',
							color: '#fff',
							'border-radius': '3px',
							'background-color': '#333',
							opacity: 0.80
						}).appendTo(\"body\").fadeIn(200);
					}
					var previousPoint = null;
					$(\"#chart_2\").bind(\"plothover\", function (event, pos, item) {
						$(\"#x\").text(pos.x.toFixed(2));
						$(\"#y\").text(pos.y.toFixed(2));
						if (item) {
							if (previousPoint != item.dataIndex) {
								previousPoint = item.dataIndex;
								$(\"#tooltip\").remove();
								var x = item.datapoint[0].toFixed(2),
									y = item.datapoint[1].toFixed(2);
								showTooltip(item.pageX, item.pageY, item.series.label + \" of \" + x + \" = \" + y);
						}
						} else {
							$(\"#tooltip\").remove();
							previousPoint = null;
						}
					});
				}
				//graph
				chart1();
			},

		};
	}();";
	echo SAE_TMP_PATH;
	file_put_contents(SAE_TMP_PATH.charts.js,"$fpdata");
	Storage::setAuth('nn33ztwwxwq:zzz041ymx2','32xlm5ji1404m4yl0hyxz24ilhj50h3lz5ji4hhh');
	Storage::deleteObject('publicfile','charts.js');
	Storage::putObject(Storage::inputFile(SAE_TMP_PATH.charts.js), 'publicfile','charts.js');
	echo "ok";
	?>