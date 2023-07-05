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
        <h3>Atividade 02: <small class="text-body-secondary">Crie um formulário web que receba o nome de um estudante e três notas. Calcule a média aritmética e a classificação do estudante. A classificação é dada conforme a tabela abaixo:
            <br>
            <br>Média Classificação
            <br>9-10 A
            <br>8-8,9 B
            <br>7-7,9 C
            <br>6-6,9 D
            <br>0-5,9 I
            <br><hr></small>
        </h3>
        <form method="post">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="Nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="Nome" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="valor1">1ª nota</label>
              <input type="number" step="0.1" min=0 max=10 class="form-control" name="valor1" id="valor1" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um valor válido.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="valor2">2ª nota</label>
              <input type="number" step="0.1" min=0 max=10 class="form-control" name="valor2" id="valor2" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um valor válido.
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <label for="valor3">3ª nota</label>
              <input type="number" step="0.1" min=0 max=10 class="form-control" name="valor3" id="valor3" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um valor válido.
              </div>
            </div>

          </div>

          <?php
          if (isset($_POST["media"])){
              function media($v1, $v2, $v3){
                return ($v1 + $v2 + $v3)/3;
              }
              $nome = $_POST["nome"];
              $v1 = $_POST["valor1"];
              $v2 = $_POST["valor2"];
              $v3 = $_POST["valor3"];
              $media = media($v1, $v2, $v3);
              $media = number_format($media, 2, '.', "");
              if($media >= 9){
                echo "<div class='alert alert-success' role='alert'>
                <h4 class='alert-heading'>Muito Bem! ". $nome ."</h4>
                <p>Sua media foi ". $media."</p>
                <hr>
                <p class='mb-0'>CLASSIFICAÇÃO A.</p>
                </div>";
              } else if($media >= 8){
                echo "<div class='alert alert-primary' role='alert'>
                <h4 class='alert-heading'>Ótimo! ". $nome ."</h4>
                <p>Sua media foi ". $media."</p>
                <hr>
                <p class='mb-0'>CLASSIFICAÇÃO B.</p>
                </div>";
              } else if($media >= 7){
                echo "<div class='alert alert-info' role='alert'>
                <h4 class='alert-heading'>Pode molhorar! ". $nome ."</h4>
                <p>Sua media foi ". $media."</p>
                <hr>
                <p class='mb-0'>CLASSIFICAÇÃO C.</p>
                </div>";
              } else if($media >= 6){
                echo "<div class='alert alert-warning' role='alert'>
                <h4 class='alert-heading'>Cuidado! ". $nome ."</h4>
                <p>Sua media foi ". $media."</p>
                <hr>
                <p class='mb-0'>CLASSIFICAÇÃO D.</p>
                </div>";
              } else {
                echo "<div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Necessita Atenção! ". $nome ."</h4>
                <p>Sua media foi ". $media."</p>
                <hr>
                <p class='mb-0'>CLASSIFICAÇÃO I.</p>
                </div>";
              }
            }  
          ?>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" name="media" type="submit">Calcular</button>
        </form>
      </div>
    </main>
</body>

</html>