<?php
declare(strict_types=1);

namespace Willow\Controllers\Authenticate;

use Slim\Interfaces\RouteCollectorProxyInterface;
use Willow\Controllers\IController;

class AuthenticateController implements IController
{
    public function register(RouteCollectorProxyInterface $group): void
    {
        $group->post('/authenticate', AuthenticatePostAction::class)
            ->add(AuthenticatePostValidator::class);
    }
}
