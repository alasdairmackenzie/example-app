<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Schemas\UserSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Example;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class UserParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            Parameter::query()
                ->name('status')
                ->description('Status of the user account')
                ->required(false)
                ->schema(Schema::string()->default("inactive")),

            Parameter::query()
                ->name('name')
                ->description('The persons name')
                ->required(false)
                ->schema(Schema::string()),

            Parameter::query()
                ->name('email')
                ->description('The users email')
                ->required(false)
                ->schema(Schema::string()->format("user@domain")),
        ];
    }
}
