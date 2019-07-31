<?php
namespace State;


class LockedWindowState extends AbstractWindowState
{
    public function unlock()
    {
        return new ClosedWindowState;
    }
}