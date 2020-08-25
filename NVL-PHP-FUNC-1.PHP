<?php

 $letras = cuentaLetraA('Paleta');
 echo $letras;
 function cuentaLetraA($palabra){

 //	echo $palabra;
 	$array = explode('a',$palabra);
 	
 	$longitud = count($array);
 	$longitud--;
 	return "la palabra \"$palabra\" contiene $longitud letras A";
 }



?>