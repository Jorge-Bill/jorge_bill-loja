<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();
    $produto = array ("nome" => "", "descricao" => "", "preco" => "", categoria => "1" );
    $usado = "";
    $categorias = listaCategorias ($conexao);
?>
    <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <h1>Formulário de Produto</h1>
    <form action="adiciona-produto.php" method="post">
        <div class="form-group">
           
           <?php include("produto-formulario-base.php"); ?>

            
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="Cadastrar">
                </div>
            
        </div>
    </form>
    </div>
    <?php
    include("rodape.php");
?>
