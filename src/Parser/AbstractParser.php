<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace /*preencher aqui namespace*/;

//essa classe precisara importar as inforamções nelas (maioria se trata de configurações padroes da Forseti)
abstract class AbstractParser
{
    protected $crawler;

    public function __construct($html)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }
}