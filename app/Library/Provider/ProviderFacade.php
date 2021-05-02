<?php

namespace App\Library\Provider;

class ProviderFacade {

    public static function create($name , $url){
        return new Provider($name,$url);
    }
}
