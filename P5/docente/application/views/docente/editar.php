<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Editar docente</title>
</head>

<body>
    <h1>Editar los datos del docente: <?php echo $user; ?></h1>
    <form action="<?php echo base_url(); ?>docente/<?php echo $ci; ?> " method="POST">

        <label>CI</label>
        <input type="text" name="ci" placeholder="" value="<?php echo $ci; ?>">

        <br>


        <label>USUARIO</label>
        <input type="text" name="user" placeholder="" value="<?php echo $user; ?>">

        <br>


        <label>CONTRASEÑA</label>
        <input type="text" name="password" placeholder="" value="<?php echo $password; ?>">
        <br>

        <label>ROL</label>
        <input type="text" name="id_rol" placeholder="" value="<?php echo $id_rol; ?>">
        <br>

</form>
        <button type="submit">Guardar</button>

</body>

</html>
