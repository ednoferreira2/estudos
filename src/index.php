<?php

require 'Exercicio1.php';
require 'Exercicio2.php';

/*$Exercicio1 = new Multiplos();
echo $Exercicio1->caso1() . '<br>';
echo $Exercicio1->caso2() . '<br>';
echo $Exercicio1->caso3() . '<br>';
*/

$Exercicio2 = new NumerosFelizes();
echo "número 7: ". $Exercicio2->checkNumeroFeliz(7) . '<br>';
//echo "número 8: ". $Exercicio2->checkNumeroFeliz(8) . '<br>';
//echo "número 10: ". $Exercicio2->checkNumeroFeliz(10) . '<br>';
//echo "número 14: ". $Exercicio2->checkNumeroFeliz(14) . '<br>';