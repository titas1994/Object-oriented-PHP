<?php

class Car
{
	function BmwMoveWheels(){

		echo "Wheels move";
	}
	function AudiMoveWheels(){

		echo "Wheels move";
	}
	
}
$obj = new Car();
$obj1 = new Car();  
$obj ->BmwMoveWheels();
?>