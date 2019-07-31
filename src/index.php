<?php
require __DIR__ . "/../vendor/autoload.php";

$hasLock = false;
$window = new \State\Window($hasLock);
var_dump($window->isOpen());
$window->close();
var_dump($window->isClosed());
$window->lock();
var_dump($window->isLocked());