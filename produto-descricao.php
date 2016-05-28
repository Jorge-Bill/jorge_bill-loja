<?php 

require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php");

 $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);

?>
<!-- breadcrumb lifestyle -->
 <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>Produto Descrição</h2>
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
                                <li class="active">
                                    <a href="produto-descricao.php"><strong>Produtos Descrição</strong></a>
                                </li>

                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
<!-- breadcrumb lifestyle -->
 <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">

                                        <div>
                                            <div class="image-imitation">
                                                <img class=" img-circle img-responsive center-block" src="img/<?php print $produto['imagem']?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                       <?php print $produto['nome'] ?>
                                    </h2>
                                    <small>Ótimos produtos para você</small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price"><?php print $produto['preco']?> </h2>
                                    </div>
                                    <hr>

                                    <h4>Descrição do produto</h4>

                                    <div class="small text-muted">
                                         <?php print($produto['descricao']) ?>
                                    </div>
                                   
                                    <hr>

                                    <div>
                                        <div class="btn-group">
                                            <a href="produto-lista.php" class="btn btn-white btn-sm">lista <i class="fa fa-long-arrow-left"></i> </a>
                                            <a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-warning btn-sm">Alterar <i class="fa fa-edit"></i></a>
                                         <!--   <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                            <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button> -->
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <div class="ibox-footer">
                            <span class="pull-right">
                                Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
                            </span>
                            <strong>"You must unlearn what you have learned."</strong>
						</div>
                    </div>

                </div>
            </div>
		</div>
<?php include("rodape.php"); ?>