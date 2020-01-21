<?php

class Car
{

	static $wheels = 4;
	var $hood = 1;
	function MoveWheels(){

		//echo "Wheels move";
		Car::$wheels = 12;
	}

}
$obj = new Car();

Car::MoveWheels(); //invoked static data

echo "Static Datatype : ".Car::$wheels; //static datatype declaration


?>