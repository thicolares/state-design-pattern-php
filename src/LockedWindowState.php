<?php
namespace State;


class LockedWindowState extends AbstractWindowState
{
    public function unlock(Window $window)
    {
        return new ClosedWindowState;
    }
}