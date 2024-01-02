<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;
        $router->addRoute("sign/<action>","Sign:default");
        $router->withModule("Admin")
            ->addRoute('admin/<presenter>/<action>[/<id \d+>]', 'Dashboard:default');
        $router->withModule("Front")
            //->addRoute("<path>","Posts:pageSingle")
            ->addRoute("<presenter>", "Content:default")
            ->addRoute("post/<path>","Posts:postSingle")
            ->addRoute('<presenter>/<action>[/<path>][/<id>]', 'Posts:default');
        return $router;
    }
}