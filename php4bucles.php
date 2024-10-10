<!-- los BUCLES se usan para repetir un 
conjunto de instrucciones en una serie
de ocasiones definida.  -->


<html>

<body>
    <h1>Cuantos años tienes?</h1>
    <select name="" id="">
        <?php foreach (range(1, 100) as $num): ?>
            <option value="<?php echo $num; ?>"><?php echo $num . ' años'; ?></option>
        <?php endforeach; ?>
        ?>
    </select>
</body>

</html>
<br>


<!-- iterar un array -->

<?php
$animalesFantasticos = ['perro', 'gato', 'pez'];
foreach ($animalesFantasticos as $posicion => $animal) {
    echo "El animal $animal ocupa la posición $posicion \n";
}
?>

<!-- bucles anidados, un bucle dentro de otro -->
<?php
$zara = [
    123 => [
        'nombre' => 'Camisa a cuadros',
        'precio' => 29.95,
        'sexo' => 'Hombre'
    ],
    234 => [
        'nombre' => 'Falda manga',
        'precio' => 19.95,
        'sexo' => 'Mujer'
    ],
    345 => [
        'nombre' => 'Bolso minúsculo',
        'precio' => 50,
        'sexo' => 'Mujer'
    ],
];
?>

<?php
foreach ($zara as $producto) {
    foreach ($producto as $elemento) {
        echo "$elemento \n";
    }
}
?>

<!-- el loop FOR -->
<?php
for ($i = 0; $i < 100; $i++) {
    echo "$i \n";
}
?>

<!-- bucle WHILE es muy facil que no se termine
 hay que tener CUIDADO -->

<?php
$i = 1;
while ($i < 10) {
    echo $i++;
}
?>

<!-- el bucle DO-WHILE se ejecuta al menos una vez
aunque no se cumpla el condicional -->

<?php
$i = 20;
do {
    echo $i++;
} while ($i < 10);
?>