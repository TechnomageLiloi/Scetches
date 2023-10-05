<?php

namespace Liloi\Sketches\Application\Engine;

use Liloi\Config\Pool;
use Liloi\Mini\Application\API\Tree;
use Rune\Application\Conceptual as ConceptualApplication;

/**
 * @inheritDoc
 */
class Application extends ConceptualApplication
{
    /**
     * Configuration data ppol.
     *
     * @var Pool
     */
    private Pool $config;

    /**
     * Application constructor.
     *
     * @param Pool $config Configuration data object.
     */
    public function __construct(Pool $config)
    {
        $this->config = $config;
    }

    /**
     * Gets configuration data object.
     *
     * @return Pool Configuration data object.
     */
    public function getConfig(): Pool
    {
        return $this->config;
    }

    /**
     * @inheritDoc
     */
    public function compile(): string
    {
        if(isset($_POST['method']))
        {
            Tree::collect();
            return Tree::execute();
        }
        return $this->render(__DIR__ . '/Layout.tpl', [

        ]);
    }
}