<?php
function ValidarCaixa(){
    $conexao = new PDO("mysql:host=localhost;dbname=produtos", "root", "");

$query =   "SELECT * FROM produto";

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    return $lista;
}
