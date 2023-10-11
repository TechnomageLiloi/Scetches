<?php

namespace Liloi\Sketches\Sketch;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    static ?Manager $manager = null;

    public static function getManager(): Manager
    {
        if(self::$manager === null)
        {
            self::$manager = new Manager();
        }

        return self::$manager;
    }

    public static function collect(): void
    {
        $manager = new Manager();

        $manager->add(new Method('Sketches.Menu', '\Liloi\Sketches\Sketch\Menu::execute'));

        self::$manager = $manager;
    }

    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->getResponse();
    }
}