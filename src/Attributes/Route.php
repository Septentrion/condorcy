<?php

namespace App\Attributes;

use \Attribute;

#[\Attribute(Attribute::TARGET_METHOD)]
class Route {

    public function __construct(string $url, ?string $method = null, ?array $constraints = null )
    {
    }

}
