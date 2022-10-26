const  hamburguer = document.querySelector('.hamburguer');
const menu = document.querySelector('.menu-navegacion');
const search = document.querySelector('.search');

hamburguer.addEventListener('click', ()=>{
    console.log('click');
    menu.classList.toggle("spread")
})

window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != hamburguer && e.target != menu && e.target != search){
        console.log('click')
        menu.classList.toggle("spread")
    }
})