<?php 



 $lista = ["palabra", "hamburguesa", "si", "cinco"];
 $array1 = [];

 function palabrasOrd(array $lista){
             $verif = true;

             while ( $verif ) {
                 $verif = false;   

                 for( $i=0;  $i < sizeof($lista) -1;  $i++ ){
                        if ( strlen($lista[ $i ]) > strlen($lista[$i+1]) )  {
                                $array1 = $lista[ $i ];
                                $lista[ $i ] = $lista[ $i+1 ];
                                $lista[ $i+1 ] = $array1;
                                $verif = true; 
                       } 
                 }
                
           } 

          return $lista;
          }


 $resultado = palabrasOrd($lista);

 for ($i=0; $i < sizeof($resultado) ; $i++) {
     $longitud = sizeof($resultado); 
    
     if($i==0){
         echo "la palabra mas corta es " . $resultado[0] . "<br>";
     }elseif ($i==($longitud-1)) {
         echo "la palabra mas larga es " . $resultado[$longitud - 1];
     }
    
}

// Implemente un script que dada una lista de palabras harcodeadas. Muestre la más larga y la más corta

//  $lista1 = array("Hola", "Ja");

//  ($lista1);
//  function num($lista1){

//      $larga = 0;
//      $corta = 0;

//      foreach ($lista1 as $key) {
//      if ($larga < $key) {
//          $larga = $key;
//          // code...
//      }

//      if ($corta > $key) {
//          $corta = $key;
//          // code...
//      }

//      }

//      echo "La palabra mas larga es: ".$larga;
//      echo "La palabra mas corta es: ".$corta;
//  }



// $array = array("1","22222");
// menormayor($array);
// function menormayor ($array) {
//      $mayor = $array[0]; // ESTO PERMITE INICIAR DESDE EL PRIMER ELEMENTO DEL ARRAY
//      $menor = $array[0];
//      foreach ($array as $key) {
//       if ($mayor > $key){
//          $mayor = $key;
//       }
//       if ($menor < $key){
//          $menor = $key;
//       }
        

//      }
// echo "La palabra con mas caracteres es: ". $mayor. "</br>";
// echo "La palabra con menor caracteres es: ". $menor;
// }
















// $array1 = array("Hola","soy","Mateoo");

// $palabraLarga = ();
// $palabraCorta = ();









 ?>