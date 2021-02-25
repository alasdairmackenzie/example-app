<?php

namespace App\OpenApi\Extensions;

use Vyuldashev\LaravelOpenApi\Factories\ExtensionFactory;

class ExtraExtensionFactory extends ExtensionFactory
{
    public function key(): string
    {
        return 'x-logo';
    }

    public function value()
    {
        return [
            'url' => 'https://static.designmynight.com/uploads/2017/01/DesignMyNight-Logo.png',
            'altText' => 'DesignMyNight',
        ];
    }
}
