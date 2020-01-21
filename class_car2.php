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
$obj1 = new Car();
//$obj->MoveWheels();
//$obj->wheels =8;
echo "Wheels : ".$obj->wheels."<br>";
echo "Wheels : ".$obj->wheels =10;
echo "<br>";
$obj1->Cardoors();
echo "Doors : ".$obj1->doors;
?>