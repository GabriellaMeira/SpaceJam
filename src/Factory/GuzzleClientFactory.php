<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace Forseti\SpaceJam\Factory; /*preencher aqui namespace*/;

use GuzzleHttp\Client;

//este diretorio nao precisa de nenhuma modificação
//criacao e configuração da instancia do Guzzle
class GuzzleClientFactory
{
    public static function getInstance()
    {
        $config = [
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => Urls::USER_AGENT_BASE_TEST,
            ]
        ];
        return new Client($config);
    }
}