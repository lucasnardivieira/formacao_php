<?php

$idade = 16;
$n_pessoas = 2;

echo "Só pode entrar se você tiver a partir de 18 anos, ou a partir de 16 acompanhado." .PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar.";
}elseif ($idade >= 16 && $n_pessoas >= 2){
    echo "Você tem $idade e está acompanhado, então pode entrar.";
}else {
    echo "Você tem $idade anos, não pode entrar.";
}

echo PHP_EOL;
echo "Adeus.";
