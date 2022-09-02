<?php 


// Implemente un script que dada una lista de palabras y un numero de entero harcodeadas, devuelva las palabras que tengan más de n caracteres.

//harcodee palabras




$texto = array ('limon','Cebolla','Tomatee','aji','a','Berenjena');
	$numero = 7;

    echo "<h1> Lista de palabras </h1>";
    sort ($texto);
    foreach ($texto as $textos) {
        echo "<li>".$textos;
    }
    echo "<br><br>";

    echo "<h2>Requerimiento</h2>";

	echo "Las palabras con mas o igual a $numero caracteres son: "."<br>";

		$numeroCaracteres = substr_count($texto [0], 'A')+substr_count($texto [0], 'B')+substr_count($texto [0], 'C')
    		+substr_count($texto [0], 'D')+substr_count($texto [0], 'E')+substr_count($texto [0], 'F')
    		+substr_count($texto [0], 'G')+substr_count($texto [0], 'H')+substr_count($texto [0], 'I')
    		+substr_count($texto [0], 'J')+substr_count($texto [0], 'K')+substr_count($texto [0], 'L')
    		+substr_count($texto [0], 'M')+substr_count($texto [0], 'N')+substr_count($texto [0], 'O')
    		+substr_count($texto [0], 'P')+substr_count($texto [0], 'Q')+substr_count($texto [0], 'R')
    		+substr_count($texto [0], 'S')+substr_count($texto [0], 'T')+substr_count($texto [0], 'U')
    		+substr_count($texto [0], 'V')+substr_count($texto [0], 'W')+substr_count($texto [0], 'X')
    		+substr_count($texto [0], 'Y')+substr_count($texto [0], 'Z')+substr_count($texto [0], 'a')
    		+substr_count($texto [0], 'b')+substr_count($texto [0], 'c')+substr_count($texto [0], 'd')
    		+substr_count($texto [0], 'e')+substr_count($texto [0], 'f')+substr_count($texto [0], 'g')
    		+substr_count($texto [0], 'h')+substr_count($texto [0], 'i')+substr_count($texto [0], 'j')
    		+substr_count($texto [0], 'k')+substr_count($texto [0], 'l')+substr_count($texto [0], 'm')
    		+substr_count($texto [0], 'n')+substr_count($texto [0], 'o')+substr_count($texto [0], 'p')
    		+substr_count($texto [0], 'q')+substr_count($texto [0], 'r')+substr_count($texto [0], 's')
    		+substr_count($texto [0], 't')+substr_count($texto [0], 'u')+substr_count($texto [0], 'v')
    		+substr_count($texto [0], 'w')+substr_count($texto [0], 'x')+substr_count($texto [0], 'y')
    		+substr_count($texto [0], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[0];
   			echo "<br>";
   			}

   			$numeroCaracteres = substr_count($texto [1], 'A')+substr_count($texto [1], 'B')+substr_count($texto [1], 'C')
    		+substr_count($texto [1], 'D')+substr_count($texto [1], 'E')+substr_count($texto [1], 'F')
    		+substr_count($texto [1], 'G')+substr_count($texto [1], 'H')+substr_count($texto [1], 'I')
    		+substr_count($texto [1], 'J')+substr_count($texto [1], 'K')+substr_count($texto [1], 'L')
    		+substr_count($texto [1], 'M')+substr_count($texto [1], 'N')+substr_count($texto [1], 'O')
    		+substr_count($texto [1], 'P')+substr_count($texto [1], 'Q')+substr_count($texto [1], 'R')
    		+substr_count($texto [1], 'S')+substr_count($texto [1], 'T')+substr_count($texto [1], 'U')
    		+substr_count($texto [1], 'V')+substr_count($texto [1], 'W')+substr_count($texto [1], 'X')
    		+substr_count($texto [1], 'Y')+substr_count($texto [1], 'Z')+substr_count($texto [1], 'a')
    		+substr_count($texto [1], 'b')+substr_count($texto [1], 'c')+substr_count($texto [1], 'd')
    		+substr_count($texto [1], 'e')+substr_count($texto [1], 'f')+substr_count($texto [1], 'g')
    		+substr_count($texto [1], 'h')+substr_count($texto [1], 'i')+substr_count($texto [1], 'j')
    		+substr_count($texto [1], 'k')+substr_count($texto [1], 'l')+substr_count($texto [1], 'm')
    		+substr_count($texto [1], 'n')+substr_count($texto [1], 'o')+substr_count($texto [1], 'p')
    		+substr_count($texto [1], 'q')+substr_count($texto [1], 'r')+substr_count($texto [1], 's')
    		+substr_count($texto [1], 't')+substr_count($texto [1], 'u')+substr_count($texto [1], 'v')
    		+substr_count($texto [1], 'w')+substr_count($texto [1], 'x')+substr_count($texto [1], 'y')
    		+substr_count($texto [1], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[1];
   			echo "<br>";
   			}

   			$numeroCaracteres = substr_count($texto [2], 'A')+substr_count($texto [2], 'B')+substr_count($texto [2], 'C')
    		+substr_count($texto [2], 'D')+substr_count($texto [2], 'E')+substr_count($texto [2], 'F')
    		+substr_count($texto [2], 'G')+substr_count($texto [2], 'H')+substr_count($texto [2], 'I')
    		+substr_count($texto [2], 'J')+substr_count($texto [2], 'K')+substr_count($texto [2], 'L')
    		+substr_count($texto [2], 'M')+substr_count($texto [2], 'N')+substr_count($texto [2], 'O')
    		+substr_count($texto [2], 'P')+substr_count($texto [2], 'Q')+substr_count($texto [2], 'R')
    		+substr_count($texto [2], 'S')+substr_count($texto [2], 'T')+substr_count($texto [2], 'U')
    		+substr_count($texto [2], 'V')+substr_count($texto [2], 'W')+substr_count($texto [2], 'X')
    		+substr_count($texto [2], 'Y')+substr_count($texto [2], 'Z')+substr_count($texto [2], 'a')
    		+substr_count($texto [2], 'b')+substr_count($texto [2], 'c')+substr_count($texto [2], 'd')
    		+substr_count($texto [2], 'e')+substr_count($texto [2], 'f')+substr_count($texto [2], 'g')
    		+substr_count($texto [2], 'h')+substr_count($texto [2], 'i')+substr_count($texto [2], 'j')
    		+substr_count($texto [2], 'k')+substr_count($texto [2], 'l')+substr_count($texto [2], 'm')
    		+substr_count($texto [2], 'n')+substr_count($texto [2], 'o')+substr_count($texto [2], 'p')
    		+substr_count($texto [2], 'q')+substr_count($texto [2], 'r')+substr_count($texto [2], 's')
    		+substr_count($texto [2], 't')+substr_count($texto [2], 'u')+substr_count($texto [2], 'v')
    		+substr_count($texto [2], 'w')+substr_count($texto [2], 'x')+substr_count($texto [2], 'y')
    		+substr_count($texto [2], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[2];
   			echo "<br>";
   			}

   			$numeroCaracteres = substr_count($texto [3], 'A')+substr_count($texto [3], 'B')+substr_count($texto [3], 'C')
    		+substr_count($texto [3], 'D')+substr_count($texto [3], 'E')+substr_count($texto [3], 'F')
    		+substr_count($texto [3], 'G')+substr_count($texto [3], 'H')+substr_count($texto [3], 'I')
    		+substr_count($texto [3], 'J')+substr_count($texto [3], 'K')+substr_count($texto [3], 'L')
    		+substr_count($texto [3], 'M')+substr_count($texto [3], 'N')+substr_count($texto [3], 'O')
    		+substr_count($texto [3], 'P')+substr_count($texto [3], 'Q')+substr_count($texto [3], 'R')
    		+substr_count($texto [3], 'S')+substr_count($texto [3], 'T')+substr_count($texto [3], 'U')
    		+substr_count($texto [3], 'V')+substr_count($texto [3], 'W')+substr_count($texto [3], 'X')
    		+substr_count($texto [3], 'Y')+substr_count($texto [3], 'Z')+substr_count($texto [3], 'a')
    		+substr_count($texto [3], 'b')+substr_count($texto [3], 'c')+substr_count($texto [3], 'd')
    		+substr_count($texto [3], 'e')+substr_count($texto [3], 'f')+substr_count($texto [3], 'g')
    		+substr_count($texto [3], 'h')+substr_count($texto [3], 'i')+substr_count($texto [3], 'j')
    		+substr_count($texto [3], 'k')+substr_count($texto [3], 'l')+substr_count($texto [3], 'm')
    		+substr_count($texto [3], 'n')+substr_count($texto [3], 'o')+substr_count($texto [3], 'p')
    		+substr_count($texto [3], 'q')+substr_count($texto [3], 'r')+substr_count($texto [3], 's')
    		+substr_count($texto [3], 't')+substr_count($texto [3], 'u')+substr_count($texto [3], 'v')
    		+substr_count($texto [3], 'w')+substr_count($texto [3], 'x')+substr_count($texto [3], 'y')
    		+substr_count($texto [3], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[3];
   			echo "<br>";
   			}

   			$numeroCaracteres = substr_count($texto [4], 'A')+substr_count($texto [4], 'B')+substr_count($texto [4], 'C')
    		+substr_count($texto [4], 'D')+substr_count($texto [4], 'E')+substr_count($texto [4], 'F')
    		+substr_count($texto [4], 'G')+substr_count($texto [4], 'H')+substr_count($texto [4], 'I')
    		+substr_count($texto [4], 'J')+substr_count($texto [4], 'K')+substr_count($texto [4], 'L')
    		+substr_count($texto [4], 'M')+substr_count($texto [4], 'N')+substr_count($texto [4], 'O')
    		+substr_count($texto [4], 'P')+substr_count($texto [4], 'Q')+substr_count($texto [4], 'R')
    		+substr_count($texto [4], 'S')+substr_count($texto [4], 'T')+substr_count($texto [4], 'U')
    		+substr_count($texto [4], 'V')+substr_count($texto [4], 'W')+substr_count($texto [4], 'X')
    		+substr_count($texto [4], 'Y')+substr_count($texto [4], 'Z')+substr_count($texto [4], 'a')
    		+substr_count($texto [4], 'b')+substr_count($texto [4], 'c')+substr_count($texto [4], 'd')
    		+substr_count($texto [4], 'e')+substr_count($texto [4], 'f')+substr_count($texto [4], 'g')
    		+substr_count($texto [4], 'h')+substr_count($texto [4], 'i')+substr_count($texto [4], 'j')
    		+substr_count($texto [4], 'k')+substr_count($texto [4], 'l')+substr_count($texto [4], 'm')
    		+substr_count($texto [4], 'n')+substr_count($texto [4], 'o')+substr_count($texto [4], 'p')
    		+substr_count($texto [4], 'q')+substr_count($texto [4], 'r')+substr_count($texto [4], 's')
    		+substr_count($texto [4], 't')+substr_count($texto [4], 'u')+substr_count($texto [4], 'v')
    		+substr_count($texto [4], 'w')+substr_count($texto [4], 'x')+substr_count($texto [4], 'y')
    		+substr_count($texto [4], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[4];
   			echo "<br>";
   			}

   			$numeroCaracteres = substr_count($texto [5], 'A')+substr_count($texto [5], 'B')+substr_count($texto [5], 'C')
    		+substr_count($texto [5], 'D')+substr_count($texto [5], 'E')+substr_count($texto [5], 'F')
    		+substr_count($texto [5], 'G')+substr_count($texto [5], 'H')+substr_count($texto [5], 'I')
    		+substr_count($texto [5], 'J')+substr_count($texto [5], 'K')+substr_count($texto [5], 'L')
    		+substr_count($texto [5], 'M')+substr_count($texto [5], 'N')+substr_count($texto [5], 'O')
    		+substr_count($texto [5], 'P')+substr_count($texto [5], 'Q')+substr_count($texto [5], 'R')
    		+substr_count($texto [5], 'S')+substr_count($texto [5], 'T')+substr_count($texto [5], 'U')
    		+substr_count($texto [5], 'V')+substr_count($texto [5], 'W')+substr_count($texto [5], 'X')
    		+substr_count($texto [5], 'Y')+substr_count($texto [5], 'Z')+substr_count($texto [5], 'a')
    		+substr_count($texto [5], 'b')+substr_count($texto [5], 'c')+substr_count($texto [5], 'd')
    		+substr_count($texto [5], 'e')+substr_count($texto [5], 'f')+substr_count($texto [5], 'g')
    		+substr_count($texto [5], 'h')+substr_count($texto [5], 'i')+substr_count($texto [5], 'j')
    		+substr_count($texto [5], 'k')+substr_count($texto [5], 'l')+substr_count($texto [5], 'm')
    		+substr_count($texto [5], 'n')+substr_count($texto [5], 'o')+substr_count($texto [5], 'p')
    		+substr_count($texto [5], 'q')+substr_count($texto [5], 'r')+substr_count($texto [5], 's')
    		+substr_count($texto [5], 't')+substr_count($texto [5], 'u')+substr_count($texto [5], 'v')
    		+substr_count($texto [5], 'w')+substr_count($texto [5], 'x')+substr_count($texto [5], 'y')
    		+substr_count($texto [5], 'z');

    		if ($numeroCaracteres >= $numero) {
   			echo "==> ".$texto[5];
   			}




// $lista = ["Limon", "Ajo", "Tomate"];
// $array1 = [];
// $numero = [lista>numero];
// function palabrasOrd(array $lista){
//             $verif = true;

//             while ( $verif ) {
//                 $verif = false;   

//                 for( $i=0;  $i < sizeof($lista) -1;  $i++ ){
//                        if ( strlen($lista[ $i ]) > strlen($lista[$i+1]) )  {
//                                $array1 = $lista[ $i ];
//                                $lista[ $i ] = $lista[ $i+1 ];
//                                $lista[ $i+1 ] = $array1;
//                                $verif = true; 
//                       } 
//                 }
                
//           } 

//          return $lista;
//          }


// $resultado = palabrasOrd($lista);

// for ($i=0; $i < sizeof($resultado) ; $i++) {
//     $longitud = sizeof($resultado); 
    
//     if($i==1){
      
//     }elseif ($i==($longitud-1)) {
//         echo "la palabra con mas caracteres es " . $resultado[$longitud - 1];
//     }
    
// }








 ?>