<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Exercício 1//
echo "<strong>Exercício 1</strong><br>";
$n1= 5;
$n2= 4;
$n3= 6;
$n4= 8;

$media= ($n1+$n2+$n3+$n4)/4;

    if ($media>=6){
        echo "Aprovado<br>";
    }else{
        echo "Reprovado<br>";
    }
echo "Sua nota é ".$media. "<br>";


//Exercício 2//
echo "<strong>Exercício 2</strong><br>";
$salario= 998;

    if ($salario<=1000){
        $bonus= ($salario*40)/100;
    }else{
         $bonus= ($salario*30)/100;
    }
    $total= $bonus+$salario;
echo $total."<br>";


//Exercício 3//
echo "<strong>Exercício 3</strong><br>";

$media= 7.5;
$frequência= 0.75;

    if ($media>=6){
        $situação=1;
    }else{
        $situação=0;
    }
    if ($frequência>=0.75){
        $situação= $situação + 1;
    }else{
        $situação= $situação + 0;
    }
    if ($situação=2){
        echo"Aprovado<br>";
    }else{
        echo "Reprovado<br>";
    }
    
    
//Exercício 4//
echo "<strong>Exercício 4</strong><br>";

for ($i = 0; $i <= 100; $i=$i+=2){
    echo $i. "\n";
}
echo "<br>";

//Exercício 5//
echo "<strong>Exercício 5</strong><br>";

$n1 = 5;
$n2 = 7;

    if ($n1>$n2){
        echo $n1. "<br>";
    }else{
        echo $n2. "<br>";
    }
    
    
//Exercício 6//
echo "<strong>Exercício 6</strong><br>"; 

$n1 = 5;
$n2 = 7;
$n3 = 9;

    if ($n1>$n2 && $n1>$n3){
        echo $n1. "<br>";
    }
    
    if ($n2>$n1 && $n2>$n3){
        echo $n2. "<br>";
    }
    
    if ($n3>$n2 && $n3>$n1){
        echo $n3. "<br>";
    }
    
    
//Exercício 7//
echo "<strong>Exercício 7</strong><br>"; 

$n1 = 5;
$n2 = 7;

if ($n1=$n2){
    echo "Iguais <br>";
}

if ($n1>$n2){
    echo "O primeiro número é maior <br>";
}

if ($n2>$n1){
    echo "O segundo número é maior <br>";
}


//Exercício 8//
echo "<strong>Exercício 8</strong><br>";

echo "Informe sua idade: \n";
<>
$idade = fgets(STDIN);

if (($idade>=18) && ($idade<=59)){
echo "Pague a entrada inteira\n";}

if (($idade<=18) && ($idade>=60)){
echo "Pague a meia entrada\n";}


//Exercício 9//
echo "<strong>Exercício 9</strong><br>";
"<i>Tabuada do 1 <i>";
for ($i = 0; $i <= 10; $i++){
echo "1 x ".$i ." = ". $i;}

"<i>Tabuada do 2 <i>";
for ($i = 0; $i <= 10; $i=$i+=2){
	for ($j = 0; $j <= 10; $j++){
echo $j." x ".$i ." = ". $i;}}
