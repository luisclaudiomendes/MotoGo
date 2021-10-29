<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Consulta de Empresas - MotoGo</title>

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
      <h2 class="display-4 text-light">Consulta de Empresas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Empresas -->

    <label for="empresaEscolhida" class="form-label"> Escolha qual empresa deseja consultar: </label>
    <select class="custom-select" name="empresaEscolhida" id="empresaEscolhida">

      <option value="null" selected>-- Selecione uma empresa --</option>


      <?php
      require_once "../model/empresa.php";
      $empresas = selecionarTodasEmpresas();
      foreach ($empresas as $a) {
        echo "<option value = $a->id_empresa>" . $a->nome . "</option>";
      }
      ?>
      <select><br>
        <button class="btn btn-info mt-5" type="submit">Consultar</button>

  </form><!-- Fim Formulário Empresas -->

  <?php
  if (!empty($_POST["empresaEscolhida"])) {
    require_once "../model/empresa.php";
    $empresa = selecionarEmpresaId($_POST["empresaEscolhida"]);

    echo '<div class="container mt-5">';
    echo '<table class="table table-bordered table-hover" >';
    echo '<tr class="text-white" style="background: #036970">';
    echo '<th>Nome</th>';
    echo '<th>Endereço</th>';
    echo '<th>Telefone</th>';
    echo '<th>CNPJ</th>';
    echo '<th>Descrição</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> ' . $empresa->nome . '</td>';
    echo '<td>' . $empresa->endereco . '</td>';
    echo '<td>' . $empresa->telefone . '</td>';
    echo '<td>' . $empresa->cnpj . '</td>';
    echo '<td>' . $empresa->descricao . '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
  }
  ?>

  <div>
    <?php include 'footer.php' ?>
  </div>

  <!-- JavaSript -->
  <script src="jsgeral.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>