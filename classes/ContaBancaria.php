<?php

declare(strict_types=1);

class ContaBancaria {

  /**
   * @var string
   */
   private $banco;
     /**
   * @var string
   */
   private $nomeTitular;
     /**
   * @var string
   */
   private $numeroAgencia;
     /**
   * @var string
   */
   private $numeroConta;
     /**
   * @var float
   */
   private $saldo;

   public function __construct(
     string $banco, 
     string $nomeTitular, 
     string $numeroAgencia, 
     string $numeroConta, 
     float $saldo)
   {
       $this->banco = $banco;
       $this->nomeTitular = $nomeTitular;
       $this->numeroAgencia = $numeroAgencia;
       $this->numeroConta = $numeroConta;
       $this->saldo = $saldo;
   }

   public function obterSaldo(): string {

     return 'Seu saldo atual é R$ ' . $this->saldo;
   }

   public function depositar(float $valor): string{
   
        $this->saldo += $valor;
        return 'Depósito de R$ '. $valor . ' realizado! ';
   }


   public function sacar(float $valor): string{
      $this->saldo -= $valor;
      return 'Saque de R$ '. $valor . ' realizado! ';
   }


}

$conta = new ContaBancaria(

    'Banco do Brasil',
    'Marcello Albuquerque',
    '8244',
    '57354-10',
    0.00
);

var_dump($conta);

echo $conta->obterSaldo();

$conta-> depositar(300.00);

echo PHP_EOL;
echo "\n";

echo $conta->obterSaldo();

echo PHP_EOL;
echo "\n";

echo $conta->sacar(150.00);

echo PHP_EOL;
echo "\n";

echo $conta->obterSaldo();





