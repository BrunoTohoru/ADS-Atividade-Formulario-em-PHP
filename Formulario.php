<?php
//1. conectar o BD
//host, usuário, senha, nome do BD
$conexao = mysqli_connect("localhost", "root", "", "cadastrocliente");

?>

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
                            <li><a href="Formulario.php" class="dropdown-item">Cadastrar Usuário</a></li>
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
        <h3>Cadastro de Usuário: <small class="text-body-secondary">Enviar o cadastro de usuário com banco de dados funcionando, usando o bootstrap.</small>
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

          <div class="col-md-6 mb-3">
            <label for="email">Email </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" required>
            <div class="invalid-feedback">
              Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="senha">Senha </label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="conf_senha">Confirmar Senha </label>
            <input type="password" class="form-control" name="conf_senha" id="conf_senha" placeholder="" required>
          </div>

          <?php
          if (isset($_POST["enviar"])){
            //2. preparar a SQL
            if($_POST["senha"]==$_POST["conf_senha"]){
              $nome = $_POST["nome"];
              $senha = $_POST["senha"];
              $email = $_POST["email"];
              $resultado = mysqli_query($conexao, "select email from usuario where email = '{$email}'");
              if(mysqli_num_rows($resultado)==0){

                $sql = "insert into usuario (nome, email, senha)
                            values ('$nome','$email', '$senha')";
                
                //3. executar no BD e SQL
                mysqli_query($conexao, $sql);
             
                //4. mostrar um mensagem de sucesso
                echo "<div class='alert alert-primary' role='alert'>
                      Cadastro de usuário realizado com sucesso.
                      </div>";
              } else {
                echo "<div class='alert alert-warning' role='alert'>
                E-mail já cadastrado.
                </div>";
              }

            } else {
                echo "<div class='alert alert-warning' role='alert'>
                    As senhas precisam ser idênticas.
                    </div>";
            }
          }  
          ?>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" name="enviar" type="submit">Enviar</button>
        </form>
      </div>
    </main>
</body>

</html>