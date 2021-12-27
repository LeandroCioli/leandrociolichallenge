<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="active"> Bienvenido a Trivia</h2>
    <p style="color: #a41c1c;"><?php if(isset($_GET['error'])){
        echo $_GET['error'];
    }?></p>
    <form action="funciones/processUser.php" method="POST">
        <input class="input" type="text" placeholder="Username" name="username">
        <input class="input" type="password" placeholder="Password" name="pass">
        <input class="input" type="submit" class="fadeIn fourth" value="¡Jugar!">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="login.php">Crear Preguntas</a>
      <a class="underlineHover" href="register.php" style="margin-left: 88px;">Registrarme</a>
    </div>

  </div>
</div>
</body>
</html>