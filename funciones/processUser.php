<?php
    session_start();
    include 'conexion.php';

    if(isset($_POST['username']) && isset($_POST['pass'])){

        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validar($_POST['username']);
        $passwd = validar($_POST['pass']);

        if(empty($user) || empty($passwd)){
            header("Location: ../index.php?error=Todos los campos son obligatorios");
            die();
        }

        $sql = "SELECT * FROM user WHERE username='".$user."' and passwd='".$passwd."'";
        $validar = mysqli_query($conn, $sql);
        if (mysqli_num_rows($validar)>0) {
            $row = mysqli_fetch_array($validar);
            $_SESSION['username']=$user;
            $_SESSION['idUser']=$row[0];
            header("Location: ../game.php");
            die();
        } else {
            header("Location: ../index.php?error=No se encontraron coincidencias, vuelva a intentarlo.");
            die();
        }
        mysqli_close($conn);

    }
?>