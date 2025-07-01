<?php include "includes/cabecalho.php";
$id = $_GET['id'];
?>
<?php
include "conexao.php";



$sql = "select * from empresa where id = " . $id;
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc($resultado)) {
?>
  <div class="container">

    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= $linha['foto']; ?>" class="img-fluid rounded-start" alt="Empresa_imagem">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $linha['nome']; ?></h5>
            <h5 class="card-title">>Avaliação: ⭐<?= $linha['avaliacao']; ?>/5</h5>
            <p class="card-text">Desccrição: <?= $linha['descricao']; ?></p>
            <p class="card-text"><small class="text-body-secondary">Area de trabalho: <?= $linha['areaTrabalho']; ?></small></p>
            <p class="card-text"><small class="text-body-secondary">Números de vagas: <?= $linha['vagas']; ?></small></p>
            <p class="card-text"><small class="text-body-secondary">Contato: +55 <?= $linha['contato']; ?> </small></p>
            <p class="card-text"><small class="text-body-secondary">Email: <?= $linha['email']; ?></small></p>
            <a href="contatar.php?id=<?= $linha['id']; ?>" class="btn btn-outline-danger">Contatar</a>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
}
mysqli_close($conexao);
?>
<?php include "rodape.php"; ?>