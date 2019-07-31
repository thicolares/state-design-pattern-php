<?php
namespace State;

interface WindowStateInterface
{
    public function open();
    public function close();
    public function lock();
    public function unlock();
}