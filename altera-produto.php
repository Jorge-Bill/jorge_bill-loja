<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("Upload.class.php");

/*print "<pre>";
print_r ($_POST);
print "</pre>";*/

$id=$_POST["id"];
$nome=$_POST["nome"];
$preco=$_POST["preco"];
$descricao=$_POST["descricao"];
$categoria_id=$_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
    $usado = "true";
} else{
    $usado = "false";
}

$upload = new Upload($_FILES['foto'], 400, 400, "img/produtos/");
	$imagem=$upload->salvar();
	//echo $imagem."<br>";

if (alteraProduto($conexao, $id, $nome , $preco, $descricao,$categoria_id, $usado, $imagem) ){ ?>
    <p class="text-success">O Produto
        <?php print $nome;?>,
            <?php print  $preco; ?> foi alterado com sucesso!</p>
    <?php }

else {
      $msg = mysqli_error($conexao);

?>
        <p class="text-danger">O Produto
            <?= $nome;?> não foi alterado:
                <?= $msg ?>
        </p>
        <?php

}

//mysqli_close($conexao);

?>

            <?php
    include("rodape.php");
?>
