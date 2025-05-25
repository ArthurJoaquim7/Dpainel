<?php
require_once '../conexao.php';
require_once '../acoes.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dpainel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="cont" style="flex-direction: column; gap: 20px;">
        <div class="btnBack">
            <a href="../index.php" class="btn btn-primary">Voltar</a>
        </div>
        <div class="mb-3">
            <h1 class="text-center">Cadastro de Ocorrências</h1>
        </div>
        <div class="flex" style="display: flex; gap: 50px; align-items: center;">
            <form action="../acoes.php" method="post" enctype="multipart/form-data" class="form">
                <div class="mb-3">
                    <div class="flex" style="display: flex; gap: 5px;">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <select class="form-select" name="titulo" id="titulo" aria-label="Default select example" required>
                                <option selected>Título</option>
                                <option value="Rompimento de fibras">Rompimento de fibras</option>
                                <option value="Reparo emergencial">Reparo emergencial</option>
                                <option value="Manutenção">Manutenção</option>
                            </select>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status" aria-label="Default select example" required>
                                <option selected>Status</option>
                                <option value="Em andamento">Em andamento</option>
                                <option value="Resolvido">Resolvido</option>
                                <option value="Aguardando energia">Aguardando energia</option>
                                <option value="Em verificação">Em verificação</option>
                            </select>
                        </div>
                    </div>
                    <!-- ==== -->
                    <div class="flex" style="display: flex; gap: 5px;">
                        <div class="mb-3">
                            <label for="descricaoPublica" class="form-label">Descrição pública</label>
                            <input type="text" name="descricaoPublica" class="form-control" id="descricaoPublica" placeholder="Descrição pública" required>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="descricaoInterna" class="form-label">Descrição Privada</label>
                            <input type="text" name="descricaoInterna" class="form-control" id="descricaoInterna" placeholder="Descrição Privada">
                        </div>
                    </div>
                    <!-- ==== -->
                    <div class="flex" style="display: flex; gap: 5px;">
                        <div class="mb-3">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua" required>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <select class="form-select" name="cidade" id="cidade" aria-label="Default select example" required>
                                <option selected>Cidade</option>
                                <option value="Vitória de Santo Antão">Vitória de Santo Antão</option>
                                <option value="Carpina">Carpina</option>
                                <option value="Sairé">Sairé</option>
                                <option value="Recife">Recife</option>
                            </select>
                        </div>
                    </div>
                    <!-- ==== -->
                    <div class="flex" style="display: flex; gap: 5px;">
                        <div class="mb-3">
                            <label for="projeto" class="form-label">Projeto</label>
                            <input type="text" name="projeto" class="form-control" id="projeto" placeholder="Projeto">
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="prazoEstimado" class="form-label">Prazo estimado</label>
                            <input type="text" name="prazoEstimado" class="form-control" id="prazoEstimado" placeholder="Prazo estimado" required>
                        </div>
                    </div>
                    <!-- ==== -->
                    <div class="mb-3">
                        <label for="imagemOcorrencia" class="form-label">Imagem da ocorrência</label>
                        <input class="form-control" type="file" name="imagemOcorrencia" id="imagemOcorrencia" required>
                    </div>
                    <!-- ==== -->
                    <!-- <div class="mb-3">
                    <label for="dataAtualizacao" class="form-label">Data da atualização</label>
                    <input type="date" name="dataAtualizacao" class="form-control" id="dataAtualizacao">
                </div> -->
                    <!-- ==== -->
                    <div class="flex" style="display: flex; gap: 5px;">
                        <div class="mb-3">
                            <label for="dataCriacao" class="form-label">Data da criação</label>
                            <input type="date" name="dataCriacao" class="form-control" id="dataCriacao" required>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="tecnicoResponsavel" class="form-label">Técnico responsável</label>
                            <select class="form-select" name="tecnicoResponsavel" id="tecnicoResponsavel" aria-label="Default select example" required>
                                <option selected>Técnico</option>
                                <option value="José Maria">José Maria</option>
                                <option value="Augusto Cesar">Augusto Cesar</option>
                                <option value="Ricardo Amorim">Ricardo Amorim</option>
                                <option value="Cabrito Neves">Cabrito Neves</option>
                            </select>
                        </div>
                        <!-- ==== -->
                        <div class="mb-3">
                            <label for="supervisor" class="form-label">Supervisor da área</label>
                            <select class="form-select" name="supervisor" id="supervisor" aria-label="Default select example" required>
                                <option selected>Supervisor</option>
                                <option value="Sergio">Sergio</option>
                                <option value="Julius">Julius</option>
                                <option value="Cristiano">Cristiano</option>
                                <option value="Marcos">Marcos</option>
                            </select>
                        </div>
                    </div>
                    <!-- ==== -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="create_card" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>
            <div class="right">
                <h5>Ferramentas usadas</h5>
                <div class="grid">
                    <img src="../img/php.png" alt="php" width="64px">
                    <img src="../img/bootstrap.png" alt="bootstrap" width="64px">
                    <img src="../img/js.png" alt="js" width="64px">
                    <img src="../img/mysql.png" alt="mysql" width="64px">
                </div>
                <h5>Gerenciamento e protótipo</h5>
                <div class="grid">
                    <img src="../img/figma.png" alt="figma" width="64px">
                    <img src="../img/trello.png" alt="trello" style="border-radius: 5px;" width="100px">
                </div>
            </div>
        </div>
        <!-- <img src="../img/wave.png" alt="wave" class="wave"> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>