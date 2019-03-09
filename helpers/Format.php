<?php

namespace Helpers;

class Format
{
    function currencyToIso(string $value)
    {
        $arrayValue  = explode(',',$value);
        return  (int)$arrayValue[0] ."." . (int)$arrayValue[1];
    }
}