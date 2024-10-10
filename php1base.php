<!-- creación de ficheros -->
<!-- para usar php se debe usar -->
<?php ?> o
<? ?>
<!-- toda sentencia o instrucion debe terminar con ;
por ejemplo: -->
<?php
echo 'santi';
// echo sirve para imprimir por la pantalla 
?>
<!-- ejecutar el servidor interno -->
php -S localhost:8000

<!-- para hacer saltos de linea siempre es mejor usar PHP_EOL -->
<?php
echo '<p>en un lgar,</p>' . PHP_EOL . '<p> santi sabe</p>';
?>

<!-- PARA CONCATENAR SE USAN LOS "." -->