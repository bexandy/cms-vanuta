

<?php 
//echo 'enviando ';
   $nombre = '';
   $usuario = '';
   $email = '';
   if($_POST){
      //echo 'ingreso al post';
      $nombre = $_POST['nombre'];
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['contrasena'];
      $email = $_POST['email'];
      if ($nombre == "" or $usuario =="" or $contrasena =="" or $email == ""){
      	  $mensaje = sprintf("Hay algún campo vacío");
      }				
      else {
	  include '../includes/config.php';
	  $sql = sprintf("INSERT INTO usuarios VALUES (NULL,'$nombre','$usuario',md5('$contrasena'),'$email')");
	  $res = mysql_query($sql);
	  if (!$res) die('Invalid query: '.mysql_error());
	  $mensaje = sprintf("Usuario registrado correctamente");
      }
   }
  // else { echo 'no entra al post';}	
?>

<html>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css" />
  </head>

  <body>
   <!-- <?php echo "PRUEBA"?> -->
    <div id="registro">
    <?php if ($mensaje) { ?>
      <div class="error">
        <?php echo $mensaje ?>
      </div>
    <?php } ?>
    <form method="post" action="registro.php">
    <label>Nombre:</label><input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
    <label>Nombre de usuario:</label><input type="text" name="usuario" value="<?php echo $usuario ?>"><br>
    <label>Contraseña:</label><input type="password" name="contrasena"><br>
    <label>Email:</label><input type="text" name="email" value="<?php echo $email ?>"><br>
    <div class="submit">
        <input type="submit" value="Registrar">
    </div>
</form>
</div>
  </body>
</html>
