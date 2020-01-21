<?php

class Car
{
	function MoveWheels(){

		echo "Wheels move";
	}
	
}
/*** check the class is exit or not ****/
// if(class_exists("Car")){

// 	echo "Class Exit";
// }
// else{
// 	echo "Class not Exit";
// }
/*** ------------------ ****/
if(method_exists("Car", "MoveWheels")){

	echo "The method exists";
}
else{

	echo "No";
}
?>