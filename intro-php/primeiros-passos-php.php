<?php 
echo "Hello world!";

#VARIÁVEIS
$idade = 26;
echo $idade;
echo "\n";

#OPERAÇÕES
echo $idade + 10;echo "\n";
echo $idade - 10;echo "\n";
echo $idade * 10;echo "\n";
echo $idade / 10;echo "\n";
echo $idade ** 10;echo "\n";
echo $idade % 10;echo "\n";

#TIPOS
$idade = 26 ;
$salario = 1000.30;
$texto = "Olá mundo!";
echo gettype($idade);echo "\n";
echo gettype($salario);echo "\n";
echo gettype($texto);echo "\n";

#STRINGS
echo 'Minha idade é ' . $idade . ' anos.';echo "\n";
echo "Minha idade é $idade anos.";echo "\n";
echo "Quebrando linha" . PHP_EOL;
echo "Olá mundo";