<?php

$data = new DateTime();
//var_dump($data);

/**
 *  P -> representa de período: vem antes de dia, mês, ano e semana
 *  Y
 *  M
 *  D
 *  W
 * 
 *  T-> representação de tempo: vem antes de hora, minuto e segundo
 * 
 *  H
 *  M
 *  S
 * 
 */

//$intervalo = new DateInterval('PT5M'); // intevalo de tempo de 5 minutos
$intervalo = new DateInterval('P5Y10M5DT10H50M10S');  //P5Y10M5DT10H50M10S
$data->sub($intervalo);  //add adicionar intervalo de 5 min ou sub para subtrair

var_dump($data);