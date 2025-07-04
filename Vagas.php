<?PHP
include "includes/cabecalho.php";
include "includes/carrosel.php";
?>
<div class="melhor">
<h2 class="display-5">Empresas com mais vagas</h2>
</div>
<div class="container">
    <div class="row">


        <?php
        include "conexao.php";

        $sql = "select * from empresa order by vagas desc";
        $resultado = mysqli_query($conexao, $sql);


        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>

            <div class="col-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $linha['foto']; ?>" class="card-img-top img-formatada-lista">
                    <div class="card-body">
                        <h5 class="card-title"><?= $linha['nome']; ?></h5>
                        <p><strong>Números de vagas: </strong> <?= $linha['vagas']; ?></p>
                        <p class="card-text preco"><strong>Avaliação:</strong> ⭐<?= $linha['avaliacao']; ?>/5</p>
                        <a href="umaEmpresa.php?id=<?= $linha['id']; ?>" class="btn btn-outline-danger">Ver Detalhes</a>
                    </div>
                </div>
            </div>

        <?php
        }

        mysqli_close($conexao);
        ?>
    </div>
</div>
<?php
include "rodape.php"
?>