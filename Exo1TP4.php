<?php
	function coupeur($string, $car){
		$tableau=explode($car, $string);
		return $tableau;
	}
//test de la fonction :
	$chaine=" TP4 | Devoir2 | Exercice1 | SMI6 ";
	$car="|";
	$tab1=coupeur($chaine, $car);
	echo  $tab1[0].'  /  '.$tab1[1].'  /  '.$tab1[2].'  /  '.$tab1[3].' ';
?>