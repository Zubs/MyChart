<!DOCTYPE html>
<html>
<head>
	<title>My ChartJS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  	<style type="text/css">
  		canvas {width: 200px; height: 200px; margin-top: 10px;}
  		.card {margin-top: 10px;}
  	</style>
</head>
<body class="container mb-5">
	<h1>Hello</h1>
	<div class="row mb-5">
		<?php include 'bar.php'; ?>
		<?php include 'line.php'; ?>
		<?php include 'pie.php'; ?>
	</div>
</body>
</html>