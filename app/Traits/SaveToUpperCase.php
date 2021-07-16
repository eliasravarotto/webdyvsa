<?php

namespace App\Traits;

trait SaveToUpperCase
{
    public function setAttribute($key, $value)
    {
        parent::setAttribute($key, $value);

        if (is_string($value))
            $this->attributes[$key] = trim(strtoupper($value));
        
    }

}