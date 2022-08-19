<?php

$numeroUno = 52;
$numeroDos = 10;
echo esPrimoRelativo($numeroUno,$numeroDos);
function esPrimoRelativo($numeroUno,$numeroDos){

    $esPrimoRelativo = true;

    for ($i=2; $i < $numeroUno && $esPrimoRelativo; $i++){
        
        if ($numeroUno % $i == 0 && $numeroDos % $i ==0)
        $esPrimoRelativo = false;

        
    }
    
    return $esPrimoRelativo;
    
    

}




?>
