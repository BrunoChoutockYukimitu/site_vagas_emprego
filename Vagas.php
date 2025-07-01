<?php include "cabecalho.php";
include "includes/banner.php";
$id = $_GET['id'];

?>
<?php
include "conexao.php";

$sql = "select * from vagas_de_emprego order by id";
$resultado = mysqli_query($conexao, $sql);


while ($linha = mysqli_fetch_assoc($resultado)) {
?>
  <div class="container">
    <div class="row mx-5 mt-5">
      <div class="col">
        <img src="<?= $linha['foto']; ?>" class="img-fluid" alt="filme_imagem">
      </div>
      <div class="col">
        <h2 class="text-start"><?= $linha['nome']; ?></h2>
        <h3>Área de trabalho <?= $linha['areaTrabalho']; ?></h3>
        <p><strong>Descrição: </strong> <?= $linha['descricao']; ?> </p>
        <p><strong>Número de vagas:</strong> <?= $linha['vagas']; ?></p>
        <p>Avaliação: ⭐ <?= $linha['avaliacao']; ?>/5</p>
        <p><strong>Contato: </strong> <?= $linha['contato']; ?></p>
        <p><strong>Email: </strong> <?= $linha['email']; ?></p>
      </div>
    </div>
  </div>
<?php
}
mysqli_close($conexao);
?>