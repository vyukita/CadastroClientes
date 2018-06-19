<?php
require_once("classes/SignoWeb.class.php");
$objSignoWeb = new SignoWeb();
$clientes = $objSignoWeb->obter_clientes();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <meta charset="utf-8">
    <title>Lista de clientes</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                  <tr>
                    <td><?php echo $cliente['idcliente']; ?></td>
                    <td><?php echo $cliente['nome_cliente']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['telefone']; ?></td>

                    <td class="actions">
                      <a class="btn btn-default" href="edita_cliente.php?id=<?php echo $cliente['idcliente']; ?>">Editar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="col-sm-12">
            <a class="btn btn-primary" href="index.php">Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
