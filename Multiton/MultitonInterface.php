<?php

namespace Multiton;

Interface MultitonInterface
{
    public static function getInstance(string $name): MultitonInterface ;
}


?>