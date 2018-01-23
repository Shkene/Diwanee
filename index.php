<?php
require "config.php";

$cont = isset($_GET['cont'])?$_GET['cont']:"One";
$method = isset($_GET['method'])?$_GET['method']:"forma";
$cont = $cont."Controller";
$c = new $cont;
$c->$method();

