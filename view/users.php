<?php
include "nav.html";
require "db.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
$q = "select * from users";
$res = mysqli_query($conn,$q);
while($rw = mysqli_fetch_object($res)){
	echo $rw->username."- ".$rw->date."<br/>";
}
