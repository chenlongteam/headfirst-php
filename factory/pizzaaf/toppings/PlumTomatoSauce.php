<?php

require_once 'toppings/Sauce.php';
class PlumTomatoSauce implements Sauce {
	public function __toString() {
		return "Tomato sauce with plum tomatoes";
	}
}
