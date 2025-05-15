<?php

$nome_aluno = $_POST['nome_aluno'];
$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];

$media = ($nota01+$nota02+$nota03)/3;

echo "aluno: ".$nome_aluno;
echo "<br>";
echo "sua média é: ".$media;

if($media>5){
    echo"Aprovado"
}
elsef($media == 5) {
    echo"Reprovado";
}
else{
    echo"Recuperação";
}

?>