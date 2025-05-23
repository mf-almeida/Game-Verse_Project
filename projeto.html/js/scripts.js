// Função para alternar entre tema claro e escuro
// Adiciona ou remove a classe 'dark-theme' no body do documento
const toggleTheme = () => {
    document.body.classList.toggle('dark-theme');
    // Salva a preferência do usuário
    const isDarkTheme = document.body.classList.contains('dark-theme');
    localStorage.setItem('darkTheme', isDarkTheme);
};

// Evento que é executado quando todo o conteúdo da página foi carregado
document.addEventListener('DOMContentLoaded', () => {
    // Verifica e aplica o tema salvo
    const isDarkTheme = localStorage.getItem('darkTheme') === 'true';
    if (isDarkTheme) {
        document.body.classList.add('dark-theme');
    }

    // Cria um botão para alternar o tema
    const themeButton = document.createElement('button');
    themeButton.textContent = 'Alternar Tema'; // Texto do botão

    // Estiliza o botão para ficar fixo no canto superior direito
    themeButton.style.position = 'fixed'; // Fixa o botão na tela
    themeButton.style.top = '10px'; // Distância do topo
    themeButton.style.right = '10px'; // Distância da direita
    themeButton.style.padding = '0.5rem 1rem'; // Espaçamento interno
    themeButton.style.backgroundColor = '#ff6600'; // Cor de fundo
    themeButton.style.color = '#fff'; // Cor do texto
    themeButton.style.border = 'none'; // Sem borda
    themeButton.style.borderRadius = '4px'; // Bordas arredondadas
    themeButton.style.cursor = 'pointer'; // Cursor de mão ao passar o mouse

    // Adiciona um evento de clique ao botão para alternar o tema
    themeButton.addEventListener('click', toggleTheme);

    // Adiciona o botão ao corpo da página
    document.body.appendChild(themeButton);

    // Seleciona todos os botões dentro de elementos com a classe 'jogo'
    const buttons = document.querySelectorAll('.jogo button');

    // Para cada botão encontrado, adiciona um evento de clique
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Exibe um alerta ao clicar, informando que o jogo foi adicionado ao carrinho
            alert('Jogo adicionado ao carrinho!');
        });
    });
});