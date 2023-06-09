<?php

namespace Liloi\Mini\Math\Algorithms\QuadraticEquations\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    static ?Manager $manager = null;

    public static function collect(): void
    {
        $manager = new Manager();

        $manager->add(new Method('Mini.Application.Show', '\Liloi\Mini\Math\Algorithms\QuadraticEquations\API\Show\Method::execute'));
        $manager->add(new Method('Mini.Application.Solve', '\Liloi\Mini\Math\Algorithms\QuadraticEquations\API\Solve\Method::execute'));

        self::$manager = $manager;
    }

    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->getResponse();
    }
}