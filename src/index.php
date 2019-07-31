<?php
require __DIR__ . "/../vendor/autoload.php";

$window = new \State\Window(new \State\OpenWindowState);
var_dump($window->isOpen());
$window->close();
var_dump($window->isClosed());
$window->lock();
var_dump($window->isLocked());