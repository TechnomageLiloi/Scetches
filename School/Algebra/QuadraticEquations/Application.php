<?php

namespace Liloi\Sketches\School\Algebra\QuadraticEquations;

use Liloi\API\Method;
use Liloi\Config\Pool;
use Liloi\Sketches\Sketch\Application as ConceptualApplication;
use Liloi\Sketches\Sketch\Tree;

/**
 * @inheritDoc
 */
class Application extends ConceptualApplication
{
    /**
     * @inheritDoc
     */
    public function compile(): string
    {
        if(isset($_POST['method']))
        {
            Tree::getManager()->add(new Method('Sketches.School.Algebra.QuadraticEquations.Solve', '\Liloi\Sketches\School\Algebra\QuadraticEquations\Solve::execute'));
            return Tree::execute();
        }

        return $this->render(__DIR__ . '/Layout.tpl', [

        ]);
    }
}