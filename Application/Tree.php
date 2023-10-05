<?php

namespace Liloi\Sketches\Application;

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

        $manager->add(new Method('Mini.Application.Show', '\Liloi\Mini\Application\API\Show\Method::execute'));

        self::$manager = $manager;
    }

    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->getResponse();
    }
}