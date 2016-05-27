<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geek Space</title>
    
    <?php require_once("mostra-alerta.php"); ?>
    <?php error_reporting(E_ALL ^ E_NOTICE); ?>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagens/home-nav.png">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navbar">

   <div class="container-fluid">
    <div class="row">
     <a class="link-invisivel " href="#conteudo" id="topo"> Ir direto para o conteúdo</a>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">

                    <!--Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"> <img src="imagens/home-nav.png" alt="logo da empresa"></a>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right" role="tablist">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="produto-formulario.php">Adicionar Produto</a></li>
                            <li><a href="produto-lista.php">Listar Produtos</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </div>
        </div>
    </nav>
   
   <header id="home" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="text-center"> Geek Space </h1>
                <img class="center-block img-responsive" src="imagens/original.png" alt="...">
            </div>
        </div>
       </div>
</header>

 