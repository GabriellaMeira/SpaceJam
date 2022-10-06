<?php

//colocar o namespace que está no seu composer.json (adicionar o seu namespace)
namespace /*preencher aqui namespace*/;

use Forseti\Logger\Logger;
use Psr\Log\LoggerTrait;

//este diretorio nao precisa de nenhuma modificação
trait ForsetiLoggerTrait
{
    use LoggerTrait;

    public function log($level, $message, array $context = array())
    {
        return (new Logger(get_class($this)))->log($level, $message, $context);
    }
}