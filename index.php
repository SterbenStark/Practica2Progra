
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TAREA - 2 - SterbenStark</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
<style>
body {
  margin: 0;
  font-family: Helvetica;
}

.topnav {
  overflow: hidden;
  background-color: #009cde;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: Tahoma;
}

.topnav a:hover {
  background-color: white;
  color: #009cde;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
  
<div class="topnav">
  <a href="/">Home</a> 
  <a href="/book">Books</a>
  <a href="/author">Authors</a>
  <a href="/publisher">Publishers</a> 
</div> 
<?php
error_reporting(E_ALL);
ini_set('display_errors',0);
session_start();
require('PHPFramex.php');
require('routes.php')
?>
</body>