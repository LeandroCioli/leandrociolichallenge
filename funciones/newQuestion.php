<?php 
    include 'conexion.php';
    
    $dificultad = $_POST['dificultad'];
    $pregunta = $_POST['pregunta'];
    $respuesta = $_POST['respuesta'];
    $incorrecta1 = $_POST['incorrecta1'];
    $incorrecta2 = $_POST['incorrecta2'];
    $incorrecta3 = $_POST['incorrecta3'];

    if(!$dificultad=="" && !$pregunta=="" && !$respuesta=="" && !$incorrecta1=="" && !$incorrecta2=="" && !$incorrecta3==""){
        $sql = "INSERT INTO preguntas (dificultad, pregunta, respuesta, incorrecta1, incorrecta2, incorrecta3) VALUES ('$dificultad','$pregunta','$respuesta','$incorrecta1','$incorrecta2','$incorrecta3')";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: ../crearPregunta.php");
            die();
        } else {
            header("Location: ../crearPregunta.php");
            die();
        }
        mysqli_close($conn);
    }
?>