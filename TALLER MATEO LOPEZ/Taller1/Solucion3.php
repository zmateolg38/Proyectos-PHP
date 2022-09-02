<?php

// 3) Implemente un script que dado una lista hardcodeada de números enteros imprima un histograma en la pantalla. Ejemplo: [4, 9, 7] debería imprimir lo siguiente:

// **** ********* *******


$asteriscos= array(6,9,5);
 foreach ($asteriscos as $asterisco) {
     // code...

     for ($i=0; $i <= $asterisco; $i++) { 
         // code...
         echo "<b>*</b>"; 

        
     }
     echo "<br>
     <br>";
 }





// function procedimiento($datos) { foreach(str_split($datos) as $i) { echo str_repeat("*", $i) . PHP_EOL; }}







?> 
