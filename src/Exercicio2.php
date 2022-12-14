<?php

/**
 * Os números felizes são definidos pelo seguinte procedimento: 
 * Começando com qualquer número inteiro positivo, o número 
 * é substituído pela soma dos quadrados dos seus dígitos. 
 * Repete-se esse processo até que o número seja igual a 1. 
 * 7² = 49 
 * 4² + 9² = 97 
 * 9² + 7² = 130 
 * 1² + 3² + 0² = 10 
 * 1² + 0² = 1 
 */

class NumerosFelizes {

    public $numeroOriginal = '';
    public $numeroLido = [];
    public $break = false;

    public function checkNumeroFeliz($numero) {

        if ($numero > 0) {

            if ( empty($this->numeroOriginal) )
                $this->numeroOriginal = $numero;
            
            $numero = $this->somaNumeros($numero);

            if ($this->break) {
                return false;
            }
            // número feliz
            if ($numero === 1){
                return true;
            }
            
            $this->checkNumeroFeliz($numero);
        }
    }

    public function quadrado($numero) {
        return pow($numero, 2);
    }

    public function somaNumeros($numeros) {
        
        if (in_array($numeros, $this->numeroLido)) {
            $this->break = true;
            return false;
        }
        $this->numeroLido[] = $numeros;

        $numeros = str_split($numeros);
        $soma = 0;
        
        foreach ($numeros as $n) {
            $this->numerosLidos[] = $n;
            $soma += $this->quadrado($n, 2);
        }
        return (int)$soma;
    }

}