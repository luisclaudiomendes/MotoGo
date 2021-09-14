<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Consulta de Motoboy - MotoGo</title>

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
    <!-- Início Cabeçalho -->
    <nav class="navbar navbar-expand-sm navbar-light pt-4 pb-4">
      <div class="container">

        <a href="index.html" class="navbar-brand d-flex align-items-end">
          <!-- Início Logo -->
          <h1 class=" d-flex align-items-end mr-2" style="color: #036970;">
            <span class="mr-2">MotoGo</span>
            <img style="width: 60px;" src="img/logo.png" alt="">
          </h1>
        </a><!-- Fim Logo -->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <!-- Início Botão Menu -->
          <span class="navbar-toggler-icon"></span>
        </button><!-- Fim Botão Menu -->

        <div class="collapse navbar-collapse" id="nav-principal">
          <!-- Início Itens Menu -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link " href="index.html">Página Inicial</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="empresas.html">Empresas</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link active" href="motoboy.html">Motoboy</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="quem_somos.html">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info ml-4" href="login.html">Login</a>
            </li>
          </ul>
        </div><!-- Início Itens Menu -->

      </div>
    </nav>
  </header><!-- Fim Cabeçalho -->

  <div class="mb-5 pt-5 pb-5 bg-dark">
    <!-- Início Título -->
    <div class="container">
      <h2 class="display-4 text-light">Consulta do Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Motoboy -->

    <label for="motoboyEscolhido" class="form-label"> Escolha qual motoboy deseja consultar no banco de dados: </label>
    <select class="custom-select" name="motoboyEscolhido" id="motoboyEscolhido">

      <option value="null" selected>-- Selecione um motoboy --</option>

      <?php
      require_once "../model/motoboy.php";
      $motoboys = selecionarTodosMotoboys();
      foreach ($motoboys as $a) {
        echo "<option value = $a->id_motoboy>" . $a->nome_completo . "</option>";
      }
      ?>
      <select><br>
        <button class="btn btn-info mt-5" type="submit">Consultar</button>

  </form><!-- Fim Formulário Motoboy -->


  <?php
  if ($_POST["motoboyEscolhido"] !== "null") {
    require_once "../model/motoboy.php";
    $motoboy = selecionarMotoboyId($_POST["motoboyEscolhido"]);

    echo '<div class="container mt-5">';
    echo '<table class="table table-bordered table-hover" >';
    echo '<tr class="text-white" style="background: #036970">';
    echo '<th>Nome Completo</th>';
    echo '<th>CPF</th>';
    echo '<th>CNH</th>';
    echo '<th>Telefone</th>';
    echo '<th>Email</th>';
    echo '<th>Endereço</th>';
    echo '<th>Placa da Moto</th>';
    echo '<th>Cor da Moto</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> ' . $motoboy->nome_completo . '</td>';
    echo '<td>' . $motoboy->cpf . '</td>';
    echo '<td>' . $motoboy->cnh . '</td>';
    echo '<td>' . $motoboy->telefone . '</td>';
    echo '<td>' . $motoboy->email . '</td>';
    echo '<td>' . $motoboy->endereco . '</td>';
    echo '<td>' . $motoboy->placa_da_moto . '</td>';
    echo '<td>' . $motoboy->cor_da_moto . '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
  }
  ?>

  <footer class="mt-4 pt-5 pb-5 bg-333333">
    <!-- Início Rodapé -->
    <div class="container">
      <div class="text-center text-light">
        Copyright © 2021 | <span style="color: #ffcc43;">MotoGo</span>
      </div>
    </div>
  </footer><!-- Fim Rodapé -->

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