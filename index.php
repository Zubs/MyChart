<!DOCTYPE html>
<html>
<head>
	<title>My ChartJS</title>
	
	<!-- Meta tags to maybe help SEO -->
        <meta name="author" content="Zubair Idris Aweda">
	
        <!-- Copied from my autogenerated linked description with some little changes -->
        <meta name="description" content="Zubair Idris' ready to use chartjs code samples.">
	
        <!-- Just my favorite languages -->
        <meta name="keywords" content="Zubair, Idris, Aweda, Zubair Idris, Zubair Idris Aweda, PHP, Chart, ChartJs, web development, data visualization">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  	<style type="text/css">
  		canvas {width: 200px; height: 200px; margin-top: 10px;}
  		.card {margin-top: 20px;}
  	</style>
</head>
<body class="container mb-5">
	<h1>Hello</h1>
	<div class="row mb-5">
		<?php include 'bar.php'; ?>
		<?php include 'line.php'; ?>
		<?php include 'pie.php'; ?>
		<?php include 'radar.php'; ?>
		<?php include 'doughnut.php'; ?>
		<?php include 'polar.php'; ?>
		<?php include 'bubble.php'; ?>
		<?php include 'scatter.php'; ?>
	</div>
	<div class="card text-center">
 	    <div class="card-body">
		    <p class="card-text"><i class="fa fa-bell"></i></p>
  	   </div>
  	   <div class="card-footer text-muted">
    		2020 &copy; Zubair Idris Aweda
  	   </div>
	</div>
</body>
</html>
