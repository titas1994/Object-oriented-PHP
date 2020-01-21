<?php

class Car
{

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;
	function MoveWheels(){

		//echo "Wheels move";
		$this->wheels = 12;
	}
	function Cardoors(){

		//echo "Wheels move";
		$this->doors = 6;
	}
	
}
$obj = new Car();

class Plane extends Car{

	var $wheels = 20;


}
$jet =new Plane();
//$jet->MoveWheels();
echo "Wheels : ".$jet->wheels;
?>