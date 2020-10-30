// La usamos para modificar el valor de la pantalla
function setLCD(valor){
    document.getElementById('LCD').innerHTML = valor;
}
// Usamos el getLCD para poder usar ese resultado modificado anteriormente
function getLCD(){
    return(document.getElementById('LCD').innerHTML);
}
// Para marcar el boton que deseemos presionar
function presionar(boton){
    // Volcamos la información en la variable
    var LCD = getLCD();
    // Comprobamos si LCD es distinto a 0 o si no es un numero
    if(LCD!='0' || isNaN(boton)) setLCD(LCD+boton);
    //Seleccionamos 
    else setLCD(boton);
}
function calc(){
    var LCD = eval(getLCD());
    setLCD(LCD);
}
function del(){
    setLCD(0);
}