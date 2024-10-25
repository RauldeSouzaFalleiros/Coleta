<?php 
require_once "Config.php";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$serviço = $_POST["serviço"];
$endereço = $_POST["endereço"];
$data_atual = date("d/m/Y");
$hora_atual = date("H:i:s");


$smtp = $conn -> prepare("INSERT INTO dados(nome, cpf, endereço, serviço, data, hora) VALUES(?,?,?,?,?,?)");
$smtp -> bind_param("ssssss", $nome, $cpf, $endereço, $serviço, $data_atual, $hora_atual) ;

if($smtp->execute()){
    echo"Dados coletados com sucesso"; 
}else{
    echo"Erro na coleta:".$smtp->error;
}

$smtp->close();
$conn->close();

?> 