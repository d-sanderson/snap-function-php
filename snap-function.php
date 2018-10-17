<?php

function minus($foo, $baz) {
	$bat = $foo - $baz;
	return $bat;
}
echo "10 - 4  = " . minus(10,4) . "<br/>";


function fullName($first, $last) {

	return "Your name is " . $first . " " . $last;
}

$first = 'David';
$last = 'Sanderson';

echo fullName($first, $last) . '<br/>';


function myArray() {

$teachers = array("George", "Chloe", "Brent", "Dan");

	echo "Our main instruction is " . $teachers[0] . ". Our Pro-Dev instructor is " . $teachers[3] . ". Our chief engineer is " . $teachers[1];
}

echo myArray();

//George's Examples:

function integer(int $parameter) {
	return($parameter * 2);
}

function string(string $parameter) {
	$return = str_repeat($parameter, 10);
	return($return . " ". "Batman!");
}

function arrayMethod(array $array) {
	$newArray = [];
	foreach($array as $value) {
		$newArray[] = $value . " " . $value;
	}
	return $newArray;
}

$return1 = integer(9);
var_dump($return1);

$return2 = string("Na");
var_dump($return2);

$return3 = arrayMethod(["na", "na", "hey"]);
var_dump($return3);

?>