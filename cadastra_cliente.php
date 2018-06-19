<?php
  require_once("classes/SignoWeb.class.php");
  $objSignoWeb = new SignoWeb();

  if(isset($_POST["cadastra_cliente"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $tipo_revista = $_POST["tipo"];
    $quantidade = $_POST["quantidade"];
    $atracoes = $_POST["atracoes"];
    $sugestao = $_POST["sugestao"];
    $imagem_nome = $_FILES["imagem"]["name"];

    move_uploaded_file($_FILES["imagem"]["tmp_name"], "uploads/".$imagem_nome);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

    }

    $inserir = $objSignoWeb->inserir_cliente($nome, $email, $telefone, $endereco, $bairro, $cep, $cidade, $uf, $tipo_revista, $quantidade, $atracoes, $sugestao, $imagem_nome);

    if($inserir == true) {
      ?>
        <script>
          alert("Cadastrado com sucesso!");
          window.location = 'lista_clientes.php';
        </script>
      <?php
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script>
      $('.telefone_com_ddd').mask('(00) 00000-0000');
      $('.cep_formatado').mask('00000-000');
    </script>
    <meta charset="utf-8">
    <title>Cadastro entrega</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel panel-body">
              <form method="post" enctype="multipart/form-data">
                <div class="text-center">
                  <h3>Dados para entrega</h3>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="nome">Nome:</label>
                  <input name="nome" type="text" class="form-control" autofocus required>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="endereco">Endereço:</label>
                  <input name="endereco" type="text" class="form-control" placeholder="Rua/AV xxx, 123">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="bairro">Bairro:</label>
                  <input name="bairro" type="text" class="form-control">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="cep">CEP:</label>
                  <input name="cep" type="text" class="form-control cep_formatado" placeholder="11111-111">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="cidade">Cidade:</label>
                  <input name="cidade" type="text" class="form-control">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="uf">UF:</label>
                  <input name="uf" type="text" class="form-control" placeholder="PR">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="email">E-mail:</label>
                  <input name="email" type="text" class="form-control" placeholder="email@email.com" required>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="telefone">Telefone:</label>
                  <input name="telefone" type="text" class="form-control telefone_com_ddd" placeholder="(11) 1234-1234" required>
                </div>
                <div class="text-center">
                  <h3>Dados para produção</h3>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="tipo_revista">Tipo de revista:</label>
                  <label class="radio-inline"><input type="radio" name="tipo" value= "convite">Convite</label>
                  <label class="radio-inline"><input type="radio" name="tipo" value= "lembranca">Lembrança</label>
                  <label class="radio-inline"><input type="radio" name="tipo" value= "conv_lemb">Convite-Lembrança</label>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="quantidade">Quantidade:</label>
                  <input name="quantidade" type="text" class="form-control">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label" for="atracoes">Atrações do evento:</label>
                  <textarea class="form-control" name="atracoes" rows="5" cols="30"></textarea>
                </div>
                <div class="checkbox text-center">
                  <label><input type="checkbox" name="sugestao" value="1">Aceito sugestões de texto para capa</label>
                </div>
                <div class="form-group label-floating ">
                  <label class="control-label" for="img">Imagem:</label>
                  <input name="imagem" type="file" accept="image/jpeg,image/x-png">
                </div>
                <div class="text-center">
                  <button type="submit" name="cadastra_cliente" class="btn btn-success">Cadastrar</button>
                  <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
</body>
</html>
