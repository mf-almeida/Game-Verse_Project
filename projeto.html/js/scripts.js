// Alternar entre tema claro e escuro
const toggleTheme = () => {
    document.body.classList.toggle('dark-theme');
};

// Adicionar evento ao carregar a página
document.addEventListener('DOMContentLoaded', () => {
    const themeButton = document.createElement('button');
    themeButton.textContent = 'Alternar Tema';
    themeButton.style.position = 'fixed';
    themeButton.style.top = '10px'; // Altere para a parte superior
    themeButton.style.right = '10px'; // Mantém na direita
    themeButton.style.padding = '0.5rem 1rem';
    themeButton.style.backgroundColor = '#ff6600';
    themeButton.style.color = '#fff';
    themeButton.style.border = 'none';
    themeButton.style.borderRadius = '4px';
    themeButton.style.cursor = 'pointer';
    themeButton.addEventListener('click', toggleTheme);
    document.body.appendChild(themeButton);

    const buttons = document.querySelectorAll('.jogo button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            alert('Jogo adicionado ao carrinho!');
        });
    });
});