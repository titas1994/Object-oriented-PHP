<?php

class Car
{

	public $wheels = 4;
	protected $hood = 1;
	private $engine = 1;
	var $doors = 4;
	function Moveengine(){

		//echo "Wheels move";
		echo "Engine : ".$this->engine;
	}
	
}
class Semi extends Car{

	function Movehoods(){

		//echo "Wheels move";
		echo "Hoods : ".$this->hood;
	}
	

}
$obj = new Car();
$semi = new Semi();
echo "Wheels : ".$obj->wheels."<br>";
echo $semi->Movehoods();
echo "<br>";
echo $obj->Moveengine();

?>