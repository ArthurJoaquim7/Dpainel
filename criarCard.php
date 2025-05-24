<?php
require_once 'conexao.php';
require_once 'card.php'; // Inclui a classe Card

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $descricaoPublica = $_POST['descricaoPublica'] ?? '';
    $descricaoInterna = $_POST['descricaoInterna'] ?? '';
    $status = $_POST['status'] ?? '';
    $rua = $_POST['rua'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $projeto = $_POST['projeto'] ?? '';
    $prazoEstimado = $_POST['prazoEstimado'] ?? '';
    $imagemOcorrencia = $_POST['imagemOcorrencia'] ?? '';
    $tecnicoResponsavel = $_POST['tecnicoResponsavel'] ?? '';
    $supervisor = $_POST['supervisor'] ?? '';
    $dataCriacao = new DateTime();
    $dataAtualizacao = new DateTime();

    $card = new Card(
        $titulo,
        $descricaoPublica,
        $descricaoInterna,
        $status,
        $rua,
        $bairro,
        $cidade,
        $projeto,
        $prazoEstimado,
        $imagemOcorrencia,
        $dataCriacao,
        $dataAtualizacao,
        $tecnicoResponsavel,
        $supervisor
    );

    $stmt = $conn->prepare("INSERT INTO cards (
        titulo, descricaoPublica, descricaoInterna, status, rua, bairro, cidade, projeto, prazoEstimado, imagemOcorrencia, dataCriacao, dataAtualizacao, tecnicoResponsavel, supervisor
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $dataCriacaoStr = $card->dataCriacao->format('Y-m-d H:i:s');
    $dataAtualizacaoStr = $card->dataAtualizacao->format('Y-m-d H:i:s');

    $stmt->bind_param(
        "ssssssssssssss",
        $card->titulo,
        $card->descricaoPublica,
        $card->descricaoInterna,
        $card->status,
        $card->rua,
        $card->bairro,
        $card->cidade,
        $card->projeto,
        $card->prazoEstimado,
        $card->imagemOcorrencia,
        $dataCriacaoStr,
        $dataAtualizacaoStr,
        $card->tecnicoResponsavel,
        $card->supervisor
    );

    if ($stmt->execute()) {
        echo "<p>Card salvo com sucesso!</p>";
    } else {
        echo "<p>Erro ao salvar o card: " . $stmt->error . "</p>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Criar Card</title>
</head>
<body>
    <h1>Criar Card</h1>
    <form method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="descricaoPublica">Descrição Pública:</label><br>
        <textarea id="descricaoPublica" name="descricaoPublica" required></textarea><br><br>

        <label for="descricaoInterna">Descrição Interna:</label><br>
        <textarea id="descricaoInterna" name="descricaoInterna" required></textarea><br><br>

        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status" required><br><br>

        <label for="rua">Rua:</label><br>
        <input type="text" id="rua" name="rua" required><br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro" required><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <label for="projeto">Projeto:</label><br>
        <input type="text" id="projeto" name="projeto" required><br><br>

        <label for="prazoEstimado">Prazo Estimado:</label><br>
        <input type="date" id="prazoEstimado" name="prazoEstimado" required><br><br>

        <label for="imagemOcorrencia">Imagem da Ocorrência (URL):</label><br>
        <input type="text" id="imagemOcorrencia" name="imagemOcorrencia"><br><br>

        <label for="tecnicoResponsavel">Técnico Responsável:</label><br>
        <input type="text" id="tecnicoResponsavel" name="tecnicoResponsavel" required><br><br>

        <label for="supervisor">Supervisor:</label><br>
        <input type="text" id="supervisor" name="supervisor" required><br><br>

        <input type="submit" value="Salvar Card">

        
    </form>
</body>
</html>
