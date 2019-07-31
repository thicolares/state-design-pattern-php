<?php
namespace State;


abstract class AbstractWindowState implements WindowStateInterface
{
    /**
     * @param Window $window
     * @throws IllegalStateTransitionException
     */
    public function open(Window $window)
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @param Window $window
     * @throws IllegalStateTransitionException
     */
    public function close(Window $window)
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @param Window $window
     * @throws IllegalStateTransitionException
     */
    public function lock(Window $window)
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @param Window $window
     * @throws IllegalStateTransitionException
     */
    public function unlock(Window $window)
    {
        throw new IllegalStateTransitionException;
    }
}
