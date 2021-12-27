<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="active">Registro</h2>
    <p style="color: #a41c1c;"><?php if(isset($_GET['error'])){
        echo $_GET['error'];
    }?></p>
    <form action="funciones/processRegistration.php" method="POST">
        <input class="input" type="text" placeholder="Username" name="username">
        <input class="input" type="password" placeholder="Password" name="pass">
        <input class="input" type="submit" class="fadeIn fourth" value="Registrarse">
    </form>

    <div id="formFooter">
      <p>¿Ya tienes una cuenta? </p><a class="underlineHover" href="index.php">Iniciar Sesion</a>
    </div>

  </div>
</div>
</body>
</html>