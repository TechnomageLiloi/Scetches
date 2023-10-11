<?php

namespace Liloi\Sketches\School\Algebra\QuadraticEquations;

use Liloi\API\Response;
use Liloi\Sketches\Sketch\Method as SuperMethod;
use Liloi\MathAlg\Simple\QuadraticEquations\Algorithm;
use Liloi\MathAlg\Simple\QuadraticEquations\Solution;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Solve extends SuperMethod
{
    public static function execute(): Response
    {
        $response = new Response();

        try {
            $solution = Algorithm::solve(
                self::getParameter('a'),
                self::getParameter('b'),
                self::getParameter('c')
            );

            if($solution->areNoRoots())
            {
                $response->set('render', static::render(__DIR__ . '/NoRoots.tpl'));
            }
            else
            {
                $response->set('render', static::render(__DIR__ . '/TwoRoots.tpl', [
                    'x1' => $solution->getFirstRoot(),
                    'x2' => $solution->getSecondRoot()
                ]));
            }
        }
        catch (\TypeError $e)
        {
            $response->set('render', static::render(__DIR__ . '/Error.tpl', [
                'message' => 'Argument(s) must be of type float, string given; correct, please.'
            ]));
        }
        catch (\Error|\Exception $e)
        {
            $response->set('render', static::render(__DIR__ . '/Error.tpl', [
                'message' => $e->getMessage()
            ]));
        }

        return $response;
    }
}