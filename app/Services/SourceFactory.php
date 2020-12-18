<?php

namespace App\Services;

use App\Services\Sources\SourceInterface;

class SourceFactory
{

    public static function create(string $type = null) : SourceInterface
    {
        $name = 'App\Services\Sources\Source' . ucfirst($type);
        if (class_exists($name)) {  
            return new $name();  
        }
        throw new \Exception('test');
    }
    
}