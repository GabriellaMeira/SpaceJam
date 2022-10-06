<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace /*preencher aqui namespace*/;

//essa classe precisara importar as inforamções nelas (maioria se trata de configurações padroes da Forseti)
//o PHP Storm identifica em laranja tudo que não foi importado, será mandado uma print para exemplo
abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client) ? $client:GuzzleClientFactory::getInstance();
    }

    public function request($method, $url, array $params = [])
    {
        try {
            return $this->client->request($method, $url, $params);
        } catch (\Exception $e){
            $this->error($e->getMessage());
            return null;
        }
    }
}