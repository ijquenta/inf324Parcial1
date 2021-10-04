<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>Nuevo docente</title>
  </head>
  <body>
  <h1 >Nuevo docente</h1>
        <form action="<?php echo base_url(); ?>nuevo-docente/guardar"  method="POST">
            
                        <label for="">CI</label>
                        <input type="text" name="ci" placeholder="ingrese su ci">
                   
                        <br>
                   
                        <label for="">USUARIO</label>
                        <input type="text" name="user"  placeholder="ingrese su usuario">
                        <br>
                   
                        <label for="">CONTRASEÑA</label>
                        <input type="password" name="password" placeholder="ingrese su contraseña">
                  
                        <br>
                  
                        <label for="">ROL</label>
                        <input type="text" name="id_rol" placeholder="ingrese su rol">
						<br>
                    <button type="submit">Guardar</button>
        </form>
  </body>
</html>
