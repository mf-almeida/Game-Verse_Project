<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!--ACENTUAÇÃO-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--RESPONSIVIDADE-->
    <title>Game Verse</title>
    <link rel="icon" href="../img/GameVerseFavIcon.png" type="image/png">
    <link rel="stylesheet" href="../css/styles.css"> <!--CONECTA PASTA CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Game Verse</h1>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Início</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="destaques">
            <h2>Jogos em Destaque</h2>
            <div class="jogos">
                <?php
                $sql = "SELECT nome, preco, imagem FROM jogos LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="jogo">';
                        echo '<img src="../img/' . htmlspecialchars($row["imagem"]) . '" alt="' . htmlspecialchars($row["nome"]) . '">';
                        echo '<h4>' . htmlspecialchars($row["nome"]) . '</h4>';
                        echo '<p>R$ ' . number_format($row["preco"], 2, ',', '.') . '</p>';
                        echo '<button>Comprar</button>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum jogo cadastrado.</p>";
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <h6>&copy; 2025 Game Verse. <br>Todos os direitos reservados.</h6>
    </footer>
    <script src="../js/scripts.js"></script>
</body>
</html>