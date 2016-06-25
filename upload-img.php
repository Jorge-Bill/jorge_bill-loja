<?php
function addImagem($imagem){		
			$dir = 'img/produtos/'; 
			$tmpName = $_FILES['arquivo']['tmp_name']; 
			$name = $_FILES['arquivo']['name']; 
			
			// move_uploaded_file
			move_uploaded_file( $tmpName, $dir . $name );
		
		return $name;
}
?>

