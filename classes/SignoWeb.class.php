<?php
require_once("MySQL.class.php");

class SignoWeb {
  private $mysql;

  public function __construct() {
    $this->mysql = new MySQL();
  }

  public function inserir_cliente($nome, $email, $telefone, $endereco, $bairro, $cep, $cidade, $uf, $tipo_revista, $quantidade, $atracoes, $sugestao, $imagem_nome) {
    $sql = "INSERT INTO signo_web.cliente (nome_cliente, email, telefone, endereco, bairro, cep, cidade, uf, tipo_revista, quantidade, atracoes, sugestao, imagem) VALUES ('".$nome."', '".$email."', '".$telefone."', '".$endereco."', '".$bairro."', '".$cep."', '".$cidade."', '".$uf."', '".$tipo_revista."', '".$quantidade."', '".$atracoes."', '".$sugestao."', '".$imagem_nome."')";
    return $this->mysql->exec_query($sql);
  }

  public function obter_clientes() {
    $sql = "SELECT idcliente, email, nome_cliente, telefone FROM signo_web.cliente WHERE isDeleted != 1";
    return $this->mysql->select_query($sql);
  }

  public function atualizar_cliente($idcliente, $nome, $email, $telefone){
    $sql = "UPDATE Signo_web.cliente SET nome_cliente = '".$nome."', email = '".$email."', telefone = '".$telefone."' WHERE idcliente = '".$idcliente."'";
    return $this->mysql->exec_query($sql);
  }

  public function busca_id($idcliente){
    $sql = "SELECT idcliente, email, nome_cliente, telefone FROM signo_web.cliente WHERE idcliente = '".$idcliente."'";
    return $this->mysql->exec_query($sql);
  }
}
?>
