<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
verificaUsuario();

    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias ($conexao);
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){
    ?>
        <p class="alert-success">Produto apagado com sucesso</p>

<?php
}
?>

<!-- breadcrumb lifestyle -->
 <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <h2>Alterar Produto</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a>E-commerce</a>
                                </li>
                                <li>
                                    <a href="produto-lista.php">Produtos Lista</a>
                                </li>
                                <li>
                                    <a href="produto-descricao.php?id=<?=$produto['id']?>">Produtos descrição</a>
                                </li>
                                <li class="active">
                                    <a href="produto-altera-formulario.php"><strong>Alterar Produto</strong></a>
                                </li>

                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
  </div>
<!-- breadcrumb lifestyle -->

    <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 animated fadeInRight">

    <div class="ibox-content">
        <form class="form-horizontal" action="altera-produto.php" method="post">
        <!--    <h1>Alterar Produto</h1>    -->
            <input type="hidden" name="id" value="<?=$produto['id']?>">
                <div class="form-group">
                     <?php include("produto-formulario-base.php"); ?>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Salvar">
                </div>
        </form>
        <form class="form-inline" action="remove-produto.php?id" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <button class="btn btn-danger">Remover</button>
            <a href="produto-descricao.php?id=<?=$produto['id']?>" class="btn btn-info">Descrição <i class="fa fa-long-arrow-left"></i> </a>
            <a href="produto-lista.php" class="btn btn-white" Descrição>Lista <i class="fa fa-long-arrow-left"></i></a>
         </form>
         <br/>
    </div>

    <div class="ibox-footer">
            <span class="pull-right">
            Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
            </span>
            <strong>"No. Try not. Do... or do not. There is no try."</strong>
    </div>
    </div>



    
    <?php
    include("rodape.php");
?>
