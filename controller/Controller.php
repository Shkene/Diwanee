<?php
abstract class Controller {
	public function loadView($view){
		 include "view/".$view.".php";
	}
}