<?php 
require __DIR__.'/vendor/autoload.php';
//DEPENDENCIA 
use \App\Awesome\Economia;

// INSTACIA DE CLASSE API 
$obEconomia = new Economia;

/*

// Verifica Argumentos 
if(!isset($argv[2])){
 die ('É ncessário enviar duas moedas');
}

// Moedas 

$moedaA = $argv[1];
$moedaB = $argv[2];

*/ 

$moedaA = $_POST['moedaA'] ?? 'BTC';
$moedaB = $_POST['moedaB'] ?? 'BRL';


//EXECUTA A REQU 
$dadosCotacao = $obEconomia->consultarCotacao($moedaA, $moedaB);

//AJUSTA O RESPONSE 
$dadosCotacao = $dadosCotacao[$moedaA.$moedaB] ?? [];

$return = $dadosCotacao['bid'] ?? 'Sem par';

// imprime o retorno da cotaçao

//echo 'Moedas: '.$moedaA.' -> '.$moedaB."\n";
echo  ($dadosCotacao['bid'] ?? 'Recarregue')."\n";
