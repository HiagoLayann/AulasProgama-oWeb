<?php


$preco = 20;

if($preco >=20 ){
    echo"Nao Posso comprar";
}else{
    echo'Posso comprar!';
}




$nota = 9.5 ;

echo '<br>';

if($nota >=7 && $nota <=10){
    echo 'aprovado';
}else if($nota >= 4){
    echo'recuperacao';
}else{
    echo'reprovado';
}


echo'<br>';
$contador = 0;
while($contador <= 10){
    echo $contador++;
}



for($i = 10; $i<=50; $i++ ){
    echo'<br>';
    echo$i;
}



?>