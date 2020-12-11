<?php
session_start();
include "conexao.php";

if(empty($_POST['rfid'])){
   header('Location: login.html');
  exit();
}

//Processo de login

$rfid = $_POST['rfid'];

$sql = "SELECT nome, rfid, pont FROM cadastro WHERE rfid='$rfid'";
$result = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_array($result, MYSQLI_ASSOC);
$array = implode("/", $dados); 
$dados2 = explode("/", $array);
$nome = $dados2[0];
$rfid = $dados2[1];
$pont = $dados2[2];

$row = mysqli_num_rows($result);
if($row == 1){
    
    $_SESSION['nome'] = $nome;
    $_SESSION['rfid'] = $rfid;
    $_SESSION['pont'] = $pont;

    header('Location: feito.php');
    exit();
}

else{
    header('Location: loginerror.html');
    exit();
}

connection_aborted();
?>