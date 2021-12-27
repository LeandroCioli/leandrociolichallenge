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
            header("Location: ../login.php?error=Todos los campos son obligatorios");
            die();
        }

        $sql = "SELECT * FROM administrador WHERE username='".$user."' and passwd='".$passwd."'";
        $resultado = mysqli_query($conn, $sql);

        if (mysqli_num_rows($resultado)>0) {
            $_SESSION['userAdmin']=$user;
            header("Location: ../crearPregunta.php");
            die();
        } else {
            header("Location: ../login.php?error=Hubo un error al iniciar sesion, intente nuevamente.");
            die();
        }
        mysqli_close($conn);

    }
?>