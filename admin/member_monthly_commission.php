<?php
session_start();
require_once ('db.php"');
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Twitouch | Member Monthly Commission</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu">

	<?php include "inc/header.php";?>

	<div class="mobile-menu-left-overlay"></div>
	<?php include "inc/sidebar.php";?>

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Member Monthly Commission</h2>
							<div class="subtitle"></div>
						</div>
					</div>
				</div>
			</header>

			<section class="tabs-section">
				<div class="tabs-section-nav tabs-section-nav-icons">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="font-icon font-icon-cogwheel"></i>
										Diamond
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<span class="glyphicon glyphicon-music"></span>
										Platinam
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="fa fa-product-hunt"></i>
										Gold
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="font-icon font-icon-users"></i>
										Bronze
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">
						<?php include "inc/member_monthly_commission.php";?>
					</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2"><?php include "inc/member_monthly_commission.php";?></div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3"><?php include "inc/member_monthly_commission.php";?></div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4"></div><!--.tab-pane-->
				</div><!--.tab-content-->
			</section><!--.tabs-section-->


		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function(){
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('date', 'Date');
				dataTable.addColumn('number', 'Total clicks');
				dataTable.addRows([
					[new Date(2008, 7, 15), 200],
					[new Date(2008, 7, 16), 158],
					[new Date(2008, 7, 17), 110],
					[new Date(2008, 7, 18), 305],
					[new Date(2008, 7, 19), 254],
					[new Date(2008, 7, 20), 361],
					[new Date(2008, 7, 21), 180],
					[new Date(2008, 7, 22), 190]
				]);

				var options = {
					height: 260,
					legend: {
						position: 'bottom',
						alignment: 'start',
						textStyle: {
							fontSize: 13
						}
					},
					areaOpacity: 0.1,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						textPosition: 'out',
						format: 'MMM d',
						gridlines: {
							color: '#fff',
							count: 8
						}
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						baselineColor: '#d8e2e7',
						ticks: [0,100,200,300,400],
						gridlines: {
							color: '#d8e2e7',
							count: 4
						}
					},
					lineWidth: 3,
					colors: ['#ac6bec'],
					curveType: 'function',
					pointSize: 6,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#fff',
						strokeWidth: 0,
					},
					chartArea:{
						top: 10,
						bottom: 60,
						left: 30,
						right: 20
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						//isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			//google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChartWeekly);
			function drawChartWeekly() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('date', 'Date');
				dataTable.addColumn('number', 'Total clicks');
				dataTable.addRows([
					[new Date(2008, 7, 1), 300],
					[new Date(2008, 7, 8), 150],
					[new Date(2008, 7, 15), 220],
					[new Date(2008, 7, 22), 140],
					[new Date(2008, 7, 29), 310],
					[new Date(2008, 8, 5), 350],
					[new Date(2008, 8, 12), 280],
					[new Date(2008, 8, 19), 300]
				]);

				var options = {
					height: 260,
					legend: {
						position: 'bottom',
						alignment: 'start',
						textStyle: {
							fontSize: 13
						}
					},
					areaOpacity: 0.1,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						textPosition: 'out',
						format: 'MMM d',
						gridlines: {
							color: '#fff',
							count: 8
						}
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						baselineColor: '#d8e2e7',
						ticks: [0,100,200,300,400],
						gridlines: {
							color: '#d8e2e7',
							count: 4
						}
					},
					lineWidth: 3,
					colors: ['#ac6bec'],
					curveType: 'function',
					pointSize: 6,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#fff',
						strokeWidth: 0,
					},
					chartArea:{
						top: 10,
						bottom: 60,
						left: 30,
						right: 20
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						//isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div_weekly'));
				chart.draw(dataTable, options);
			}

			$('.tabs-section-simple a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				drawChartWeekly();
			});

			$(window).resize(function(){
				drawChartWeekly();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			//google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChartMonthly);
			function drawChartMonthly() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('date', 'Date');
				dataTable.addColumn('number', 'Total clicks');
				dataTable.addRows([
					[new Date(2008, 0, 1), 50],
					[new Date(2008, 1, 1), 320],
					[new Date(2008, 2, 1), 300],
					[new Date(2008, 3, 1), 200],
					[new Date(2008, 4, 1), 250],
					[new Date(2008, 5, 1), 100],
					[new Date(2008, 6, 1), 120],
					[new Date(2008, 7, 1), 240]
				]);

				var options = {
					height: 260,
					legend: {
						position: 'bottom',
						alignment: 'start',
						textStyle: {
							fontSize: 13
						}
					},
					areaOpacity: 0.1,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						textPosition: 'out',
						format: 'MMM yy',
						gridlines: {
							color: '#fff',
							count: 8
						}
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						baselineColor: '#d8e2e7',
						ticks: [0,100,200,300,400],
						gridlines: {
							color: '#d8e2e7',
							count: 4
						}
					},
					lineWidth: 3,
					colors: ['#ac6bec'],
					curveType: 'function',
					pointSize: 6,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#fff',
						strokeWidth: 0,
					},
					chartArea:{
						top: 10,
						bottom: 60,
						left: 30,
						right: 20
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						//isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div_monthly'));
				chart.draw(dataTable, options);
			}

			$('.tabs-section-simple a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				drawChartMonthly();
			});

			$(window).resize(function(){
				drawChartMonthly();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			google.charts.setOnLoadCallback(drawChartSecond);
			function drawChartSecond() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('date', 'Date');
				dataTable.addColumn('number', 'Total clicks');
				dataTable.addRows([
					[new Date(2008, 7, 1), 300],
					[new Date(2008, 7, 8), 150],
					[new Date(2008, 7, 15), 220],
					[new Date(2008, 7, 22), 140],
					[new Date(2008, 7, 29), 310],
					[new Date(2008, 8, 5), 350],
					[new Date(2008, 8, 12), 280],
					[new Date(2008, 8, 19), 300]
				]);

				var options = {
					height: 260,
					legend: {
						position: 'bottom',
						alignment: 'start',
						textStyle: {
							fontSize: 13
						}
					},
					areaOpacity: 0.1,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						textPosition: 'out',
						format: 'MMM d',
						gridlines: {
							color: '#fff',
							count: 8
						}
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#919fa9',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true
						},
						baselineColor: '#d8e2e7',
						ticks: [0,100,200,300,400],
						gridlines: {
							color: '#d8e2e7',
							count: 4
						}
					},
					lineWidth: 3,
					colors: ['#21a788'],
					curveType: 'function',
					pointSize: 6,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#fff',
						strokeWidth: 0,
					},
					chartArea:{
						top: 10,
						bottom: 60,
						left: 30,
						right: 20
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						//isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div_2'));
				chart.draw(dataTable, options);
			}

			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				drawChartSecond();
			});

			$(window).resize(function(){
				drawChartSecond();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>