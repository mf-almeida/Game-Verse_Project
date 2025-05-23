<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Verifica se o nome contém apenas letras e espaços
    if (!preg_match("/^[A-Za-zÀ-ÿ\s]+$/", $nome)) {
        echo "<p>Erro: O nome deve conter apenas letras e espaços.</p>";
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Obrigado pelo contato!</title>
        <link rel="stylesheet" href="../css/styles.css">
        <style>
            .thanks-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 70vh;
                text-align: center;
            }
            .checkmark {
                width: 64px;
                height: 64px;
                margin: 2rem auto 1rem auto;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .checkmark svg {
                width: 64px;
                height: 64px;
                stroke: #2d5be3;
                stroke-width: 4;
                fill: none;
                stroke-linecap: round;
                stroke-linejoin: round;
                animation: checkmark 0.6s cubic-bezier(0.65, 0, 0.45, 1) both;
            }
            @keyframes checkmark {
                0% {
                    stroke-dashoffset: 50;
                }
                100% {
                    stroke-dashoffset: 0;
                }
            }
            .thanks-message {
                font-size: 1.5rem;
                color: #2d5be3;
                margin-bottom: 1rem;
            }
        </style>
        <script>
            // Verifica o tema ao carregar a página
            document.addEventListener('DOMContentLoaded', () => {
                const isDarkTheme = localStorage.getItem('darkTheme') === 'true';
                if (isDarkTheme) {
                    document.body.classList.add('dark-theme');
                }
            });
        </script>
    </head>
    <body>
        <div class="thanks-container">
            <div class="checkmark">
                <svg viewBox="0 0 64 64">
                    <circle cx="32" cy="32" r="30" fill="none" stroke="#e0e0e0" stroke-width="4"/>
                    <path d="M16 32L28 44L48 24" stroke-dasharray="50" stroke-dashoffset="50"/>
                </svg>
            </div>
            <div class="thanks-message">Obrigado, <?php echo $nome; ?>!</div>
            <p>Recebemos sua mensagem e em breve entraremos em contato.<br>
            <strong>E-mail:</strong> <?php echo $email; ?><br>
            <strong>Mensagem:</strong> <?php echo $mensagem; ?></p>
            <a href="../php/contact.php" style="margin-top:2rem; color:#2d5be3; text-decoration:underline;">Voltar para o contato</a>
        </div>
        <script>
            // Animação do check
            window.onload = function() {
                var path = document.querySelector('.checkmark path');
                path.style.strokeDasharray = path.getTotalLength();
                path.style.strokeDashoffset = path.getTotalLength();
                setTimeout(function() {
                    path.style.transition = "stroke-dashoffset 0.6s cubic-bezier(0.65, 0, 0.45, 1)";
                    path.style.strokeDashoffset = 0;
                }, 200);
            };
        </script>
    </body>
    </html>
    <?php
} else {
    echo "<p>Erro: Formulário não enviado corretamente.</p>";
}
?>