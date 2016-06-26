<?php 
/*print "<pre>";
print_r ($_POST);
print "</pre>";*/
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
require_once("Upload.class.php");
//srequire_once("upload-img.php");
verificaUsuario();

$nome=$_POST["nome"];
$preco=$_POST["preco"];
$descricao=$_POST["descricao"];
$categoria_id=$_POST["categoria_id"];

//print $_POST["foto"];
			
if(array_key_exists('usado', $_POST)){
    $usado = "true";
} else{
    $usado = "false";
}

	$upload = new Upload($_FILES['foto'], 500, 500, "img/produtos/");
	$imagem=$upload->salvar();
			

if (insereProduto($conexao, $nome , $preco, $descricao,$categoria_id, $usado, $imagem) ){ ?>
    <p class="text-success">Produto
        <?php print $nome;?>,
            <?php print $preco; ?> adicionado com sucesso!</p>
    <?php }

else {
      $msg = mysqli_error($conexao);

?>
        <p class="text-danger">Produto
            <?php print $nome;?> não foi adicionado:
                <?php print $msg ?>
        </p>
        <?php

}

//mysqli_close($conexao);

?>

            <?php
    include("rodape.php");
?>
