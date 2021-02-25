<?php

namespace App\OpenApi\SecuritySchemes;

use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;
use Vyuldashev\LaravelOpenApi\Factories\SecuritySchemeFactory;

class BasicSecurityScheme extends SecuritySchemeFactory
{
    public function build(): SecurityScheme
    {
        return SecurityScheme::create('Basic')
            ->type(SecurityScheme::TYPE_HTTP)
            ->scheme('bearer')
            ->description('You must provide your bearer token with every request that you make to the API. To do this, set an HTTP Authorization header on your request that consists of the prefix Bearer and the token.<br/>
            To obtain a bearer token, please speak to your account manager.')
            ->bearerFormat('JWT');
    }
}
