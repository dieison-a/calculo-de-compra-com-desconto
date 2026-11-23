<?php

$valorCompra = $_POST['valorCompra'];

// valor inicial
$valorFinal = $valorCompra;

// desconto do cartão
if (isset($_POST['cartao'])) {
    $desconto = $valorCompra * 0.05;
    $valorFinal = $valorFinal - $desconto;
}

// acréscimo da entrega
if (isset($_POST['entrega'])) {
    $acrescimo = $valorCompra * 0.02;
    $valorFinal = $valorFinal + $acrescimo;
}
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resultado da Compra</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <main class="card">
            <h1>Resultado da Compra</h1>
            <p>Valor da compra: R$ <?php echo number_format($valorCompra, 2, ',', '.'); ?></p>
            <p>Pagamento com cartão: <?php echo isset($_POST['cartao']) ? 'Sim' : 'Não'; ?></p>
            <p>Entrega domiciliar: <?php echo isset($_POST['entrega']) ? 'Sim' : 'Não'; ?></p>
            <p><strong>Valor final: R$ <?php echo number_format($valorFinal, 2, ',', '.'); ?></strong></p>
        </main>
    </body>
</html>