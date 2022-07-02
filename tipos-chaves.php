<?php

$array = [
  1 => 'a',
  '1' => 'b', // A string tem valor numérico, dessa forma ele tenta converter para inteiro e acabou sobrescrevendo o 1
  1.5 => 'c', // convertido para 1 inteiro e sobescreveu
  true => 'd' // true é convertido para 1, já que representa a presença de valor, assim sobescrevendo
];

foreach ($array as $key => $value) {
  echo $value . PHP_EOL;
}