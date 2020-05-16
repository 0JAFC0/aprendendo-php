<?php
$categorias = [];

$categorias[0] = "infantil";
$categorias[1] = "adolescente";
$categorias[2] = "adulto";


//print_r($categorias);

$nome = "eduardo";
$idade = 18;

//var_dump($nome);
//var_dump($idade);



if($idade >= 6 && $idade <= 12){
    for($i = 0;$i <= count($categorias);$i ++){
        if($categorias[$i] == "infantil"){
            echo "Ó nadador ", $nome, " compete na categoria: ", $categorias[$i];
        }
    }
    
}
else if($idade >= 13 && $idade <= 18){
    for($i = 0;$i <= count($categorias);$i ++){
        if($categorias[$i] == "adolescente"){
            echo "Ó nadador ", $nome, " compete na categoria: ", $categorias[$i];
        }
    }
}
else {
    for($i = 0;$i <= count($categorias);$i ++){
        if($categorias[$i] == "adulto"){
            echo "Ó nadador ", $nome, " compete na categoria: ", $categorias[$i];
        }
    }
}