<?php
$result = '';
if (isset($_POST['string'])) {
    $str = $_POST['string'];
    $count = substr_count(strtolower($str), 'a');
    $result = "A letra 'a' aparece $count vezes no texto digitado.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Exercício 2:</h1>
        <h4> Escreva um programa que verifique, em uma string, a existência da letra ‘a’,
            seja maiúscula ou minúscula, além de informar a quantidade de vezes em que ela ocorre.
            IMPORTANTE: Essa string pode ser informada através de qualquer entrada de sua preferência
            ou pode ser previamente definida no código;</p>
        </h4>
    </header>
    <main class="principal">
        <div class="conteudo">
            <form method="POST">
                <label for="string">Informe uma texto/frase ou palavra:</label>
                <input type="text" id="string" name="string" required>
                <div class="button-container">
                    <button type="submit">Verificar</button>
                    <a href="index.php" class="button-link">Voltar</a>
                </div>
            </form>

            <p><?php echo $result; ?></p>
           
        </div>
    </main>
</body>

</html>