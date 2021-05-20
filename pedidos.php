<?php

if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $pedido = [];

    $pedido['nome'] = $_POST['nome'];

    if(isset($_POST['endereco'])){
        $pedido['endereco'] = $_POST['endereco'];
    }

    if(isset($_POST['cidade'])){
        $pedido['cidade'] = $_POST['cidade'];
    }

    if(isset($_POST['estado'])){
        $pedido['estado'] = $_POST['estado'];
    }

    if(isset($_POST['tamanho_pizza'])){
        $pedido['tamanho_pizza'] = $_POST['tamanho_pizza'];
    }

    if(isset($_POST['sabor_pizza'])){
        $pedido['sabor_pizza'] = $_POST['sabor_pizza'];
    }

    if(isset($_POST['borda_pizza'])){
        $pedido['borda_pizza'] = $_POST['borda_pizza'];
    }

    if(isset($_POST['forma_pagamento'])){
        $pedido['forma_pagamento'] = $_POST['forma_pagamento'];
    }

    if(isset($_POST['troco'])){
        $pedido['troco'] = $_POST['troco'];
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