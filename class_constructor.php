<?php

class Car
{

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;
	function __construct(){

		//echo "Wheels move";
		echo "Constructor : ".$this->wheels = 12;
	}
	
}
$obj = new Car();
echo "<br>";
$obj1 = new Car();

?>