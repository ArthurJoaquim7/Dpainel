<?php

session_start();
require_once 'conexao.php';
require_once 'card.php';
require_once 'form.php';

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
    $imagemOcorrencia = isset($_FILES['imagemOcorrencia']['name']) ? $_FILES['imagemOcorrencia']['name'] : '';
    $dataCriacao = mysqli_real_escape_string($conexao, trim($_POST['dataCriacao']));
    $dataAtualizacao = isset($_POST['dataAtualizacao']) ? mysqli_real_escape_string($conexao, trim($_POST['dataAtualizacao'])) : '';
    $tecnicoResponsavel = isset($_POST['tecnicoResponsavel']) ? mysqli_real_escape_string($conexao, trim($_POST['tecnicoResponsavel'])) : '';
    $supervisor = isset($_POST['supervisor']) ? mysqli_real_escape_string($conexao, trim($_POST['supervisor'])) : '';


    // Move the uploaded file to the desired directory
    if (isset($_FILES['imagemOcorrencia']) && isset($_FILES['imagemOcorrencia']['tmp_name']) && !empty($imagemOcorrencia)) {
        move_uploaded_file($_FILES['imagemOcorrencia']['tmp_name'], 'uploads/' . $imagemOcorrencia);
    }

    $sql = "INSERT INTO card (titulo, descricaoPublica, descricaoInterna, status, rua, bairro, cidade, projeto, prazoEstimado, imagemOcorrencia, dataCriacao, dataAtualizacao, tecnicoResponsavel, supervisor) 
            VALUES ('$titulo', '$descricaoPublica', '$descricaoInterna', '$status', '$rua', '$bairro', '$cidade', '$projeto', '$prazoEstimado', '$imagemOcorrencia', '$dataCriacao', '$dataAtualizacao', '$tecnicoResponsavel', '$supervisor')";

    mysqli_query($conexao, $sql);
    $_SESSION['message'] = "Card created successfully!";
}