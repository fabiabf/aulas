<?php
class Calculadora {  
    // Método para somar dois números  
    public function somar($a, $b) {  
        return $a + $b;  
    }  

    // Método para subtrair o segundo número do primeiro  
    public function subtrair($a, $b) {  
        return $a - $b;  
    }  

    // Método para multiplicar dois números  
    public function multiplicar($a, $b) {  
        return $a * $b;  
    }  

    // Método para dividir o primeiro número pelo segundo  
    public function dividir($a, $b) {  
        if ($b == 0) {  
            return "Erro: Divisão por zero.";  
        }  
        return $a / $b;  
    }  
}  

// Exemplo de uso da classe  
$calculadora = new Calculadora();  

echo "Soma: " . $calculadora->somar(10, 5) . "<br>";           // Saída: Soma: 15  
echo "Subtração: " . $calculadora->subtrair(10, 5) . "<br>";   // Saída: Subtração: 5  
echo "Multiplicação: " . $calculadora->multiplicar(10, 5) . "<br>"; // Saída: Multiplicação: 50  
echo "Divisão: " . $calculadora->dividir(10, 5) . "<br>";       // Saída: Divisão: 2  
echo "Divisão por zero: " . $calculadora->dividir(10, 0) . "<br>"; // Saída: Erro: Divisão por zero.  
?>  