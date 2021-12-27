<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Preguntas</title>
    <link rel="stylesheet" href="static/style.css">
    <?php 
        session_start();
        if(!isset($_SESSION['userAdmin'])){
            header("Location: index.php");
        }
    ?>
</head>
<body>
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Crear una pregunta</h2>

        <form action="funciones/newQuestion.php" method="POST">
            <select name="dificultad" id="" class="input">
                <option value="Muy Facil">Muy Facil</option>
                <option value="Facil">Facil</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Dificil">Dificil</option>
                <option value="Muy Dificil">Muy Dificil</option>
            </select>
            <input type="text" class="input" placeholder="Pregunta" name="pregunta">
            <input type="text" class="input" placeholder="Respuesta" name="respuesta">
            <input type="text" class="input" placeholder="Incorrecta 1" name="incorrecta1">
            <input type="text" class="input" placeholder="Incorrecta 2" name="incorrecta2">
            <input type="text" class="input" placeholder="Incorrecta 3" name="incorrecta3">

            <input class="input" type="submit" class="fadeIn fourth" value="Enviar">
        </form>

        <div id="formFooter">
        <a class="underlineHover" href="funciones/cerrarSesion.php">Cerrar Sesion</a>
        </div>

    </div>
    </div>
</body>
</html>