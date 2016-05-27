<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");

    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias ($conexao);
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>
    <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <h1>Alterando Produto</h1>
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <div class="form-group">
            <?php include("produto-formulario-base.php"); ?>
           
                <div class="form-group">
                    <input class="btn btn-warning" type="submit" value="Salvar">
                </div>
           
        </div>
    </form>
    </div>
    <?php
    include("rodape.php");
?>
