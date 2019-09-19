<?php

if ($argc <4){
	die("é preciso passar 3 coeficientes");
}
print_r(raizes($argv[1],$argv[2], $argv[3]));

function raizes($a,$b,$c){
	$retorno = null;
	$delta = pow($b,2) -4 * $a * $c;
	if ($delta < 0){
		die("Não possui raizes reais");
	}else{
		$r1 = (-$b + sqrt($delta))/(2*$a);
		$r2 = (-$b - sqrt($delta))/(2*$a);
		$retorno = ["r1"=>$r1, "r2"=>$r2];
	}
	return $retorno;
}


