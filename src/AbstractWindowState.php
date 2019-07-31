<?php
namespace State;


abstract class AbstractWindowState implements WindowStateInterface
{
    /**
     * @throws IllegalStateTransitionException
     */
    public function open()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function close()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function lock()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function unlock()
    {
        throw new IllegalStateTransitionException;
    }
}
