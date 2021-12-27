<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="static/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    
    <h2 class="active"> Log In Admin</h2>
    <p style="color: #a41c1c;"><?php if(isset($_GET['error'])){
        echo $_GET['error'];
    }?></p>
    
    <form action="funciones/processLogin.php" method="POST">
      <input class="input" type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input class="input" type="password" id="password" class="fadeIn third" name="pass" placeholder="Password">
      <input class="input" type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="index.php">Volver al inicio</a>
    </div>

  </div>
</div>
</body>
</html>