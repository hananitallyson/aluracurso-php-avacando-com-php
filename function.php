<?php

function olaMundo() {
  echo "Hello, world!".PHP_EOL;
}

function olaAmigo($amigo) {
  echo "Hello $amigo!".PHP_EOL;
}

olaMundo();
olaAmigo("Hanani");

function funcao($x) {
  return $x + 2;
}

echo funcao(5);