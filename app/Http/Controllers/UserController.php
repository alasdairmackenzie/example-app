<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\OpenApi\Extensions\ExtraExtension;
use App\OpenApi\Parameters\UserParameters;
use App\OpenApi\Parameters\UserResponse;
use GuzzleHttp\Psr7\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class UserController extends Controller
{
    /**
     * Create new user.
     *
     * Creates new user or returns already existing user by email.
     */
    #[OpenApi\Operation(tags: ['User'])]
    #[OpenApi\Parameters(factory: UserParameters::class)]
    #[OpenApi\Response(factory: UserResponse::class)]
    // #[OpenApi\Extension(null, "LLL", "sdf")]
    public function index(Request $request)
    {
        return ["dsfsd"];
    }
}
