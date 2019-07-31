<?php
namespace State;

class OpenWindowState extends AbstractWindowState
{
    public function close(Window $window)
    {
        return new ClosedWindowState;
    }
}