<?php
namespace State;


class ClosedWindowState extends AbstractWindowState
{
    public function open(Window $window)
    {
        return new OpenWindowState;
    }

    public function lock(Window $window)
    {
        if ($window->hasLock === false)
        {
            throw new IllegalStateTransitionException('Can not lock a window without a lock');
        }
        return new LockedWindowState;
    }
}
