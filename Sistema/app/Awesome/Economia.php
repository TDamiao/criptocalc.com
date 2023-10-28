<?php

namespace App\Awesome;
class Economia{

    /* URL BASE da api */ 

const BASE_URL = 'https://economia.awesomeapi.com.br/json' ;

/* metodo responsavel por consultar a cotaçao */ 

public function consultarCotacao ( $moedaA, $moedaB) {

return $this->get('/last/'.$moedaA.'-'.$moedaB);
    }
/* metodo responsavel por executar a api*/ 
public function get ($resource){

// endpoint
$endpoint = self::BASE_URL.$resource;

//Inicia o CURL 

$curl = curl_init();

//configuraçoes do curl

curl_setopt_array($curl, [
    CURLOPT_URL => $endpoint,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET'

]);

// RESPONSE 

$response = curl_exec($curl);

//encerra conexão do curl

curl_close($curl);

// retorna resultado em array 

return json_decode($response, true);

}

}

