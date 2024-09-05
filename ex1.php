<?php
function pertenceFibonacci($num)
{
    // Verifica se é 0 ou 1, que pertencem à sequência
    if ($num == 0 || $num == 1) {
        return true;
    }

    $a = 0;
    $b = 1;

    while ($b <= $num) {
        if ($b == $num) {
            return true;
        }
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    return false;
}

$result = '';
if (isset($_POST['num'])) {
    $num = intval($_POST['num']);
    if (pertenceFibonacci($num)) {
        $result = "O número $num pertence à sequência de Fibonacci.";
    } else {
        $result = "O número $num NÃO pertence à sequência de Fibonacci.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1: Fibonacci</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Exercício 1:</h1>
        <h4>Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre
            será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...),
            escreva um programa onde, informado um número, ele calcule a sequência de Fibonacci e
            retorne uma mensagem avisando se o número informado pertence ou não à sequência.</p>
        </h4>
    </header>
    <main class="principal">
        <div class="conteudo">

            <form method="POST">
                <label for="num">Informe um número:</label>
                <input type="number" id="num" name="num" required>

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