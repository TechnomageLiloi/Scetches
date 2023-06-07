<?php

$fnDumper = 'Application.phar';

try
{
    if(file_exists($fnDumper)) {
        unlink($fnDumper);
    }

    $oPhar = new Phar($fnDumper);
    $oPhar->startBuffering();

    $oPhar->setStub(Phar::createDefaultStub('index.php'));
    $oPhar->buildFromDirectory(__DIR__ . '/Application');

    $oPhar->stopBuffering();

    chmod(__DIR__ . '/' . $fnDumper, 0777);

} catch (Exception $e) {
    echo $e->getMessage();
}