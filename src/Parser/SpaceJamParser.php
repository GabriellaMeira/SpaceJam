<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace /*preencher aqui namespace*/;

//essa é uma classe filha, necessatará ter acesso as informações declaradas da mae AbstractParser
class SpaceJamParser
{
    public function getHref()
    {
        //aqui devera passar o caminho para a captura do href da primeira pagina (dica -> filterXPath)
    }
}