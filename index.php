<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dom Corleone</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="bootstrap-5/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap" rel="stylesheet">
</head>
<body>
    <main class="container">
        <div class="text-center">
            <img src="img/pizza.png" class="mt-1">
            <h2 class="font-monospace text-white">pizzaria</h2>
            <h2 class="fw-bold text-white titulo">DOM CORLEONE</h2>
        </div>

        
        <form method="post">
            <fieldset>
                <legend class="text-white">DADOS PARA ENTREGA</legend>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name" class="form-label text-white">NOME</label>
                        <input name="nome" type="text" class="form-control" id="nome">
                    </div>
                    <div class="col-md-8">
                        <label for="endereco" class="form-label text-white">ENDEREÇO</label>
                        <input name="endereco" type="text" class="form-control" id="endereco">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="cidade" class="form-label text-white">CIDADE</label>
                        <input name="cidade" type="text" class="form-control" id="cidade">
                    </div>
                    <div class="col-md-2">
                        <label for="estado" class="form-label text-white">ESTADO</label>
                        <select class="form-select" aria-label="Default select example" name="estado">
                            <option value="sp">SP</option>
                            <option value="rj">RJ</option>
                            <option value="mg">MG</option>
                            <option value="es">ES</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            
            <fieldset>
                <legend class="mt-5 text-white">PIZZA</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label text-white" for="tamanhos">TAMANHO</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tamanho_pizza" id="inlineRadio1" value="P" style="border: none">
                                <label class="form-check-label text-white" for="tamanho">P</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tamanho_pizza" id="inlineRadio1" value="M" style="border: none">
                                <label class="form-check-label text-white" for="tamanho">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tamanho_pizza" id="inlineRadio1" value="G" style="border: none">
                                <label class="form-check-label text-white" for="tamanho">G</label>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <label for="sabor" class="form-label text-white">SABOR</label>
                            <select class="form-select" aria-label="Default select example" name="sabor_pizza">
                                <option value="calabresa">CALABRESA</option>
                                <option value="frango">FRANGO</option>
                                <option value="quatro queijos">QUATRO QUEIJOS</option>
                                <option value="americana">AMERICANA</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="borda" class="form-label text-white">Borda</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="borda_pizza" id="exampleRadios1" value="normal" style="border: none">
                                <label class="form-check-label text-white" for="exampleRadios1">
                                    NORMAL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="borda_pizza" id="exampleRadios2" value="catupiry" style="border: none">
                                <label class="form-check-label text-white" for="exampleRadios2">
                                    CATUPIRY
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="borda_pizza" id="exampleRadios3" value="cheddar" style="border: none">
                                <label class="form-check-label text-white" for="exampleRadios3">
                                    CHEDDAR
                                </label>
                            </div>
                        </div>                         
                    </div> 
                </fieldset>

                <fieldset>
                    <legend class="mt-5 text-white">PAGAMENTO</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="estado" class="form-label text-white">FORMA DE PAGAMENTO</label>
                            <select class="form-select" aria-label="Default select example" name="forma_pagamento">
                                <option value="dinheiro">DINHEIRO</option>
                                <option value="cartão">CARTÃO</option>
                                <option value="vale alimentação">VALE ALIMENTAÇÃO</option>
                                <option value="vale refeição">VALE REFEIÇÃO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="troco" class="form-label text-white">TROCO PARA</label>
                            <input name="troco" type="number" class="form-control" id="troco" min="0">
                        </div>
                    </div>
                </fieldset>


                <div class="mt-5 d-md-flex justify-content-md-end">
                    <button class="btn btn-success me-md-2" type="submit">FINALIZAR PEDIDO</button>
                </div>
        </form>
        
        <div class="mt-5 card-group row-cols-md-3 d-flex justify-content-around align-item-center">
            
            <?php 
                $sqlBusca = "SELECT * FROM tbl_pedidos";
                $resultado = mysqli_query($conexao , $sqlBusca);

                $cadastroPedido = [];

                while($pedido= mysqli_fetch_assoc($resultado)){
                    $cadastroPedido[] = $pedido;
                }

                foreach($cadastroPedido as $pedido): ?>
                       
                <div class="card-group">
                    <div class="card border-success mb-3" style="max-width: 23rem;">
                        <div class="card-header text-white bg-success"><?php echo $pedido['nome']; ?></div>
                        <div class="card-body text-dark">
                            <div class="row">
                                <h6 class="card-text col-md">Endereço:</h6>
                                <p class="card-text col-md"><?php echo $pedido['endereco']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Cidade:</h6>
                                <p class="card-text col-md"><?php echo $pedido['cidade']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Estado:</h6>
                                <p class="card-text col-md"><?php echo $pedido['estado']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Tamanho da pizza:</h6>
                                <p class="card-text col-md"><?php echo $pedido['tamanho_pizza']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Sabor:</h6>
                                <p class="card-text col-md"><?php echo $pedido['sabor_pizza']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Borda:</h6>
                                <p class="card-text col-md"><?php echo $pedido['borda_pizza']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Forma de pagamento:</h6>
                                <p class="card-text col-md"><?php echo $pedido['forma_pagamento']; ?></p>
                            </div>
                            <div class="row">
                                <h6 class="card-text col-md">Troco:</h6>
                                <p class="card-text col-md"><?php echo $pedido['troco']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
               
        </div>

    </main>
    
<script src="bootstrap-5/bootstrap.bundle.min.js"></script>
<script src="js/funcoes.js"></script>
</body>
</html>