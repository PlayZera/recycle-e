<?php

if(isset($_POST['cep']) && !empty($_POST['cep'])){

$nome  = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$rfid = addslashes($_POST['rfid']);
$cep = addslashes($_POST['cep']);

}
?>