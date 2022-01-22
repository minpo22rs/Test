// ***********************************************************************************


const open_grid = document.getElementById('open-grid');
const grid = document.getElementById('grid');
const open_api = document.getElementById('open-api');
const api = document.getElementById('api');



open_api.addEventListener('click', () => {
    api.classList.toggle('show-api');
});

open_api.addEventListener('click', () => {
    grid.classList.remove('show-grid');
});

open_grid.addEventListener('click', () => {
    grid.classList.toggle('show-grid');
});
open_grid.addEventListener('click', () => {
    api.classList.remove('show-api');
});

$('nav ul li').click(function() {
    $(this).addClass("show-color").siblings().removeClass("show-color");
});