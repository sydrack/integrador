<?php
require_once 'biblioteca.php';

$db = pg_connect (DATABASE);
        $consulta = pg_query($db, "SELECT * FROM usuario");
        
        while ($row = pg_fetch_assoc($consulta)) {
            echo $row;
        }
<?php
