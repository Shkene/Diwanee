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
$q = "select * from users where username='{$username}' and pass='{$password}' limit 1";
$res = mysqli_query($conn,$q);
$user = mysqli_fetch_object($res);

if($user){
		session_start();
	    $_SESSION['username'] = $user->username;
        header("location: http://localhost/posa/Diwanee/?cont=One&method=home");
}else{
	echo "Neispravan korisnik.";
}
