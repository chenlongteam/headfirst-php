<?php

require_once 'Pizza.php';
class ChicagoStyleCheesePizza extends Pizza {

	public function __construct() {
		$this->name = "Chicago Style Deep Dish Cheese Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
 
		$this->toppings[] = "Shredded Mozzarella Cheese";
	}
 
	function cut() {
		echo "Cutting the pizza into square slices <br>\n";
	}
}
