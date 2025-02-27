<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form action="processamento.php" method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Preencha seu nome" required>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>
</html>
