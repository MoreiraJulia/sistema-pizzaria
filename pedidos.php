<?php

if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $pedido = [];

    $pedido['nome'] = $_GET['nome'];

    if(isset($_GET['endereco'])){
        $pedido['endereco'] = $_GET['endereco'];
    }

    if(isset($_GET['cidade'])){
        $pedido['cidade'] = $_GET['cidade'];
    }

    if(isset($_GET['estado'])){
        $pedido['estado'] = $_GET['estado'];
    }

    if(isset($_GET['tamanho_pizza'])){
        $pedido['tamanho_pizza'] = $_GET['tamanho_pizza'];
    }

    if(isset($_GET['sabor_pizza'])){
        $pedido['sabor_pizza'] = $_GET['sabor_pizza'];
    }

    if(isset($_GET['borda_pizza'])){
        $pedido['borda_pizza'] = $_GET['borda_pizza'];
    }

    if(isset($_GET['forma_pagamento'])){
        $pedido['forma_pagamento'] = $_GET['forma_pagamento'];
    }

    if(isset($_GET['troco'])){
        $pedido['troco'] = $_GET['troco'];
    }
}

include "conexao.php";
if(isset($pedido)){
    $sqlInserir = "INSERT INTO tbl_pedidos(
        nome,
        endereco,
        cidade,
        estado,
        tamanho_pizza,
        sabor_pizza,
        borda_pizza,
        forma_pagamento,
        troco
    ) VALUES(
        '{$pedido['nome']}',
        '{$pedido['endereco']}',
        '{$pedido['cidade']}',
        '{$pedido['estado']}',
        '{$pedido['tamanho_pizza']}',
        '{$pedido['sabor_pizza']}',
        '{$pedido['borda_pizza']}',
        '{$pedido['forma_pagamento']}',
        '{$pedido['troco']}'
    );";

    mysqli_query($conexao, $sqlInserir);

}

include "index.php";
?>