<?php
namespace State;

class OpenWindowState extends AbstractWindowState
{
    public function close()
    {
        return new ClosedWindowState;
    }
}