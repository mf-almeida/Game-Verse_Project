<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    echo "<h1>Obrigado, $nome!</h1>";
    echo "<p>Recebemos sua mensagem:</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
} else {
    echo "<p>Erro: Formulário não enviado corretamente.</p>";
}
?>