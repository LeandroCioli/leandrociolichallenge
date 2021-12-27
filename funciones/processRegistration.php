<?php

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
            header("Location: ../register.php?error=Todos los campos son obligatorios");
            die();
        }

        $sql = "INSERT INTO user (Username, Passwd, Dinero) VALUES ('$user','$passwd', 0)";
        //$result = $conn->query($sql);

        if (mysqli_query($conn, $sql)) {
            header("Location: ../index.php");
            die();
        } else {
            header("Location: ../register.php?error=Hubo un error al crear la cuenta");
            die();
        }
        mysqli_close($conn);
    }
    
