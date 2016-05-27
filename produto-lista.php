<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>
    <?php
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){
    ?>
        <p class="alert-success">Produto apagado com sucesso</p>

        <?php
}
?>

        <!--    <table class="table table-striped table-bordered"> -->
<?php
   $produtos =  listaProdutos($conexao);
   foreach($produtos as $produto) :
?>

 
                       <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 container">
                            <div class="">
                            <br/>
                            <div class="thumbnail prod">
                                <div>
                                    <img class="img-prod img-circle img-responsive center-block" src="imagens/<?php print $produto['imagem']?>" >
                                    <h3 class="text-center"><?php print $produto['nome'] ?></h3>
                                </div>

                                <div class="caption">
                                    
                                    <h4>R$ <?php print $produto['preco']?></h4>
                                    <p><?php print substr($produto['descricao'],0,37) ?>...</p>
                                    <!-- <span><?php print $produto['categoria_nome']?></span> -->
                                    
                                    <div>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Desc-prod">Detalhes</button>                            
                                    <a class="btn btn-warning" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a>
                                    <form class="form-inline col-md-offset-5 col-lg-offset-5" action="remove-produto.php?id" method="post">
                                        <input type="hidden" name="id" value="<?=$produto['id']?>">
                                        <button class="btn btn-danger">Remover</button>
                                    </form>
                                    </div>

                                </div>
                            </div>    
                        </div>
                    </div>
                    <!-- Modal 
                    <div class="modal fade" id="Desc-prod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> <?php print $produto['nome'] ?> </h4>
                          </div>
                          
                          <div class="modal-body">
                            <img class="img-thumbnail img-responsive" src="imagens/<?php print $produto['imagem']?>" height="150px" width="120px">
                            <p>R$<?php print $produto['preco']?></p>
                            <p> <?php print substr($produto['descricao']) ?> </p>
                          </div>
                          
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                          </div>
                        
                        </div>
                      </div>
                    </div>
                     modal fim Declaração Territorial Rural -->
<?php
    endforeach;
?>
   <!--         </table> -->
            <?php include("rodape.php"); ?>
