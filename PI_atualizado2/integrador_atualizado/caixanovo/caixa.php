<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/caixa.css">
    <title>CAIXA ABERTO</title>
</head>
<?php
require 'validarcaixa.php';
$nome = ValidarCaixa();
$id = ValidarCaixa();
// var_dump($usuarios);
?>

<body>
    <main class="main">
        <div>
            <div class="adicionaiscaixa">
                <div class="div1">
                    <p class="name"><b>MERCADO BEM BARATO</b></p>
                </div>
                <div class="div2">
                    <fieldset class="CodProduto">
                        <legend class="legend"><b>Cód. do Produto</b></legend>
                    </fieldset>
                </div>
            </div>
        </div>
        <div>
            <div class="divisoria">
                <div class="caixa">
                    <div class="fundocaixa">
                        <div class="divisoriacaixa1">
                            <div>
                                <fieldset class="Logo-Produtos">
                                    <legend class="legend"><b>Logo Produtos</b></legend>
                                </fieldset>
                                <fieldset class="CodBarra">
                                    <legend class="legend"><b>Cód. Barra</b></legend>
                                </fieldset>
                                <fieldset class="ValorCompra">
                                    <legend class="legend"><b>Valor da Compra</b></legend>
                                </fieldset>
                                <a href="#"> <button type="submit" class="btn"><b>Finalizar Venda</b></button></a>
                            </div>
                        </div>
                        <div class="divisoriacaixa2">
                            <fieldset class="Caixa">
                                <div class="NumeroDeProdutos">
                                    <div class="NumeroDeProdutos-title__main">
                                        <p class="NumeroDeProdutos-title"><b>Nº</b></p>
                                    </div>
                                    <div class="numerosDaLista">
                                    <?php foreach ($id as $linha) { ?>
                                        <tr>
                                            <p>#<?php echo $linha["id"] ?></p>
                                            
                                        </tr>
                                    <?php } ?>
                                    </div>

                                </div>
                                <div class="IdDoProduto">
                                    <div class="IdDoProduto-title__main">
                                        <p class="IdDoProduto-title"><b>Nome</b></p>
                                    </div>
                                    <?php foreach ($nome as $linha) { ?>
                                        <tr>
                                            <p><?php echo $linha["nome"] ?></p>
                                            
                                        </tr>
                                    <?php } ?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="atalhos">
                    <fieldset class="CodVenda">
                        <legend class="legend"><b>Cód. da Venda</b></legend>
                    </fieldset>
                    <fieldset class="ValorUnidade">
                        <legend class="legend"><b>Valor Unidade</b></legend>
                    </fieldset>
                    <fieldset class="ValorQuantidade">
                        <legend class="legend"><b>Quantidade</b></legend>
                    </fieldset>
                    <fieldset class="Atalhos">
                        <legend class="legend"><b>Atalhos</b></legend>
                    </fieldset>
                </div>
            </div>
        </div>

    </main>
</body>

</html>