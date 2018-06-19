<?php
require_once("classes/SignoWeb.class.php");
$objSignoWeb = new SignoWeb();

$id = $_GET['id'];
$busca = $objSignoWeb->busca_id($id);

if(isset($_POST['altera_cliente'])){
  $idcliente = $id;
  $nome = $_POST["nome_cliente"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];

  $clientes = $objSignoWeb->atualizar_cliente($idcliente, $nome, $email, $telefone);
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
  </script>
  <meta charset="utf-8">
  <title>Editar cliente</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-5">
        <div class="panel panel-default">
          <div class="panel panel-body">
            <form method="post" action="edita_cliente.php?id=<?php $busca['id'];?>">
              <div class="text-center">
                <h3>Alterar cliente</h3>
              </div>

              <div class="form-group label-floating">
              	<label class="control-label" for="nome_cliente">Nome</label>
              	<input id="nome_cliente" type="text" class="form-control" name="nome_cliente" value="<?php echo $busca[0]["nome_cliente"];?>">
              </div>

              <div class="form-group label-floating">
              	<label class="control-label" for="email">Email</label>
              	<input id="email" type="text" class="form-control" name="email" value="<?php echo $busca["email"];?>">
              </div>

              <div class="form-group label-floating">
              	<label class="control-label" for="telefone">Telefone</label>
              	<input id="telefone" type="text" class="form-control telefone_com_ddd" name="telefone" value="<?php echo $busca[0]["telefone"];?>">
              </div>

              <div class="text-center">
                <button type="submit" name="altera_cliente" class="btn btn-success">Salvar alterações</button>
                <a href="lista_clientes.php" class="btn btn-danger">Cancelar</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
