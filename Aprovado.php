<?php
$nome= "Lucas Ferreira da Silva";
$Ra=  321105397;
$nota1=10;
$nota2=9;
$nota3=8;
$media= ($nota1+$nota2+$nota3)/3;

echo  "Nome : $nome "."<br>". "R.A : " . $Ra ."<br>". "Nota 1 : ". $nota1 ."<br>". "Nota 2 : " .$nota2 ."<br>"."Nota 3 :". $nota3 ."<br>". "Média Final : " . $media . "<br>";

if($media>=6){
    echo "Você Foi Aprovado! " . "$nome .";
} else {
    echo " Você Foi Reprovado! " . "$nome .";
}