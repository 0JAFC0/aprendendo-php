<?php
$categorias = [];

$categorias[0] = "infantil";
$categorias[1] = "adolescente";
$categorias[2] = "adulto";


//print_r($categorias);

$nome = $_POST["nome"];
$idade = $_POST["idade"];

// var_dump($nome);
// var_dump($idade);

if(empty($nome)){
    echo "O campo nome não pode ser vazio.";
    return;
}
if(strlen($nome) < 3){
    echo "seu nome não pode ter menos de 3 caracteres.";
    return;
}
if(strlen($nome) > 40){
    echo "Nome muito extenso.";
    return;
}
if(!is_numeric($idade)){
    echo "A idade digitada não é valida.";
    return;
}

if($idade >= 6 && $idade <= 12){
    echo "Ó nadador ", $nome, " compete na categoria: infantil";
}
else if($idade >= 13 && $idade <= 18){
    echo "Ó nadador ", $nome, " compete na categoria: adolescente";
}
else {
    echo "Ó nadador ", $nome, " compete na categoria: adulto";
}