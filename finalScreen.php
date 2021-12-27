<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin del Juego</title>
    <link rel="stylesheet" href="static/style.css">
    <?php 
        session_start();
        if(!isset($_SESSION['username']) && !isset($_SESSION['idUser'])){
            header("Location: index.php");
        }
    ?>
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">FIN DEL JUEGO</h2>
        <?php if(isset($_GET['r']) && $_GET['r']=='L'){
            echo '<p style="font-size: 20px;">Has perdido, no se obtiene el dinero de ésta partida.</p>';
            echo'<a href="game.php"><input class="input" type="submit" class="fadeIn fourth" value="Volver a intentar"></a>';

        }else if(isset($_GET['final']) && $_GET['final']=='true'){
            echo '<p style="font-size: 20px;">Dinero total $'.$_GET['d'].'</p>';
        }

        
        ?>
           
    
        <div id="formFooter">
        <a class="underlineHover" href="funciones/cerrarSesion.php">Cerrar Sesión</a>
        </div>

    </div>
    </div>
</body>
</html>