<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Remover Motoboy - MotoGo</title>

  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Estilo Customizado -->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
  <header>
    <?php include 'menu.php' ?>
  </header><!-- Fim Cabeçalho -->

  <div class="mb-5 pt-5 pb-5 bg-dark">
    <!-- Início Título -->
    <div class="container">
      <h2 class="display-4 text-light">Remover do Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Motoboy -->

    <label for="motoboyEscolhido" class="form-label"> Escolha qual motoboy deseja excluir: </label>
    <select class="custom-select" name="motoboyEscolhido" id="motoboyEscolhido">

      <option value="null" selected>-- Selecione um motoboy --</option>

      <?php
      require_once "../model/motoboy.php";
      $motoboys = selecionarTodosMotoboys();
      foreach ($motoboys as $a) {
        echo "<option value = $a->id_motoboy>" . $a->nome_completo . "</option>";
      }
      ?>
    </select><br>
    <button class="btn btn-info mt-5" type="submit">Remover</button>

  </form><!-- Fim Formulário Motoboy -->

  <?php
  if (isset($_POST["motoboyEscolhido"])) {
    require_once "../model/motoboy.php";
    excluirMotoboy($_POST["motoboyEscolhido"]);
    echo '<div class="container mt-5 mb-5">';
    echo '<p class="text-success">Motoboy excluído do banco de dados com sucesso! <i class="fas fa-check" class="bg-success"></i> <p> ';
    echo '</div>';
    //echo "Você será redirecionado para a página de início. <br>";
    //header("refresh: 5; url = ../../index.html");
  }
  ?>

  <div>
    <?php include 'footer.php' ?>
  </div>

  <!-- JavaSript -->
  <script src="jsgeral.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>