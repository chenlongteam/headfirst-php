<?php

//咖啡-深焙咖啡
require_once './Beverage.php';
class DarkRoast extends Beverage {

	public function __construct() {
		$this->description = "Dark Roast Coffee";
	}
 
	public function cost() {
		return 0.99;
	}
}

