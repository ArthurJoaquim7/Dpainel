<?php
require 'conexao.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dpainel</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <div class="mb-3">
            <div class="mb-3">
                <a href="index.php" class="btn btn-primary">Voltar para o CARD</a>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titulo">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição pública</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descrição pública">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição Privada</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descrição Privada">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Status</option>
                    <option value="1">Em andamento</option>
                    <option value="2">Resolvido</option>
                    <option value="3">Aguardando energia</option>
                    <option value="4">Em verificação</option>
                </select>
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Rua</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rua">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bairro">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cidade</option>
                    <option value="1">Vitória de Santo Antão</option>
                    <option value="2">Carpina</option>
                    <option value="3">Recife</option>
                    <option value="4">Sairé</option>
                </select>
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Projeto</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Projeto">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prazo estimado</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prazo estimado">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Imagem da ocorrência</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Data da criação</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Data da atualização</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Técnico responsál</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Técnico</option>
                    <option value="1">João Carlos</option>
                    <option value="2">Gabriel Silva</option>
                    <option value="3">Anderson Pontes</option>
                    <option value="4">Felipe Lima</option>
                    <option value="3">Guilherme Borges</option>
                </select>
            </div>
            <!-- ==== -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Supervisor da área</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Supervisor</option>
                    <option value="1">Emersom</option>
                    <option value="2">Diego</option>
                    <option value="3">Jefersson</option>
                    <option value="4">Gilberto</option>
                    <option value="3">Sebastião</option>
                </select>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>