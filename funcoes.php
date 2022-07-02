<?php

function exibeMensagem($mensagem) 
{
  echo $mensagem . '<br>';
}

function sacar(array $conta, float $valor): array 
{
  if ($valor > $conta['saldo']) {
    exibeMensagem("Sr(a). ".$conta['titular'].", você não pode sacar!");
  } else {
    $conta['saldo'] -= $valor;
  }

  return $conta;
}

function depositar(array $conta, float $valor): array 
{
  if ($valor > 0) {
    $conta['saldo'] += $valor;
  } else {
    exibeMensagem("Sr(a). ".$conta['titular'].", não é possível depositar um valor nulo ou negativo!");
  }

  return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{  
  $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular. Saldo: $saldo</li>";
}