<?php
function __autoload($class){
	require_once "controller/".$class.".php";
}