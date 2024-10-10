<!-- Los formularios son la forma en la que el usuario puede transmitir informacion -->

<!-- PARA ESO SE NECESITA LA ETIQUETA <form> y dentro de este tiene que estar el <input> -->

<html>
    <body>
        <form action="">
            <?php
            var_dump($_REQUEST);
            ?>
            <input type="text" name="nombre">
            <input type="submit">
        </form>
    </body>
</html>
<!-- var_dump($_REQUEST) SE USA PARA VER QUE VARIABLES TE LLEGAN DE UN FORMULARIO -->

<html>
    <body>
        <?php if (isset($_REQUEST['nombre'])): ?>
            <p>de verdad te llamas  <?php echo $_REQUEST['nombre'];
            ?> que nombre más bonito</p>
        <?php endif; ?>    
        <form action="">
            <input type="text" name="nombre">
            <input type="submit">
        </form>
    </body>
</html>
