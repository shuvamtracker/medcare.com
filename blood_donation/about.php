<?php
session_start();
include('header/header.php');
include('header/connection.php');
if(isset($_SESSION['loggedin'])==true){
	include('header/navadmin.php');
}
else {
	include('header/navuser.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body
	{
		background-image: url("https://s-media-cache-ak0.pinimg.com/736x/5e/bb/35/5ebb350afa99fb3a2b75c5855e98bd9c.jpg");
		background-attachement:center;
		background-size:cover;
	 }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container {
  padding: 0 16px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

	<u><h2 style="text-align:center">#DEVELOPERS</h2></u>

<div class="card">
  <img src="img/shuv.jpeg" alt="Shuvam" style="width:100%">
  <div class="container">
    <h1>SHUVAM THAKUR</h1>
    <p class="title">B.TECH(COMP) 3rd YEAR</p>
    <p>RAJARAMBAPU INSTITUTE OF TECHNOLOGY</p>
    <div style="margin: 24px 0;"> 
      <a href='https://www.facebook.com/shuvam.chrombit'><i class="fa fa-facebook"></i></a> 
   </div>
  </div>
</div>
<br>
<br>

	<center><h2>© 2022 Shuvam Thakur.  All rights reserved</h2></center>
</body>
</html>
