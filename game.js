let preguntas_aleatorias = true;
let mostrar_pantalla_juego_términado = true;
let reiniciar_puntos_al_reiniciar_el_juego = true;
let ronda = 1;
let puntuacion = 0;

window.onload = function () {
  obtenerPreguntas(ronda);
};

select_id('abandonar').addEventListener("click", function(){
  idUsuario = document.getElementById('idUser').value;
  window.location.href = "funciones/saveData.php?dinero="+puntuacion+"&id="+idUsuario;
})


function obtenerPreguntas(ronda){
  if(ronda < 6){
    var dificultad = "";
    switch(ronda) {
      case 1:
        dificultad = "Muy Facil";
        break;
      case 2:
        dificultad = "Facil";
        break;
      case 3:
        dificultad = "Intermedio";
        break;
      case 4:
        dificultad = "Dificil";
        break;
      case 5:
        dificultad = "Muy Dificil";
        break;
    } 
    var xhr = new XMLHttpRequest();
        xhr.open('GET', 'preguntas.php?dificultad='+dificultad, true);
        xhr.onload = function(){
            if(this.status == 200){
              base_preguntas = xhr.responseText;
              interprete_bp = JSON.parse(base_preguntas);
              escogerPreguntaAleatoria();
            }
        }
    xhr.send();
  }else{
    swal.fire({
      title: "Juego finalizado",
      text:
        "Puntuación: " + puntuacion,
      icon: "success",
      confirmButtonText: 'Finalizar'
    }).then((result) => {
      if (result.isConfirmed) {
        ronda = 1;
        idUsuario = document.getElementById('idUser').value;
        window.location.href = "funciones/saveData.php?dinero="+puntuacion+"&id="+idUsuario;
        
        
      }})
  }
  
}


let pregunta;
let posibles_respuestas;
btn_correspondiente = [
  select_id("btn1"),
  select_id("btn2"),
  select_id("btn3"),
  select_id("btn4")
];
let npreguntas = [];


function escogerPreguntaAleatoria() {
  let n;
  if (preguntas_aleatorias) {
    n = Math.floor(Math.random() * interprete_bp.length);
  } else {
    n = 0;
  }
  npreguntas.push(n);
  escogerPregunta(n);
}

function escogerPregunta(n) {
  pregunta = interprete_bp[n];
  select_id("dificultad").innerHTML = "Dificultad: "+pregunta.dificultad;
  select_id("pregunta").innerHTML = pregunta.pregunta;
  select_id("numero").innerHTML = "Ronda actual: "+ronda;
  select_id("puntaje").innerHTML = "<p>Dinero $"+puntuacion+"</p>";
  

  style("imagen").objectFit = pregunta.objectFit;
  desordenarRespuestas(pregunta);
  if (pregunta.imagen) {
    select_id("imagen").setAttribute("src", pregunta.imagen);
    style("imagen").height = "200px";
    style("imagen").width = "100%";
  } else {
    style("imagen").height = "0px";
    style("imagen").width = "0px";
    setTimeout(() => {
      select_id("imagen").setAttribute("src", "");
    }, 500);
  }
}

function desordenarRespuestas(pregunta) {
  posibles_respuestas = [
    pregunta.respuesta,
    pregunta.incorrecta1,
    pregunta.incorrecta2,
    pregunta.incorrecta3,
  ];
  posibles_respuestas.sort(() => Math.random() - 0.5);

  select_id("btn1").innerHTML = posibles_respuestas[0];
  select_id("btn2").innerHTML = posibles_respuestas[1];
  select_id("btn3").innerHTML = posibles_respuestas[2];
  select_id("btn4").innerHTML = posibles_respuestas[3];
}

let suspender_botones = false;

function oprimir_btn(i) {
  if (suspender_botones) {
    return;
  }
  suspender_botones = true;
  if (posibles_respuestas[i] == pregunta.respuesta) {
    switch(pregunta.dificultad) {
      case "Muy Facil":
        puntuacion = puntuacion + 1000;
        break;
      case "Facil":
        puntuacion = puntuacion + 5000;
        break;
      case "Intermedio":
        puntuacion = puntuacion + 10000;
        break;
      case "Dificil":
        puntuacion = puntuacion + 45000;
        break;
      case "Muy Dificil":
        puntuacion = puntuacion + 100000;
        break;
    } 
  
    btn_correspondiente[i].style.background = "lightgreen";
    ronda++;
    
    setTimeout(() => {
        reiniciar(ronda);
        suspender_botones = false;
      }, 3000);
  
  } else {
    btn_correspondiente[i].style.background = "pink";
  
    for (let j = 0; j < 4; j++) {
      if (posibles_respuestas[j] == pregunta.respuesta) {
        btn_correspondiente[j].style.background = "lightgreen";
        break;
      }
    }

    setTimeout(() => {
      Swal.fire({
        icon: 'error',
        title: 'Juego Finalizado',
        text: 'La respuesta no era correcta',
        confirmButtonText: 'Finalizar'
      }).then((result) => {
        if (result.isConfirmed) {
          ronda = 1;
          window.location.href = "finalScreen.php?r=L";
          
        }})
    }, 1000);
    
  }
  
}

function reiniciar(ronda) {
  for (const btn of btn_correspondiente) {
    btn.style.background = "white";
  }
  obtenerPreguntas(ronda);
}

function select_id(id) {
  return document.getElementById(id);
}

function style(id) {
  return select_id(id).style;
}