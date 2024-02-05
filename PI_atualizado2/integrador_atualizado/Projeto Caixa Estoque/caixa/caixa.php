<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/telaCaixa.css">
    <title>Document</title>
</head>

<body>

    <!-- <nav class="menu">
        <ul>
            <li><a href="#"class="link-ativo">Inicio</a></li>
            <li><a href="#codigolnteiro.html">Codigo Inteiro</a></li>
            <li><a href="#contasReceber.html">Contas a Receber</a></li>
            <li><a href="#digitarCPF.html">Digitar CPF</a></li>
            <li><a href="#excluirProduto.html">Excluir Produto</a></li>
            <li><a href="#excluirVenda.html">Excluir Venda</a></li>
            <li><a href="#finalizarCompra.html">Finalizar Compra</a></li>
            <li><a href="#formaPagamento.html">Formas de Pagamentos</a></li>
            <li><a href="#imprimirNota.html">Imprimir Nota</a></li>
            <li><a href="#inserirQuantidade.html">Inserir Quantidade</a></li>
            <li><a href="#novaVenda.html">Novas Vendas</a></li>
            <li><a href="#pesquisarPreco.html">Pesquisar Preços</a></li>
            <li><a href="#pesquisarProduto.html">Pesquisar Produtos</a></li>
            <li><a href="#pesquisarVenda.html">Pesquisar Vendas</a></li>
            <li><a href="#sairCompra.html">Sair da Compra</a></li>
            <li><a href="#telaLogin.html">Tela de Login</a></li>
            <li><a href="#telaCaixa.html">Tela do Caixa</a></li>
            
            <!-- Adicione mais itens conforme necessário -->
    </ul>
    </nav> -->

    <div class="fundo-geral__main">
        <div class="titulo-comeco">
            <div id="caixa" class="titulo">
                <p class="title">CAIXA ABERTO</p>
            </div>
            <div class="rigth-titulo"></div>
        </div>

        <div class="divisorias">
            <div class="divisoria1">
                <div class="quadrado1">
                    <div class="img-produto"></div>
                    <div class="barra-unitario-item">
                        <div class="barra-unitario-item-quadrado">
                            <p class="title-barra-unitario-item">CODIGO DE BARRA</p>
                        </div>
                        <div class="barra-unitario-item-quadrado2">
                            <p class="title-barra-unitario-item">VALOR UNITARIO</p>
                        </div>
                        <div class="barra-unitario-item-quadrado2">
                            <p class="title-barra-unitario-item">VALOR DO ITEM</p>
                        </div>
                    </div>
                </div>
                <div class="quadrado2">
                    <div class="codigo">
                        <p class="title-codigo">CODIGO</p>
                    </div>
                    <div class="codigo">
                        <p class="title-codigo">MODIFICAR</p>
                    </div>
                </div>
                <div class="quadrado-informacao">
                    <div class="quadrados-info"></div>
                    <div class="quadrados-info"></div>
                    <div class="quadrados-info"></div>
                </div>
            </div>
            <div class="divisoria2">
                <div class="lista-produtos">
                    <p class="title-lista-produtos">Lista de produtos</p>
                </div>
                <div class="sub-total">
                    <p class="title-lista-produtos">Subtotal</p>
                </div>
                <div class="total-recebido-troco">
                    <div class="codigo">
                        <p class="title-codigo">Total recebido</p>
                    </div>
                    <div class="codigo">
                        <p class="title-codigo">troco

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("keydown", function(event) {
            if (event.key === "p") {
                showSection("caixa");
            } else if (event.key === "o") {
                showSection("codigo_inteiro");
            } else if (event.key === "i") {
                showSection("contas_receber");
            }else if (event.key === "u") {
                showSection("digitar_cpf");
            }
            else if (event.key === "y") {
                showSection("excluir_produto");
            }
            else if (event.key === "t") {
                showSection("excluir_venda");
            }
            else if (event.key === "r") {
                showSection("finalizar_compra");
            }
            else if (event.key === "e") {
                showSection("forma_pagamento");
            }
            else if (event.key === "w") {
                showSection("imprimir_nota");
            }
            else if (event.key === "q") {
                showSection("inserir_quantidade");
            }
            else if (event.key === "a") {
                showSection("nova_venda");
            }
            else if (event.key === "s") {
                showSection("pesquisar_preco");
            }
            else if (event.key === "d") {
                showSection("pesquisar_produto");
            }
            else if (event.key === "f") {
                showSection("pesquisar_venda");
            }
            else if (event.key === "g") {
                showSection("sair_compra");
            }
            else if (event.key === "h") {
                showSection("tela_login");
            }
            else if (event.key === "j") {
                showSection("tela_caixa");
            }
        });

        function showSection(sectionId) {
            // Esconder todas as seções
            document.getElementById("caixa").style.display = "none";
            document.getElementById("codigo_inteiro").style.display = "none";
            document.getElementById("contas_receber").style.display = "none";
            document.getElementById("digitar_cpf").style.display = "none";
            document.getElementById("excluir_produto").style.display = "none";
            document.getElementById("excluir_venda").style.display = "none";
            document.getElementById("finalizar_compra").style.display = "none";
            document.getElementById("forma_pagamento").style.display = "none";
            document.getElementById("imprimir_nota").style.display = "none";
            document.getElementById("inserir_quantidade").style.display = "none";
            document.getElementById("nova_venda").style.display = "none";
            document.getElementById("pesquisar_preco").style.display = "none";
            document.getElementById("pesquisar_produto").style.display = "none";
            document.getElementById("pesquisar_venda").style.display = "none";
            document.getElementById("sair_compra").style.display = "none";
            document.getElementById("tela_login").style.display = "none";
            document.getElementById("tela_caixa").style.display = "none";

            // Mostrar a seção específica
            document.getElementById(sectionId).style.display = "block";
        }
    </script>

</body>

</html>