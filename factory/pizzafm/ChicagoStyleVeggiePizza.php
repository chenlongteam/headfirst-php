<?php

class ChicagoStyleVeggiePizza extends Pizza {
	public function __construct() {
		$this->name = "Chicago Deep Dish Veggie Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
 
		$this->toppings[] = "Shredded Mozzarella Cheese";
		$this->toppings[] = "Black Olives";
		$this->toppings[] = "Spinach";
		$this->toppings[] = "Eggplant";
	}
 
	function cut() {
		echo "Cutting the pizza into square slices <br>\n";
	}
}
