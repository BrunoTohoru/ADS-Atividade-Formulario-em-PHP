<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                      <div class="dropdown text-end">
                        <a href="#" class="nav-link px-2 link-body-emphasis dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Atividades</a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="Atividade01.php">Atividade 01</a></li>
                            <li><a class="dropdown-item" href="Atividade02.php">Atividade 02</a></li>
                            <li><a class="dropdown-item" href="Atividade03.php">Atividade 03</a></li>
                            <li><a class="dropdown-item" href="Atividade04.php">Atividade 04</a></li>
                            <li><a class="dropdown-item" href="Atividade05.php">Atividade 05</a></li>
                            <li><a class="dropdown-item" href="Atividade06.php">Atividade 06</a></li>
                            <li><a class="dropdown-item" href="Atividade07.php">Atividade 07</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="Formulario.php" class="nav-link px-2 link-secondary">Cadastro Usuário</a></li>
                        </ul>
                      </div>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Instituto_Federal_do_Paran%C3%A1_-_Marca_Vertical_2015.svg/1200px-Instituto_Federal_do_Paran%C3%A1_-_Marca_Vertical_2015.svg.png" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#">Sem Função 01</a></li>
                            <li><a class="dropdown-item" href="#">Sem Função 02</a></li>
                            <li><a class="dropdown-item" href="#">Sem Função 03</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sem Função 04</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
        <h3>Atividade 01: <small class="text-body-secondary">Crie um formulário web que receba 2 valores e mostre a soma desses valores.</small>
        </h3>
        <form method="post">
          <div class="row">
            
            <div class="col-md-6 mb-3">
              <label for="valor1">1º valor</label>
              <input type="number" step="any" class="form-control" name="valor1" id="valor1" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um valor válido.
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="valor2">2º valor</label>
              <input type="number" step="any" class="form-control" name="valor2" id="valor2" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um valor válido.
              </div>
            </div>
          </div>

          <?php
          if (isset($_POST["somar"])){
              function somar($v1, $v2){
                return $v1 + $v2;
              }
              $v1 = $_POST["valor1"];
              $v2 = $_POST["valor2"];

              $mensagem = "A soma dos valores é: " . somar($v1, $v2);

              echo "<div class='alert alert-light' role='alert'>"
                    . $mensagem .
                    "</div>";
            }  
          ?>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" name="somar" type="submit">Somar</button>
        </form>
      </div>
    </main>
</body>

</html>