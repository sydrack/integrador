<?php
require_once 'biblioteca.php';
echo "Ola";
$db = pg_connect (DATABASE);
        $consulta = pg_query($db, "SELECT * FROM usuario where id=1");
        echo $consulta;
        
?>
