<?php

namespace Liloi\Sketches\Sketch;

use Liloi\API\Response;

class Menu extends Method
{
    public static function execute(): Response
    {
        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Menu.tpl'));
        return $response;
    }
}