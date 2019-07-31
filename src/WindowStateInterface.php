<?php
namespace State;

interface WindowStateInterface
{
    public function open(Window $window);
    public function close(Window $window);
    public function lock(Window $window);
    public function unlock(Window $window);
}