<?php
    include 'conexion.php';
    $dinero = $_GET['dinero'];
    $idUsu = $_GET['id'];
    $dineroTotal;

    $sql = "SELECT Dinero FROM user WHERE idUser=".$idUsu;
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($resultado);
    $dineroTotal = $row[0] + $dinero;

    $sqlUpdate = "UPDATE user SET Dinero=$dineroTotal WHERE idUser=".$idUsu;
        
    if (mysqli_query($conn, $sqlUpdate)) {
        header("Location: ../finalScreen.php?final=true&d=".$dineroTotal);
        die();
    }
    mysqli_close($conn);