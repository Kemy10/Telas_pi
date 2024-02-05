<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagens = $_POST['imagens'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];
$peso = $_POST['peso'];
$valor = $_POST['valor'];
$validade = $_POST['validade'];
$fornecedor = $_POST['fornecedor'];
$codFiscal = $_POST['codFiscal'];
$codBarra = $_POST['codBarra'];

function cadastrarProduto($nome, $descricao, $imagens, $categoria, $estoque, $peso, $valor, $validade, $fornecedor, $codFiscal, $codBarra)
{
    $conexao = new PDO("mysql:host=localhost;dbname=produtos", "root", "");

    $scriptInserir = "INSERT INTO produto (nome, descricao, imagem, categoria, estoque, peso, valor, validade, fornecedor, codFiscal, codBarra) VALUES (:nome, :descricao, :imagens, :categoria, :estoque, :peso, :valor, :validade, :fornecedor, :codFiscal, :codBarra)";
    $stmt = $conexao->prepare($scriptInserir);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':imagens', $imagens);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':estoque', $estoque);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':valor', $valor);
    $stmt->bindParam(':validade', $validade);
    $stmt->bindParam(':fornecedor', $fornecedor);
    $stmt->bindParam(':codFiscal', $codFiscal);
    $stmt->bindParam(':codBarra', $codBarra);

    $stmt->execute();
}

cadastrarProduto($nome, $descricao, $imagens, $categoria, $estoque, $peso, $valor, $validade, $fornecedor, $codFiscal, $codBarra);
