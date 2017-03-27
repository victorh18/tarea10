var hola = "hola";

function getMensajes(){
  dMensajes = document.getElementById('mensajes')

  for(i = 0; i < 10; i++ ){
    tDiv = document.createElement('div');
    tDiv.innerHTML = i;

    dMensajes.appendChild(tDiv);

  }
}
