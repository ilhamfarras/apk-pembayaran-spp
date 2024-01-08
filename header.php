<?php
session_start();
if ( !isset($_SESSION['login']) ) {
	header('location: login.php');
	
} 
?>

<!DOCTYPE html>
<html>
<head>
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="azizi.jpg">
  </head>
</head>
<body>
	
    <nav class="navbar navbar-default navbar-fixed-top">z
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Aplikasi Pembayaran SPP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
            <li><a href="dataguru.php">DATA GURU</a></li>
            <li><a href="datasiswa.php">DATA SISWA</a></li>
            <li><a href="datakelas.php">DATA KELAS</a></li>
            <li><a href="datapembayaran.php">DATA PEMBAYARAN</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>