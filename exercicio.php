<?php
/*

Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.
A função deve verificar se o número fornecido é um número primo.
Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.
Caso o número fornecido seja menor que 2, retorne false.
Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido 
e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.
*/
function isPrime(int $num): bool {
    if ($num < 2) {
        return false;
    }

    for ($i = 2, $sqrt = sqrt($num); $i <= $sqrt; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

// Exemplos de uso
var_dump(isPrime(2));  // true
var_dump(isPrime(4));  // false
var_dump(isPrime(17)); // true
var_dump(isPrime(25)); // false
var_dump(isPrime(31)); // true

/* Explicação:
Se o número for menor que 2, retorna false, pois 0 e 1 não são primos.
Percorre de 2 até sqrt($num), pois se um número tem um divisor além de 1 e dele mesmo, um dos fatores estará abaixo da raiz quadrada.
Se encontrar algum divisor, retorna false.
Se não encontrar nenhum divisor, retorna true.
*/
?>
