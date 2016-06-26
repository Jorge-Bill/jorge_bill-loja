<?php
require_once("conecta.php");
function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($produtos, $produto);
        }
        return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $imagem){
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado, imagem) values ('{$nome}',{$preco}, '{$descricao}','{$categoria_id}','{$usado}','{$imagem}')";
    //echo $query;
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado, $imagem){
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = '{$usado}', imagem='{$imagem}' where id = '{$id}'";
	//  echo $query;
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
    $query = "select * from produtos where id= '{$id}'";
    $resultado = mysqli_query($conexao, $query);
	//echo $query;
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id= {$id} ";
    return mysqli_query($conexao, $query);
}
