<?php 


// Definir una función que reciba dos listas y devuelva True si tienen al menos 1 miembro en común o devuelva False de lo contrario.


$lista1=[1,3,4];
$lista2=[1,4,1];


$i = 0;
$igual = false;
while ($i < sizeof($lista1) && $igual == false) {
	
	for($j=0; $j<count($lista2); $j++){
		if ($lista1[$i] == $lista2[$j]) { 

	//return true;
		//echo "True";
		$igual = true;
		break;

		}else{

		//echo "False";
		$igual = false;
		
		}
	
	}



	$i++;
}

if ($igual == true) {
	echo "TRUE";
}else{
	echo "FALSE";
}









//  ?>