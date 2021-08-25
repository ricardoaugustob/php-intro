<?php
$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolecente";
$categorias[] = "Adulto";

echo "Essas são todas as categoraias do meu array";
for($i=0; $i<count($categorias); $i++ ){
    echo "<br>".$categorias[$i];


}



?>