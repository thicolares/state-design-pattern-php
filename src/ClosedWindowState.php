<?php
namespace State;


class ClosedWindowState extends AbstractWindowState
{
    public function open()
    {
        return new OpenWindowState;
    }

    public function lock()
    {
        return new LockedWindowState;
    }
}