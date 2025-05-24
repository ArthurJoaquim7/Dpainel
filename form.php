<?php
require_once 'conexao.php';
require_once 'acoes.php';
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
        <form action="acoes.php" method="post">
            <div class="mb-3">
                <h1 class="text-center">Cadastro de Ocorrências</h1>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <a href="index.php" class="btn btn-primary">Voltar para o CARD</a>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="descricaoPublica" class="form-label">Descrição pública</label>
                    <input type="text" name="descricaoPublica" class="form-control" id="descricaoPublica" placeholder="Descrição pública">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="descricaoInterna" class="form-label">Descrição Privada</label>
                    <input type="text" name="descricaoInterna" class="form-control" id="descricaoInterna" placeholder="Descrição Privada">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status" aria-label="Default select example">
                        <option selected>Status</option>
                        <option value="1">Em andamento</option>
                        <option value="2">Resolvido</option>
                        <option value="3">Aguardando energia</option>
                        <option value="4">Em verificação</option>
                    </select>
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="rua" class="form-label">Rua</label>
                    <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="projeto" class="form-label">Projeto</label>
                    <input type="text" name="projeto" class="form-control" id="projeto" placeholder="Projeto">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="prazoEstimado" class="form-label">Prazo estimado</label>
                    <input type="text" name="prazoEstimado" class="form-control" id="prazoEstimado" placeholder="Prazo estimado">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="imagemOcorrencia" class="form-label">Imagem da ocorrência</label>
                    <input class="form-control" type="file" name="imagemOcorrencia" id="imagemOcorrencia">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="dataCriacao" class="form-label">Data da criação</label>
                    <input type="date" name="dataCriacao" class="form-control" id="dataCriacao">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="dataAtualizacao" class="form-label">Data da atualização</label>
                    <input type="date" name="dataAtualizacao" class="form-control" id="dataAtualizacao">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="tecnicoResponsavel" class="form-label">Tecnico</label>
                    <input type="text" name="tecnicoResponsavel" class="form-control" id="tecnicoResponsavel" placeholder="Tecnico">
                </div>
                <!-- ==== -->
                <div class="mb-3">
                    <label for="supervisor" class="form-label">Supervisor</label>
                    <input type="text" name="supervisor" class="form-control" id="supervisor" placeholder="Supervisor">
                </div>
                <!-- ==== -->
                <div class="mb-3 text-center">
                    <button type="submit" name="create_card" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>