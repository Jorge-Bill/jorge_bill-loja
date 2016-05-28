<?php 
require_once("cabecalho.php"); 
?>
<!-- breadcrumb lifestyle -->

    <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>Contato</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    <a href="contato.php"><strong>Contato</strong></a>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
<!-- breadcrumb lifestyle -->

<article id="contact" class=" form col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="container-fluid ">
            <div class="row">
            <div class="container">
            <h1 class="text-center"> Sua Mensagem Jedi</h1>
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

<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2">
                <div class="contact-box">
                    <a href="#">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="img/bill.jpg">
                            <div class="m-t-xs font-bold">Font End Developer</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>Jorge (Bill)</strong></h3>
                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="contact-box">
                    <a href="#">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="img/natty.jpg">
                            <div class="m-t-xs font-bold">Back End Developer</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>Natália Calixto</strong></h3>
                        <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>
            
        </div>
</div>                

<div class="row"></div>
<div class="ibox-footer">
    <span class="pull-right">
        Geek Space - <i class="fa fa-clock-o"></i> <?php echo date("d/m/y"); ?> 
    </span>
        <strong> "May the Force be with you."</strong>
</div>

<?php
    include("rodape.php");
?>
