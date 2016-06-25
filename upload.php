<?php

if($_FILES){ 
	
	if($_FILES['foto']){ 
		
		$dir='./produtos/'; 
		$tmpName=$_FILES['foto']['tmp_name']; 
		$name=$_FILES['foto']['name']; 
		
		// move_uploaded_file
	 move_uploaded_file( $tmpName, $dir . $name );
	}

}
?>