/* Funcion para abrir una ventana emergente, en este caso de la calculadora */
function ventanaSecundaria (url){
window.open(url, "Calculadora", "width=240, height=340, scrollbars=NO")
}

/* Funcion para abrir una ventana emergente, en este caso pdf */
function ventanaPDF (url){
    window.open(url, "pdf", "width=auto, height=auto")
    }
    
/* Ventana para los ejercicios */ 
function verificarEntrada(){
  if (window.confirm('¿Salir de la web y entrar en los ejercicios JavaScript?'))
  {
    window.location='http://localhost/benlliMontijano.cesur/ejercicios.html';
  }
  else
  {
    window.alert('Perfecto, respetamos su decisión.');
  }
}

/* Ventana para ver la hora */
function hora(){
    window.location='http://localhost/benlliMontijano.cesur/ejercicios/hora.html';
  }

/* Ventana para ver los detalles de la pantalla */
function dimensionesPantalla(){
    window.location='http://localhost/benlliMontijano.cesur/ejercicios/valoresVentana.html';
  }

/* Ventana para ver los detalles dela navegador */
function detallesNavegador(){
  window.location='http://localhost/benlliMontijano.cesur/ejercicios/navegadorValores.html';
}

/* Uso funciones */
function funcionHora(){
  window.location='http://localhost/benlliMontijano.cesur/ejercicios/horaFuncion.html';
}

/* Uso array */
function array(){
  window.location='http://localhost/benlliMontijano.cesur/ejercicios/array.html';
}

/* Contador click */
function contador(){
  window.location='http://localhost/benlliMontijano.cesur/ejercicios/contador.html';
}

/* Cambio color */
function cambioColor(){
  window.location='http://localhost/benlliMontijano.cesur/ejercicios/onMouse.html';
}

