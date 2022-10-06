<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace /*preencher aqui namespace*/;

//essa é uma classe filha, necessatará ter acesso as informações declaradas da mae AbstractPageObject
class SiteMapPageObject
{
    //esse variavel $hrel, devera receber o valor capturado da tag "a" -> attr("href")
    public function getSiteMap($href)
    {
       //aqui será configurada a requisição que irá capturar o segundo html
    }
}