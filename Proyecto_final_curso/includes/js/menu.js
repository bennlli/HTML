const hamburguer = document.querySelector('.hamburguer');
const menu = document.querySelector('.menu-navegacion');

/*console.log(menu)
console.log(hamburguer)*/
/* Evento flechas o arrows */
/* Funcion para hacer aparecer y desaparecer el menu lateral */
hamburguer.addEventListener('click', ()=>{
    menu.classList.toggle("spread")
})

/* Funcion para desplegar y cerrar el menu lateral */
window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != menu && e.target != hamburguer  ){
            menu.classList.toggle("spread")
        }
})