<?php

//echo "Bonjour";
/*
print("Bonsoir M.");


$mavariable =  0;

$prenom = "Mamadou";

echo $prenom;


echo "Bonsoir M. ".$prenom;

echo "Comment allez-vous M. {$prenom}";
*/

const PI = 3.14 ;
define("TVA",18);

//echo "La valeur de PI est de : ".PI." Le TVA est de ".TVA." en republique de guinée" ;


//int, float, double, bool, String 


//Arthi /logi /comparai /



//ar (+ - * / % )

// ||  && OR AND ! 

// < > <= >=  == != === 


//echo 3%3;


//if(cond){expression}
$n = 4;
$m = 5;
/*
if($n == $m){
    echo "n est == a m";
}elseif($n>$m){
    echo "n est > a m";
}elseif($n<$m){
    echo "n est < a m";
}else{
    echo "les deux chiffres diff";
}*/
//switch(){case 1 [] default }
/*
switch($n){
    case 1:
        echo "Lundi"; break;
    case 2: 
        echo "Mardi"; break;
    case 3:
        echo "Mercredi"; break;
    case 4: 
        echo "Jeudi"; break;
    case 5:
        echo "Vendredi"; break;
    case 6:
        echo "Samedi"; break;
    case 7:
        echo "Dimanche"; break;
    default:
        echo "CSNP";
}
*/
//for(inti;condi;incre)
/*
init
for(;condi;){
increm
}
*/
$p=0;
$h=5;
/*
for($i=0;$i<11;$i++){
    echo $h."*".$i."=".$h*$i."<br>";
}*/

//while(cond){+}

$i = 0;
/*
while($i<11){
   
   echo $h."*".$i."=".$h*$i."<br>"; 
    $i++;
}*/
/*
do{
    echo $h."*".$i."=".$h*$i."<br>"; 
    $i++;
}while($i<11);
*/

function calcul(){
    return 1+1;
    //echo 1+1;
}

//echo calcul()/2;

function sommes($n,$m){
    return $n+$m;
}

/*
$nn = sommes(4,5);


echo $nn;

echo "<br>";

echo $nn/2;
*/

function age(int $anne, int $annee_encoure){
    return $annee_encoure-$anne;
}

echo "Votre age est : ".age(1995,2023);










?>