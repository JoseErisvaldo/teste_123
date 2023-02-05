<?php


// Iniciando a session_start para validação de cadastro na funçao IF

//session_start();



// Conexao

include_once("conexao.php");


//chamando os inputs

$lote = filter_input(INPUT_POST, 'lote', FILTER_SANITIZE_STRING);



//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

// Inserido os dados no banco
$result_usuario = "INSERT INTO estoque_ly (lote) VALUES ('$lote')";

//conectando
$resultado_usuario = mysqli_query($conn, $result_usuario);

// Verificndo se o campos foi preenchido e retornando para a tela de cadastro


?>
