<?php

namespace Liloi\Mini\Math\Algorithms\QuadraticEquations\API\Solve;

use Liloi\API\Response;
use Liloi\Mini\Math\Algorithms\QuadraticEquations\API\Method as SuperMethod;
use Liloi\MathAlg\Simple\QuadraticEquations\Algorithm;
use Liloi\MathAlg\Simple\QuadraticEquations\Solution;
use Liloi\MathAlg\Simple\QuadraticEquations\Exception;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $solution = Algorithm::solve(
            self::getParameter('a'),
            self::getParameter('b'),
            self::getParameter('c')
        );

        $response = new Response();

        if($solution->areNoRoots())
        {
            $response->set('render', static::render(__DIR__ . '/NoRoots.tpl'));
        }
        else
        {
            $response->set('render', static::render(__DIR__ . '/Template.tpl', [
                'x1' => $solution->getFirstRoot(),
                'x2' => $solution->getSecondRoot()
            ]));
        }

        return $response;
    }
}