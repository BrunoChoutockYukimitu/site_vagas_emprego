<?php include "includes/cabecalho.php";
$id = $_GET['id'];
?>
<?php
include "conexao.php";



$sql = "select * from empresa where id = " . $id;
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc($resultado)) {
?>
  <div class="container" >
    <div class="row mx-5 mt-5">
      <div class="col">
      <img src="<?= $linha['foto']; ?>" class="img-fluid" alt="Empresa_imagem">
      </div>
      <div class="col">
        <h2 class="text-start"><?= $linha['nome']; ?></h2>
      <p>Avaliação: ⭐<?= $linha['avaliacao']; ?>/5</p>
      <p><strong>Desccrição: </strong> <?= $linha['descricao']; ?></p>
      <p><strong>Area de trabalho: </strong> <?= $linha['areaTrabalho']; ?></p>
      <p><strong>Números de vagas: </strong> <?= $linha['vagas']; ?></p>
      <p><strong>Contato: </strong>+55 <?= $linha['contato']; ?> </p>
      <p><strong>Email: </strong> <?= $linha['email']; ?></p>
      </div>
    </div>
  </div>
<?php
}
mysqli_close($conexao);
?>
<?php include "rodape.php"; ?>