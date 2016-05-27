<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>

<?php
	mostraAlerta("danger");
?>


<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="container">
	<div class="row"> 
<?php 
	if(usuarioEstaLogado()){?>
 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 		<p class="alert-success"> Você está logado como <?=usuarioLogado()?>. </p>
 		<p><a class="btn btn-danger" href="logout.php">Deslogar</a></p>
<?php } else {?>
    <h2 class="text-center"> Login </h2>
	
	<form class="form-inline col-md-offset-3 col-lg-offset-3" action="login.php" method="post">
	    
	    <div class="form-group">	
	    	<label>E-mail: </label>
	    	<input class="form-control" type="email" name="email" >
	    </div>
	    <div class="form-group">
	    	<label>Senha: </label>
	    	<input class="form-control" type="password" name="senha">
	    </div>
	    
	    	<button class="btn btn-warning">Login</button>
	    
	</form>
	</div>
<?php 	}?>
</div>
</div>
</section>

 <article id="about" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="container">
            <div class="row"> 
                <h1 class="text-center">Sobre</h1>
                <p class="text-center">&ndash;</p>
                <p class="text-center text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit, justo in tincidunt maximus, dui risus vulputate nunc,<strong>id consequat magna dolor sed felis.</strong> Phasellus vulputate, velit sit amet scelerisque accumsan..."</p>
            
    <!-- about fim -->

    <!-- about comeco -->
                <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- linha 1 incio-->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            <div class="item">
                                <span class=" glyphicon glyphicon-paperclip"> </span>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> <strong>Lorem ipsum dolor sit amet</strong> </h3>
                                <p  class="text-center">Morbi aliquam porta eros, auctor luctus dui porttitor eu. In hac habitasse platea dictumst. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            <div class="item">
                                <span class=" glyphicon glyphicon-paperclip"> </span>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> <strong>Etiam vehicula gravida tempus</strong> </h3>
                                <p  class="text-center">Morbi aliquam porta eros, auctor luctus dui porttitor eu. In hac habitasse platea dictumst. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            <div class="item">
                                <span class=" glyphicon glyphicon-paperclip"> </span>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> <strong>Fusce pharetra felis eu ante auctor</strong> </h3>
                                <p  class="text-center">Morbi aliquam porta eros, auctor luctus dui porttitor eu. In hac habitasse platea dictumst. </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- linha 1 fim -->
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </article>
    <!-- about fim -->


<?php
    include("rodape.php");
?>
