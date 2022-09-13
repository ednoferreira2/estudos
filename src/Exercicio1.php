<?php

class Multiplos {

    /**
     * Caso 1: Qual é o valor da soma de todos os números 
     * múltiplos de 3 ou 5 de números naturais abaixo de 1000? 
     */
    public function caso1($num1 = 3, $num2 = 5, $limite = 1000) {
        $total = 0;
        for ($x = 1; $x < $limite; $x++) { 
            if ($this->isMultipleOf($x, $num1) || $this->isMultipleOf($x, $num2)) {
                $total += $x;
            }
        }
        return $total;
    }

    /**
     * Caso 2: Qual é o valor da soma de todos os números 
     * múltiplos de 3 e 5 de números naturais abaixo de 1000?
     */
    public function caso2($num1 = 3, $num2 = 5, $limite = 1000) {
        $total = 0;
        for ($x = 1; $x < $limite; $x++) { 
            if ($this->isMultipleOf($x, $num1) && $this->isMultipleOf($x, $num2)) {
                $total += $x;
            }
        }
        return $total;
    }

    /**
     * Caso 3: Qual é o valor da soma de todos os números 
     * múltiplos de (3 ou 5) e 7 de números naturais abaixo de 1000?
     */
    public function caso3($num1 = 3, $num2 = 5, $num3 = 7, $limite = 1000) {
        $total = 0;
        for ($x = 1; $x < $limite; $x++) { 
            if ( ($this->isMultipleOf($x, $num1) && $this->isMultipleOf($x, $num2)) || $this->isMultipleOf($x, $num3)) {
                $total += $x;
            }
        }
        return $total;
    }
    /**
     * Verifica se $check é múltiplo de $num
     */
    public function isMultipleOf($check, $num) {
        return ( ($check % $num) == 0);
    }

}