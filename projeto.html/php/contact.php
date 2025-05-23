<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Verse - Contato</title>
    <link rel="icon" href="../img/GameVerseFavIcon.png" type="image/png"> <!--ICON DO SITE-->
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Game Verse</h1>
        <nav>
            <ul class="navbar">
                <li><a href="about.php">Início</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <hr class="divisor">
    <main>
        <h2>Entre em Contato</h2>
        <form action="processa_contato.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu Nome" pattern="[A-Za-zÀ-ÿ\s]+" title="Apenas letras e espaços" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Seu E-mail" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Sua Mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </main>
    <hr class="divisor">
    <footer>
        <h6>&copy; 2025 Game Verse. <br>Todos os direitos reservados.</h6>
    </footer>
    <script src="../js/scripts.js"></script>
</body>
</html>