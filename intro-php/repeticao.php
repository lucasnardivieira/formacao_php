<?php

$contador = 1;

while ($contador <16){
    echo "#$contador".PHP_EOL;
    $contador += 1;
}

echo PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++){
    if($contador == 14)
        continue;
    echo "#$contador".PHP_EOL;
}