<?php
class OneController extends Controller {
	public function forma(){
		$this->loadView("forma");
	}
	public function home(){
		$this->loadView("home");
	}
	public function users(){
		$this->loadView("users");
	}
	public function logout(){
		$this->loadView("logout");
	}
}