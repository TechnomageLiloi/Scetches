<?php

define('ROOT_DIR', __DIR__ . '/../../..');

session_start();
include_once ROOT_DIR . '/vendor/autoload.php';

use Liloi\Config\Pool;
echo (new Liloi\Sketches\School\Algebra\QuadraticEquations\Application(Pool::getSingleton()))->compile();