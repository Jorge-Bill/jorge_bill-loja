<?php 
require_once("cabecalho.php"); 
?>

<article id="contact" class=" form col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="container-fluid ">
            <div class="row">
            <div class="container">
                <form class="form-horizontal " method="post" action="email.php">
                    <div class="form-group">
                        <!--    <label for="InputName">Name </label> -->
                        <input name="nome" type="text" class="form-control" placeholder="NOME">
                    </div>
                    <div class="form-group">
                        <!--    <label for="InputEmail1">Email </label> -->
                        <input name="email" type="email" class="form-control" placeholder="E-MAIL">
                    </div>
                    <div class="form-group">
                        <!--    <label for="InputMessage">Message</label> -->
                        <textarea name="mensagem" class="form-control" rows="4" placeholder="MENSAGEM"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" value="Submit" class="btn btn-warning">ENVIAR</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </article>


<?php
    include("rodape.php");
?>
