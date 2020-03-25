<?php

class Utils
{

    /**
     * Retorna todos os números ímpares de um array
     *
     * @param array $numeros
     */
    public static function numerosImpares(array $numeros)
    {
        // É necessário fazer um for, percorrendo a quantidade (count) de números que contém dentro desse array
        // Logo após verifica se o número na posição $numeros[%i] dividindo por 2 o resto for diferente de 0
        // É porque ele é um número impar.
        for($i = 0; $i < count($numeros); $i++) {
            if($numeros[$i] % 2 !== 0)
                echo $numeros[$i].", ";
        }

        echo "<br />---------------------<br />";

        // A Lógica dentro do foreach é a mesma coisa, o que muda que estou utilizando o foreach
        // Com o foreach não é necessário calcular a quantidade de itens que tem dentro de um array
        // Ele mesmo já faz esse trabalho sem a necessidade de programação.
        foreach($numeros as $numero) {
            if($numero % 2 !== 0)
                echo $numero.", ";
        }

        echo "<br />---------------------<br />";

        // O While é basicamente igual o for, porém ele só tem a condição de parada, é necessário fazer o incremento
        // Da variável manualmente.
        $i = 0;
        while($i < count($numeros)) {
            if($numeros[$i] % 2 !== 0)
                echo $numeros[$i].", ";
            $i++;
        }
    }
}

$numeros = [1,2,3,5,4,7,8,9,5,6,4,7,89,5,6,5,98,1,54,87,1,54,87,4,5487,874,4,87,9];

Utils::numerosImpares($numeros);