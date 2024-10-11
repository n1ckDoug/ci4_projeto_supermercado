const btnMainMenu = document.querySelector('.btn-main-menu');

btnMainMenu.addEventListener('click', () => {
    document.querySelector('.main-menu').classList.toggle('show');
    document.querySelector('.content').classList.toggle('show');
});

let changeIcon = function(icon){
    icon.classList.toggle('fa-arrow-left');
}