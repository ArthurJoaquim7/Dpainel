<?php
require 'conexao.php';
// require '/PJC/Dpainel/conexao.php'
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
        <div class="main">
            <div class="left"></div>
            <div class="right">
                <div class="top">
                    <a href="/components/form.php" class="btn btn-primary">Criar um CARD</a>
                    <h2>EMERGÊNCIAS ATIVAS</h2>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cidade
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bairro
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Status
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </div>
                    <h3>OCORRÊNCIAS</h3>
                </div>
                <div class="bottom">
                    <?php
                    $sql = 'SELECT * FROM card';
                    $card = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($card) > 0) {
                        foreach ($card as $cards) {
                    ?>
                            <div class="card" style="width: 28rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $cards['cidade'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $cards['bairro'] ?></h6>
                                    <p class="card-text"><?= $cards['descricaoPublica'] ?></p>
                                    <p class="card-text">Prazo estimado: <?= $cards['prazoEstimado'] ?></p>
                                    <div class="corner">
                                        <span class="badge text-bg-primary"><?= $cards['status'] ?></span>
                                    </div>
                                    <a href="/components/view.php?id=<?= $cards['id'] ?>" class="btn btn-secondary">Detalhes</a>
                                    <button type="submit" name="delete_card" value="<?=$cards['id']?>" class="btn btn-danger">Deletar</button>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<h5>Cadastre um novo Card</h5>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>