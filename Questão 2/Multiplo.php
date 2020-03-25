<?php

class Multiplo
{
    public function __construct()
    {
        for($i = 1; $i <= 100; $i++) {
            if($this->verificar(3, $i) && $this->verificar(5, $i)) {
                echo "FizzBuzz, ";
            }
            else if($this->verificar(3, $i)) {
                echo "Fizz, ";
            }
            else if($this->verificar(5, $i)) {
                echo "Buzz, ";
            }
            else {
                echo $i.", ";
            }
        }
    }

    /**
     * Verifica se o número de múltiplo, passando por parametro o $divisor e o $numero;
     * Caso for verdadeiro irá retorna true, se não irá retornar false;
     *
     * @param int $divisor
     * @param int $numero
     * @return bool
     */
    private function verificar(int $divisor, int $numero) : bool
    {
        // Se o divisor for 0, não é possível fazer o cálculo.
        if($divisor === 0)
            return false;

        // Para verificar que o número é múltiplo de $dividor, é necessário verificar se o resto é 0;
        if($numero % $divisor === 0)
            return true;

        return false;
    }
}


$multiplo = new Multiplo();