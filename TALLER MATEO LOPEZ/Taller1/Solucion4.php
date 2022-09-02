<?php 

// 4) Implemente un script que dada una cadena harcodeada muestre:

// a) El número de vocales (Por cada una)

// b) El número de mayúsculas

// c) El número de minúscula

// d) El número de consonantes


    //COD ASCI

$string=$_GET["harcodeada"];

    //N-VOCALES

$a = substr_count($string, "a")
+substr_count($string, "A");

$e = substr_count($string, "e")
+substr_count($string, "E");

$i = substr_count($string, "i")
+substr_count($string, "I");

$o = substr_count($string, "o")
+substr_count($string, "O");

$u = substr_count($string, "u")
+substr_count($string, "U");

    



    //MINUSCULAS

    $Minusculas = 
substr_count($string, "a")
+substr_count($string, "b")
+substr_count($string, "c")
+substr_count($string, "d")
+substr_count($string, "e")
+substr_count($string, "f")
+substr_count($string, "g")
+substr_count($string, "h")
+substr_count($string, "i")
+substr_count($string, "j")
+substr_count($string, "k")
+substr_count($string, "l")
+substr_count($string, "m")
+substr_count($string, "n")
+substr_count($string, "o")
+substr_count($string, "p")
+substr_count($string, "q")
+substr_count($string, "r")
+substr_count($string, "s")
+substr_count($string, "t")
+substr_count($string, "u")
+substr_count($string, "v")
+substr_count($string, "w")
+substr_count($string, "y")
+substr_count($string, "z");

    //MAYUSCULAS.

    $Mayusculas = 
substr_count($string, "A")
+substr_count($string, "B")
+substr_count($string, "C")
+substr_count($string, "D")
+substr_count($string, "E")
+substr_count($string, "F")
+substr_count($string, "G")
+substr_count($string, "H")
+substr_count($string, "I")
+substr_count($string, "J")
+substr_count($string, "K")
+substr_count($string, "L")
+substr_count($string, "M")
+substr_count($string, "N")
+substr_count($string, "O")
+substr_count($string, "P")
+substr_count($string, "Q")
+substr_count($string, "S")
+substr_count($string, "T")
+substr_count($string, "U")
+substr_count($string, "V")
+substr_count($string, "W")
+substr_count($string, "X")
+substr_count($string, "Y")
+substr_count($string, "Z");
    
    
            //CONSONANTES
    $Consonantes = 
substr_count($string, "b")
+substr_count($string, "c")
+substr_count($string, "d")
+substr_count($string, "f")
+substr_count($string, "g")
+substr_count($string, "h")
+substr_count($string, "j")
+substr_count($string, "k")
+substr_count($string, "l")
+substr_count($string, "m")
+substr_count($string, "n")
+substr_count($string, "p")
+substr_count($string, "q")
+substr_count($string, "r")
+substr_count($string, "s")
+substr_count($string, "t")
+substr_count($string, "v")
+substr_count($string, "w")
+substr_count($string, "x")
+substr_count($string, "y")
+substr_count($string, "z")
+substr_count($string, "A")
+substr_count($string, "B")
+substr_count($string, "C")
+substr_count($string, "D")
+substr_count($string, "F")
+substr_count($string, "G")
+substr_count($string, "H")
+substr_count($string, "J")
+substr_count($string, "K")
+substr_count($string, "L")
+substr_count($string, "M")
+substr_count($string, "N")
+substr_count($string, "P")
+substr_count($string, "Q")
+substr_count($string, "R")
+substr_count($string, "S")
+substr_count($string, "T")
+substr_count($string, "V")
+substr_count($string, "W")
+substr_count($string, "X")
+substr_count($string, "Y")
+substr_count($string, "Z");

        //VOCALES

            print "<h4> VOCALES </h4>";
   
    print $string; print "<br> <br>";
    print  "Vocal a hay: ".$a; print "<br>";
    print "Vocal e hay: ".$e; print "<br>";
    print "Vocal i hay: ".$i; print "<br>";
    print "Vocal o hay: ".$o; print "<br>";
    print "Vocal u hay: ".$u;
    print "<br><br><br>";


    //CONSONANTES

    print "<h4> CONSONANTES </h4>";
    print "Consonantes:  ".$Consonantes;
    print "<br><br>";

    //MAYUSCULAS

    print "<h4> MAYUSCULAS </h4>";

    print "Mayusculas: ".$Mayusculas;
    print "<br><br>";


    //MINUSCULAS
    print "<h4> MINUSCULAS </h4>";
    print "Minusculas : ".$Minusculas;
    


 ?>