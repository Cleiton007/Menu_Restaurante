<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <h2>Carrinho</h2>
    <form action="script.php" method="post">
        Quantidade de pedidos
    <select name="quantidadePedido">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select><br>
        Escolha um método de pagamento:
        <input type = "radio" name="metodoPagamento" value = "credito">Crédito
        <input type = "radio" name="metodoPagamento" value = "debito">Débito
        <input type = "radio" name="metodoPagamento" value = "boleto">Boleto
        <br>Endereço de entrega: <input type="text" name="endereco"><br>
        <input type=submit value="Finalizar">
    </form>
</body>
</html>