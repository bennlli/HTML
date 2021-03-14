function primos(){
    numero_intro = document.getElementById("numb").value;
   if (document.getElementById("numb").validity.rangeOverflow) {
       text = "Valor muy largo";
     } else {
       if(esPrimo(numero_intro)==true){
           text="Es primo";
       }else{
           text="No es primo";
       }
     }   
   document.getElementById("demo").innerHTML = text;

   
   
}

   function esPrimo(numero_primo){
 
       if (numero_primo == 0 || numero_primo == 1 || numero_primo == 4) return false;
       for (let x = 2; x < numero_primo / 2; x++) {
           if (numero_primo % x == 0) 
           return false;
       }

       return true;
   }

