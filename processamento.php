<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome não informado";
    
    echo "Nome recebido: " . htmlspecialchars($nome);
} else {
    echo "Nenhum dado recebido.";
}
?>
