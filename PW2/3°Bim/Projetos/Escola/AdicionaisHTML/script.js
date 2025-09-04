let fa = document.getElementById('listar');
let fa2 = document.getElementById('inserir');
let fa4 = document.getElementById('alterar');

let insert = document.querySelector('.php-inserir');
let listar = document.querySelector('.php-listar');
let alterar = document.querySelector('.php-alterar');

function hideAllSections() {
    insert.style.visibility = 'hidden';
    insert.style.opacity = 0;
    listar.style.visibility = 'hidden';
    listar.style.opacity = 0;
    alterar.style.visibility = 'hidden';
    alterar.style.opacity = 0;
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

fa4.addEventListener('click', () => {
    hideAllSections();
    alterar.style.visibility = 'visible';
    alterar.style.opacity = '1';
    alterar.style.transition = 'opacity 0.3s linear';
});

document.querySelectorAll('.voltar').forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllSections();
    });
});


const selectTabela = document.getElementById('tabelaInserir');
const grupos = {
    Alunos: document.querySelector('.grupo-alunos'),
    Cursos: document.querySelector('.grupo-cursos'),
    Disciplinas: document.querySelector('.grupo-disciplinas')
};

function mostrarGrupo(tipo) {
    Object.values(grupos).forEach(grupo => grupo.classList.remove('active'));
    grupos[tipo].classList.add('active');
}

selectTabela.addEventListener('change', () => {
    mostrarGrupo(selectTabela.value);
});

window.addEventListener('DOMContentLoaded', () => {
    mostrarGrupo(selectTabela.value);
});
