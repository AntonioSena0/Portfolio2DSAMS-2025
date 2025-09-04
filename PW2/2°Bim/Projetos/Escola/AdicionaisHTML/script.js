let fa = document.getElementById('listar');
let fa2 = document.getElementById('inserir');
let fa3 = document.getElementById('pesquisar');
let fa4 = document.getElementById('alterar');
let fa5 = document.getElementById('deletar');

let insert = document.querySelector('.php-inserir');
let listar = document.querySelector('.php-listar');
let pesquisar = document.querySelector('.php-pesquisar');
let alterar = document.querySelector('.php-alterar');
let deletar = document.querySelector('.php-deletar');

function hideAllSections() {
    insert.style.visibility = 'hidden';
    insert.style.opacity = 0;
    listar.style.visibility = 'hidden';
    listar.style.opacity = 0;
    pesquisar.style.visibility = 'hidden';
    pesquisar.style.opacity = 0;
    alterar.style.visibility = 'hidden';
    alterar.style.opacity = 0;
    deletar.style.visibility = 'hidden';
    deletar.style.opacity = 0;
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
fa3.addEventListener('click', () => {
    hideAllSections();
    pesquisar.style.visibility = 'visible';
    pesquisar.style.opacity = '1';
    pesquisar.style.transition = 'opacity 0.3s linear';
});
fa4.addEventListener('click', () => {
    hideAllSections();
    alterar.style.visibility = 'visible';
    alterar.style.opacity = '1';
    alterar.style.transition = 'opacity 0.3s linear';
});
fa5.addEventListener('click', () => {
    hideAllSections();
    deletar.style.visibility = 'visible';
    deletar.style.opacity = '1';
    deletar.style.transition = 'opacity 0.3s linear';
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
