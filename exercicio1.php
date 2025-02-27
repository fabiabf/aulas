<?php

/*
Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.
A função deve calcular a soma dos dígitos desse número.
Retorne o valor da soma.
*/

function sumDigits(int $num): int {
    $num = abs($num); // Garante que o número seja positivo
    $sum = 0;

    while ($num > 0) {
        $sum += $num % 10; // Pega o último dígito e soma
        $num = intdiv($num, 10); // Remove o último dígito
    }

    return $sum;
}

// Exemplos de uso
echo sumDigits(123);  // 6 (1 + 2 + 3)
echo "<br>";
echo sumDigits(-456); // 15 (4 + 5 + 6)
echo "<br>";
echo sumDigits(0);    // 0
/*
Explicação:
Usa abs($num) para garantir que números negativos sejam tratados corretamente.
Usa % 10 para obter o último dígito e somá-lo.
Usa intdiv($num, 10) para remover o último dígito.
Continua o processo até que num seja 0. 🚀
*/
?>
