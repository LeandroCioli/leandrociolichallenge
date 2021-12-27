<?php
  session_start();
  unset($_SESSION["userAdmin"]);
  unset($_SESSION['username']);
  unset($_SESSION['idUser']);
  session_destroy();
  header("Location: ../index.php");
  exit;
?>