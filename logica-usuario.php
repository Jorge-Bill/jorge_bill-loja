<?php

session_start();

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {

    if (!usuarioEstalogado()) {
    	$_SESSION["danger"] = "Você não tem acesso a essa pagina, chora boy";
	    header("location: index.php");
	die();
	}    
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario ($email) {
	//return 	setcookie("usuario_logado", email, time() + 60);
	$_SESSION["usuario_logado"] = $email; 
}

function logout () {
	//unset($_SESSION["usuario_logado"]);
	session_destroy();
	session_start();
}