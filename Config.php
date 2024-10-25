<?php

$conn = new mysqLi("localhost", "root", "", "coleta de dados");

if($conn ->connect_error){
    die("Falha na comunicação com o banco de dados: ". $conn ->connect_error);} 
?>