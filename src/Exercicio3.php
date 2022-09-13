<?php


/**
 * Neste problema, dado uma palavra composta somente por letras [a-zA-Z], cada letra 
 * possui um valor específico, ‘a’ vale 1, ‘b’ vale 2 e assim por diante, até a letra ‘z’ que vale 26. 
 * Do mesmo modo ‘A’ vale 27, ‘B’ vale 28, até a letra ‘Z’ que vale 52.
 * O valor da palavra será a soma total dos valores de todas as letras da palavra.
 * Você precisa definir se cada palavra em um conjunto de palavras é:
 * Prima ou não;
 * Feliz ou não;
 * Múltipla de 3 ou 5;
 * Qualquer caractere na palavra que não seja uma letra deve ser desconsiderado.
 */

class Palavras extends NumerosFelizes {

    public $numberIsPrime;
    public $numberIsHappy;
    public $numberIsMultipleOf;
    public $letras = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26
    ];

    public function __construct() {

        // adiciona as maiúsculas nno array de letras :
        $lastValue = end($this->letras);
        foreach ($this->letras as $key => $value) {
            $this->letras[strtoupper($key)] = $lastValue + 1;
            $lastValue++;
        }
    }

    public function checkPalavra($string) {
        if ($this->prepareString($string)) {

            $soma = $this->getNumberOfString($string);

            $this->numberIsPrime = $this->isPrime($soma);

            $this->numberIsHappy = $this->isHappy($soma);

            $this->numberIsMultipleOf = $this->isMultipleOf3Or5($soma);

            $this->printAnswer($soma);

        } else {
            echo 'Erro: Deve ser inserida apenas uma palavra, contendo apenas letras maiúsculas ou minúsculas.';
            return false;
        }
    }

    /**
     * Faz o cálculo das letras da palavra
     */
    public function getNumberOfString($string) {
        $str = str_split($string);
        $soma = 0;
        foreach ($str as $key => $value) {
            $soma += $this->letras[$value];
        }
        return $soma;
    }

    public function isPrime($number) {

       for($x=2; $x < $number; $x++){
           if( ($number % $x) == 0)
               {
                return false;
               }
         }       
         return true;
    }

    public function isHappy($number) {
        
        $happyClass = new NumerosFelizes();
        return $happyClass->checkNumeroFeliz($number);
    }

    public function isMultipleof3Or5($number) {

        return ($this->checkMultiple($number, 3) || $this->checkMultiple($number, 5));
    }

    /**
     * verifica se a variável é composta apenas de strings, sem números
     */
    public function prepareString($string) {

        // se contém mais de uma palavra:
        $str = explode(' ', $string);
        if (count($str) > 1) { 
            return false;
        }

        // se contém paneas letras:
        if (!ctype_alpha($string)) {
            return false;
        }

        return true;
    }

    /**
     * Verifica se $check é múltiplo de $num
     */
    public function checkMultiple($check, $num) {
        return ( ($check % $num) == 0);
    }

    public function printAnswer($soma) {

        echo $soma .': <br>';
        echo $this->numberIsPrime ? 'É primo' : 'Não é primo';
        echo '<br>';
        echo $this->numberIsHappy ? 'É Feliz' : 'Não é feliz';
        echo '<br>';
        echo $this->numberIsMultipleOf ? 'É múltiplo de 3 ou 5' : 'Não é múltiplo de 3 ou 5';
        return;
    }

}