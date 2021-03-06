<?php

require_once 'funcoes.php';

$contasCorrentes = [
  '123.456.489-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ],
  '123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 100
  ]
];

$contasCorrentes['123.456.489-11'] = sacar($contasCorrentes['123.456.489-11'], 500);

$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], 200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);

unset($contasCorrentes['123.256.789-12']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Contas correntes:</h1>
  
  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <?= $conta['titular']; ?> - <?= $cpf; ?>
      </dt>
      <dd>
        Saldo: <?= $conta['saldo']; ?>
      </dd>
    <?php } ?>
  </dl>
</body>
</html>