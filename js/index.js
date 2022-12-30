let botao = document.querySelector('.menu-principal__btn');
let menuPrincipal = document.querySelector('.menu-principal');

botao.addEventListener("click", abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('.menu-principal--fechado');
}