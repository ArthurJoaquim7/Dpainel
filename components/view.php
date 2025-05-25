<?php
require '../conexao.php';
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
            <a href="../../" class="btn btn-primary">Voltar</a>
            <h2>DETALHES DA EMERGÊNCIAS</h2>

            <?php
            if (isset($_GET['id'])) {
                $card_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM card WHERE id='$card_id'";
                $query = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($query) > 0) {
                    $cards = mysqli_fetch_array($query);
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
                            <img src="/uploads/<?= htmlspecialchars($cards['imagemOcorrencia']) ?>" alt="Imagem da ocorrência" width="200px">
                        </div>
                    </div>
            <?php
                } else {
                    echo '<h5>Card não encontrado</h5>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>