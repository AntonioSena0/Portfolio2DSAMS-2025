let fa = document.getElementById('listar');
let fa2 = document.getElementById('inserir');

let insert = document.querySelector('.php-inserir');
let listar = document.querySelector('.php-listar');

const inserirUrlInput = document.getElementById('inserir-url-input');

function hideAllSections() {
    insert.style.visibility = 'hidden';
    insert.style.opacity = 0;
    listar.style.visibility = 'hidden';
    listar.style.opacity = 0;
    
    document.querySelector('.texto').style.display = 'block';
}

fa.addEventListener('click', () => {
    hideAllSections();
    listar.style.visibility = 'visible';
    listar.style.opacity = '1';
    listar.style.transition = 'opacity 0.3s linear';
    document.querySelector('.texto').style.display = 'none';
});

fa2.addEventListener('click', () => {
    hideAllSections();
    insert.style.visibility = 'visible';
    insert.style.opacity = '1';
    insert.style.transition = 'opacity 0.3s linear';
    document.querySelector('.texto').style.display = 'none';
    
    mostrarGrupo(selectTabela.value);
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

// **FUNÇÃO CORRIGIDA:** Usa style.display ao invés de classes CSS desconhecidas
function mostrarGrupo(tipo) {
    Object.values(grupos).forEach(grupo => {
        grupo.style.display = 'none';
    });
    
    if (grupos[tipo]) {
        grupos[tipo].style.display = 'grid';
    }
    
    // **LÓGICA DE ROTEAMENTO (para Inserir funcionar)**
    if (inserirUrlInput) {
        const rota = tipo.toLowerCase() + '/inserir'; 
        inserirUrlInput.value = rota;
    }
}

selectTabela.addEventListener('change', () => {
    mostrarGrupo(selectTabela.value);
});

window.addEventListener('DOMContentLoaded', () => {
    mostrarGrupo(selectTabela.value);
});

document.addEventListener('DOMContentLoaded', function() {
    let acessarBtn = document.getElementById('acessar-tabela');
    let selectElement = document.getElementById('tabela-listar');

    if (acessarBtn && selectElement) {
        acessarBtn.addEventListener('click', function() {
            let rotaSelecionada = selectElement.value;
            window.location.href = 'index.php?url=' + rotaSelecionada;
        });
    }
});