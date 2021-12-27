<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <title>Juego de preguntas</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="static/game.css">
    <?php 
        session_start();
        if(!isset($_SESSION['username']) && !isset($_SESSION['idUser'])){
            header("Location: index.php");
        }
    ?>
  </head>
  
  <body>
    <div class="contenedor">
      <div class="encabezado1">
        <div class="puntaje" id="puntaje"></div>
        <div><?php
            
            include 'funciones/conexion.php';
            echo '<p style="padding: 10px;
            color: white;">Jugador: '.$_SESSION['username'].'</p>';
            echo'<input type="hidden" id="idUser" value="'.$_SESSION['idUser'].'">';
          ?>
        </div>
      </div>
      
      <div class="encabezado">
        <div class="categoria" id="dificultad">
        </div>
        
        <div class="numero" id="numero"></div>
        <div class="pregunta" id="pregunta">
        </div>
        <img src="#" class="imagen" id="imagen">
      </div>
      <div class="btn" id="btn1" onclick="oprimir_btn(0)"></div>
      <div class="btn" id="btn2" onclick="oprimir_btn(1)"></div>
      <div class="btn" id="btn3" onclick="oprimir_btn(2)"></div>
      <div class="btn" id="btn4" onclick="oprimir_btn(3)"></div>

      <button id="abandonar" class="abandonar">Abandonar Juego</button>
    </div>

    
  <script src="game.js" type="text/javascript"></script>
  </body>
  </html>