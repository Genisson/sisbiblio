<?php
    $con = new mysqli("localhost","root","","bd_sisbiblio");
    if ($con-> connect_error) {
    	echo "Erro:" . $con-> connect_error;
    	exit;

    	
    }
?>