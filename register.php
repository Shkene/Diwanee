<?php
require "db.php";
$username = $_POST['username'];
$password = $_POST['password'];
if(!isset($_POST['username'])||!isset($_POST['password'])){
	die("Molimo vas popunite obe kolone.");
}
$username = str_replace("'","",$username);
$username = str_replace("-","",$username);
$password = str_replace("'","",$password);
$password = str_replace("-","",$password);
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);

mysqli_query($conn,"insert into users values(null,'{$username}',{$password},CURRENT_TIME())");
header("location: http://localhost/posa/Diwanee/");

