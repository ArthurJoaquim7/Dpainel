<?php

session_start();
require_once 'conexao.php';

if (isset($_POST['create_card'])) {

    $titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
    $descricaoPublica = isset($_POST['descricaoPublica']) ? mysqli_real_escape_string($conexao, trim($_POST['descricaoPublica'])) : '';
    $descricaoInterna = isset($_POST['descricaoInterna']) ? mysqli_real_escape_string($conexao, trim($_POST['descricaoInterna'])) : '';
    $status = mysqli_real_escape_string($conexao, trim($_POST['status']));
    $rua = isset($_POST['rua']) ? mysqli_real_escape_string($conexao, trim($_POST['rua'])) : '';
    $bairro = isset($_POST['bairro']) ? mysqli_real_escape_string($conexao, trim($_POST['bairro'])) : '';
    $cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
    $projeto = isset($_POST['projeto']) ? mysqli_real_escape_string($conexao, trim($_POST['projeto'])) : '';
    $prazoEstimado = isset($_POST['prazoEstimado']) ? mysqli_real_escape_string($conexao, trim($_POST['prazoEstimado'])) : '';
    $dataCriacao = mysqli_real_escape_string($conexao, trim($_POST['dataCriacao']));
    $dataAtualizacao = isset($_POST['dataAtualizacao']) ? mysqli_real_escape_string($conexao, trim($_POST['dataAtualizacao'])) : '';
    $tecnicoResponsavel = isset($_POST['tecnicoResponsavel']) ? mysqli_real_escape_string($conexao, trim($_POST['tecnicoResponsavel'])) : '';
    $supervisor = isset($_POST['supervisor']) ? mysqli_real_escape_string($conexao, trim($_POST['supervisor'])) : '';

    // Processa o upload da imagem
    $imagemOcorrencia = '';
    if (!empty($_FILES['imagemOcorrencia']['tmp_name'])) {
        $nomeOriginal = basename($_FILES['imagemOcorrencia']['name']);
        $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
        $nomeUnico = uniqid('img_', true) . '.' . $extensao;
        $caminho = 'uploads/' . $nomeUnico;

        if (move_uploaded_file($_FILES['imagemOcorrencia']['tmp_name'], $caminho)) {
            $imagemOcorrencia = $nomeUnico;
        } else {
            $_SESSION['message'] = "Erro ao mover o arquivo de imagem.";
            header("Location: /components/form.php");
            exit;
        }
    }

    // Inserção no banco
    $sql = "INSERT INTO card (
                titulo, descricaoPublica, descricaoInterna, status, rua, bairro, cidade,
                projeto, prazoEstimado, imagemOcorrencia, dataCriacao, dataAtualizacao,
                tecnicoResponsavel, supervisor
            ) VALUES (
                '$titulo', '$descricaoPublica', '$descricaoInterna', '$status', '$rua', '$bairro',
                '$cidade', '$projeto', '$prazoEstimado', '$imagemOcorrencia', '$dataCriacao',
                '$dataAtualizacao', '$tecnicoResponsavel', '$supervisor'
            )";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['message'] = "Card criado com sucesso!";
    } else {
        $_SESSION['message'] = "Erro ao criar card: " . mysqli_error($conexao);
    }

    header("Location: /components/form.php"); // redireciona após processar
    exit;
}

if (isset($_POST['delete_card'])) {
    $card_id = mysqli_real_escape_string($conexao, $_POST['delete_card']);

    $sql = "DELETE FROM card WHERE id = '$card_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['message'] = 'Card deletado com sucesso!';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Erro ao deletar o Card' . mysqli_error($conexao);
        header('Location: index.php');
        exit;
    }
}
