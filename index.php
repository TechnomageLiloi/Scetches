<?php

define('ROOT_DIR', __DIR__);

session_start();
include_once __DIR__ . '/vendor/autoload.php';

use Liloi\Config\Pool;
echo (new Liloi\Sketches\Sketch\Application(Pool::getSingleton()))->compile();