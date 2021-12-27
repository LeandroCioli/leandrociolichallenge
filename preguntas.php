<?php
    include 'funciones/conexion.php';
    $dificultad = $_GET['dificultad'];
    $sql = "SELECT * FROM preguntas WHERE dificultad = '".$dificultad."'";
    $result = $conn->query($sql);
    $preguntas = array();

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($preguntas, $row);
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    $jsonPreguntas = json_encode($preguntas, JSON_UNESCAPED_UNICODE);
    echo $jsonPreguntas;
    
?>
