<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pagemento.css">
    <title>Pagamento</title>
</head>

<body>

    <form class="telaPagamento" method="POST" action="">
        <div class="pagamento">
            <h2>Forma de Pagamento</h2>
            <button id="formas" onclick="botaoDinheiro()">Dinheiro</button>
            <button id="formas" onclick="botaoCredito()">Cartão de Crédito</button>
            <button id="formas" onclick="botaoDebito()">Cartão de Debíto</button>
            <button id="formas" onclick="botaoPix()">Pix</button>
        </div>
    </form>





</body>
<script>
function botaoDinheiro() {
    alert("Pagamento: Dinheiro");
}

function botaoCredito() {
    alert("Pagamento: Cartão de Credito");
}

function botaoDebito() {
    alert("Pagamento: Catão de Débito");
}

function botaoPix() {
    alert("Pagamento: Pix");
}
</script>
</html>