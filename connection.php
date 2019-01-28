<?php 
session_start();
error_reporting(1);

if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("hospital");
 
if($_SESSION['admin']=="")
{
header('index.php');
}
 
?>
 <html>
 <head>
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
	<style>
		.log{
			position: fixed;
			top:14px;
			margin-right: 20px;
			width: 100px;
			right:0px;
			float: right;
		}
	</style>
 </head> 
 <body>

<a class="btn btn-danger log" href="logout.php">Logout</a>
</body>
</html>
