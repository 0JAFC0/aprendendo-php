<?php
session_start();
//print_r($categorias);

$nome = $_POST["nome"];
$idade = $_POST["idade"];

//  var_dump($nome);
//  var_dump($idade);

if(empty($nome)){
    $_SESSION["mensagem-de-erro"] = "O campo nome não pode ser vazio, por favor, digite novamente.";
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3){
    $_SESSION["mensagem-de-erro"] = "seu nome não pode ter menos de 3 caracteres, por favor digite novamente.";
    header("location: index.php");
    return;
}
else if(strlen($nome) > 40){
    $_SESSION["mensagem-de-erro"] = "Nome não pode ter mais de 40 caracteres, por favor digite novamente.";
    header("location: index.php");
    return;
}
if(!is_numeric($idade)){
    $_SESSION["mensagem-de-erro"] = "A idade digitada não é valida, por favor digite novamente.";
    header("location: index.php");
    return;
}

if($idade >= 6 && $idade <= 12){
    $_SESSION["mensagem-de-sucesso"] = "Ó nadador $nome compete na categoria: infantil.";
    header("location:index.php");
    return;
}
else if($idade >= 13 && $idade <= 18){
    $_SESSION["mensagem-de-sucesso"] = "Ó nadador $nome compete na categoria: adolescente.";
    header("location:index.php");
    return;
}
else {
    $_SESSION["mensagem-de-sucesso"] = "Ó nadador $nome compete na categoria: adulto.";
    header("location:index.php");
    return;    
}