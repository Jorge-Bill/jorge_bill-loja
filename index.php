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
    <h2 class="text-center animated fadeInRight"> Login </h2>
	
	<form class="form-inline col-md-offset-3 col-lg-offset-3 animated fadeInRight" action="login.php" method="post">
	    
	    <div class="form-group">	
	    	<label>E-mail </label>
	    	<input class="form-control" type="email" name="email" placeholder="E-mail" >
	    </div>
	    <div class="form-group">
	    	<label>Senha: </label>
	    	<input class="form-control" type="password" name="senha" placeholder="Senha">
	    </div>
	    
	    	<button class="btn btn-warning">Login</button>
	    
	</form>

	</div>

<?php 	}?>
</div>
</div>
</section>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="ibox float-e-margins">
                        
                        <div class="ibox-content ">
                            <div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2"  class="active"></li>
                                    <li data-slide-to="1" data-target="#carousel2"></li>
                                    <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image"  class="img-responsive" src="img/p_big1.jpg">
                                        <div class="carousel-caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit</p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <img alt="image"  class="img-responsive" src="img/p_big3.jpg">
                                        <div class="carousel-caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="img/p_big2.jpg">
                                        <div class="carousel-caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->


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
 
<div class="row"></div>
<div class="ibox-footer">
    <span class="pull-right">
        Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
    </span>
        <strong> "Size matters not. Look at me. Judge me by my size, do you? Hmm? Hmm. And well you should not."</strong>
</div>

<?php
    include("rodape.php");
?>
