var Charts = function () {
	return {

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
			var totalPoints = 250;
			function getRandomData() {
				if (data.length > 0) data = data.slice(1);
				while (data.length < totalPoints) {
					var prev = data.length > 0 ? data[data.length - 1] : 50;
					var y = prev + Math.random() * 10 - 5;
					if (y < 0) y = 0;
					if (y > 100) y = 100;
					data.push(y);
				}
				var res = [];
				for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
				return res;
			}

			function chart1() {
				var pageviews = [
					[0,5],[1,5],[2,5],[3, 6],[4, 5],[5, 20],[6, 25],[7, 36],[8, 26],[9, 38],[10, 39],[11, 50],[12, 51],[13, 12],[14, 13],[15, 14],[16, 15],[17, 15],[18, 16],[19, 17],[20, 18],[21, 19],[22, 20],[23, 21],
					];
				var visitors = [
					[0,5],[1,5],[2,5],[3, 6],[4, 5],[5, 20],[6, 25],[7, 36],[8, 26],[9, 38],[10, 39],[11, 50],[12, 51],[13, 12],[14, 13],[15, 14],[16, 15],[17, 15],[18, 16],[19, 17],[20, 18],[21, 19],[22, 20],[23, 21],
				];
				var plot = $.plot($("#chart_1"), [{
					data: pageviews,
					label: "昨日访问量"
				}, {
					data: visitors,
					label: "今日访问量"
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
						tickColor: "#eee",
						borderWidth: 0
					},
					colors: ["#d12610", "#37b7f3", "#52e136"],
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
					$('<div id="tooltip">' + contents + '</div>').css({
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
					}).appendTo("body").fadeIn(200);
				};
				var previousPoint = null;
				$("#chart_1").bind("plothover", function (event, pos, item) {
					$("#x").text(pos.x.toFixed(2));
					$("#y").text(pos.y.toFixed(2));
					if (item) {
						if (previousPoint != item.dataIndex) {
							previousPoint = item.dataIndex;
							$("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							    y = item.datapoint[1].toFixed(2);
							showTooltip (item.pageX, item.pageY, item.series.label + " = " + y);
						};
					} else {
						$("#tooltip").remove();
						previousPoint = null;
					};
				});
			};
			//graph
			chart1();
		};
	};
}();