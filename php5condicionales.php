<html>
    <body>
        <h1>Condicionales</h1>
    </body>
</html>

<?php
echo "Inicio \n";
if (2 > 0) {
    echo "Entro en el condicional \n";
}
echo 'Fin';
?>

>      es mayor que                     if (1 > 0)
<        es menor que                     if (1 < 0)
&&         y                      if (1 > 0 && 67 > 0)
||         o                      if (1 > 10 || 67 > 0)
!         no                          if (!(1 > 0))
==         es igual en valor                if ('3' == 3)
===     es igual en valor y tipo      if ('3' === '3')
!=      no es igual                  if('Doctor' !='who')
!==   no es igual en valor o tipo    if ('Doctor' !=='who')
>=      es mayor o igual que          if (10 >= 10)
<=      es menor o igual que          if (10 <= 20)
<=>    -1 o y 1 dependiendo de los 
         valores si son superados      (10 <=> 20) // 1 
True        Verdad                     if(True)
False        False                     if(False)


<!-- else en caso de cumplirse la condición entrará en 
las primeras llaves -->
<?php
if ('ghibli' == 'ghibli') {
    echo 'Bienvenido';
} else {
    echo 'No eres bien recibido'
}
?>

<!-- elseif posibilita tener varios condicionales -->

<?php 
if ('Michael Jackson' == 'Moonwlaker') {
    echo 'Gran baile';
} elseif ('Moonwalker' == 'Moonwalker') {
    echo 'Legendario';
}
?>

<!-- VERSION RESUMIDA -->
<?php echo (5 > 10) ? 'Es verdad' : 'Es mentira'; ?>


<!-- switch es un if solo que más limitado -->
<?php
$num = 1;
 if ($num == 0) {
    echo "num es igual a 0";
 } elseif ($num == 1) {
    echo "num es igual a 1";
 } elseif ($num == 2) {
    echo "num es igual a 2";
 } else {
    echo "No se a que es igual";
 }

 switch ($num) {
    case 0:
        echo "num es igual a 0";
        break;
    case 1:
        echo "num es igual a 1";
        break;
    case 2: 
        echo "num es igual a 2";
        break;
    default: 
        echo "Nose a que es igual";
        break;
 }
?>