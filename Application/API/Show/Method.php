<?php

namespace Liloi\Mini\Application\API\Show;

use Liloi\API\Response;
use Liloi\Mini\Application\API\Method as SuperMethod;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [

        ]));

        return $response;
    }
}