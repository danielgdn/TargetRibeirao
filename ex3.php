<?php
$INDICE = 12;
$SOMA = 0;
$K = 1;

while ($K < $INDICE) {
    $K = $K + 1;
    $SOMA = $SOMA + $K;
}

$result = "O valor da variável SOMA ao final é $SOMA.";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Exercício 3:</h1>
        <h4> Observe o trecho de código: int INDICE = 12, SOMA = 0, K = 1; enquanto K < INDICE faça
         { K=K + 1; SOMA=SOMA + K; } imprimir(SOMA);
         Ao final do processamento, qual será o valor da variável SOMA?</h4>
    </header>
    <main class="principal">
        <div class="conteudo">
            <p><?php echo $result; ?></p>
            <div class="button-container">

                <a href="index.php" class="button-link">Voltar</a>
            </div>
            </form>
        </div>
    </main>
</body>

</html>