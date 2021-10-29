<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Atualizar Empresa - MotoGo</title>

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
    <header>
      <?php include 'menu.php' ?>
    </header><!-- Fim Cabeçalho -->

    <div class="mb-5 pt-5 pb-5 bg-dark">
      <!-- Início Título -->
      <div class="container">
        <h2 class="display-4 text-light">Atualizar Empresas</h2>
      </div>
    </div><!-- Fim Título -->

    <form class="container form-group" method="POST" action="#">
      <!-- Início Formulário Empresas -->

      <div class="mt-2">
        <label for="empresaEscolhida" class="form-label"> Escolha qual empresa deseja atualizar: </label>
        <select class="custom-select" id="empresaEscolhida" name="empresaEscolhida">
          <option value="null" selected>-- Selecione uma empresa --</option>

          <?php
          require_once "../model/empresa.php";
          $empresas = selecionarTodasEmpresas();
          foreach ($empresas as $a) {
            echo "<option value = $a->id_empresa>" . $a->nome . "</option>";
          }
          ?>
        </select><br>
      </div>

      <button type="submit" class="btn btn-info mb-5 mt-5">Selecionar</button>
    </form>

    <?php
    if (isset($_POST["empresaEscolhida"])) {
      require_once "../model/empresa.php";
      $empresa = selecionarEmpresaId($_POST["empresaEscolhida"]);

    ?>

      <form class="container form-group" method="POST" action="php/empresa/atualizar_empresa.php">
        <!-- Início Formulário Empresa -->


        <div class="row">
          <div class="col-lg-6 mt-2">
            <input class="form-control" type="hidden" name="idOculto" id="idOculto" value="<?php echo $empresa->id_empresa; ?>">
            <label for="nome">Nome da empresa</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $empresa->nome; ?>">
          </div>

          <div class="col-lg-6 mt-2">
            <label for="endereco">Endereço</label>
            <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $empresa->endereco; ?>">
          </div>
        </div>

        <div class=" mt-2">
          <label for="telefone">Telefone</label>
          <input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $empresa->telefone; ?>">
        </div>

        <div class=" mt-2">
          <label for="cnpj">CNPJ</label>
          <input class="form-control" type="text" name="cnpj" id="cnpj" value="<?php echo $empresa->cnpj; ?>">
        </div>

        <div class="mt-2">
          <label for="descricao">Descrição</label>
          <textarea rows="5" cols="30" class="form-control" type="text" name="descricao" id="descricao"><?php echo $empresa->descricao; ?></textarea>
        </div>

        <button class="btn btn-info mb-5 mt-5" type="submit">Atualizar</button>

      </form><!-- Fim Formulário Empresa -->

    <?php
    }
    ?>

    <footer class="pt-5 pb-5 bg-333333 ">
      <!-- Início Rodapé -->
      <div class="container">
        <div class="text-center text-light">
          Copyright © 2021 | MotoGo
        </div>
      </div>
    </footer><!-- Fim Rodapé -->

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