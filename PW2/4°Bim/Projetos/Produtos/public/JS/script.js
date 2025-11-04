let fa = document.getElementById('listar');
let fa2 = document.getElementById('inserir');

let insert = document.querySelector('.php-inserir');
let listar = document.querySelector('.php-listar');

function hideAllSections() {
    insert.style.visibility = 'hidden';
    insert.style.opacity = 0;
    listar.style.visibility = 'hidden';
    listar.style.opacity = 0;
}

fa.addEventListener('click', () => {
    hideAllSections();
    listar.style.visibility = 'visible';
    listar.style.opacity = '1';
    listar.style.transition = 'opacity 0.3s linear';
});

fa2.addEventListener('click', () => {
    hideAllSections();
    insert.style.visibility = 'visible';
    insert.style.opacity = '1';
    insert.style.transition = 'opacity 0.3s linear';
});

document.querySelectorAll('.voltar').forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllSections();
    });
});