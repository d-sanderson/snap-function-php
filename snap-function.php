<?php

function minus($foo, $baz) {
	$bat = $foo - $baz;
	return $bat;
}
echo "10 - 4  = " . minus(10,4) . "<br>";

//

function fullName($first, $last) {

	return "You're name is " . $first . " " . $last;
}

$first = 'David';
$last = 'Sanderson';

echo fullName($first, $last) . '<br/>';



$teachers = array("George", "Chloe", "Brent", "Dan");

echo "Our main instruction is " . $teachers[0] . ". Our Pro-Dev instructor is " . $teachers[3];