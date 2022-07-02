<?php

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ],
  '123.456.489-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes['123.258.852-12'] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo "$cpf é o cpf do(a) ".$conta['titular']." e seu saldo é de "."R$ ".$conta['saldo'].PHP_EOL;
}