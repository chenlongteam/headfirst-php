<?php

class ChicagoStyleClamPizza extends Pizza {
	public function __construct() {
		$this->name = "Chicago Style Clam Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
 
		$this->toppings[] = "Shredded Mozzarella Cheese";
		$this->toppings[] = "Frozen Clams from Chesapeake Bay";
	}
 
	function cut() {
		echo "Cutting the pizza into square slices <br>\n";
	}
}
