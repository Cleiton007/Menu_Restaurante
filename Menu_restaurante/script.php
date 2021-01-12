<?php
    $quantidadePedido = $_POST['quantidadePedido'];
    $metodoPagamento = $_POST['metodoPagamento'];
    $enderecoEntrega = $_POST['endereco'];

    echo "<pre> Quantidade de pedido: ".$quantidadePedido."<br>";
    echo "<pre> Método de pagamento: ".$metodoPagamento."<br>";
    echo "<pre> Endereço de entrega: ".$enderecoEntrega."<br>";
    echo "</pre>";
?>