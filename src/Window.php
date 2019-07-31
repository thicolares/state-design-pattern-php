<?php
namespace State;

class Window
{
    /**
     * @var WindowStateInterface
     */
    private $state;

    /**
     * @var boolean
     */
    public $hasLock;

    public function __construct($hasLock)
    {
        $this->setState(new OpenWindowState);
        $this->hasLock = $hasLock;
    }

    public function open(): void
    {
        $this->setState($this->state->open($this));
    }

    public function close(): void
    {
        $this->setState($this->state->close($this));
    }

    public function lock(): void
    {
        $this->setState($this->state->lock($this));
    }

    public function unlock(): void
    {
        $this->setState($this->state->unlock($this));
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->state instanceof OpenWindowState;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->state instanceof ClosedWindowState;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->state instanceof LockedWindowState;
    }


    public function setState(WindowStateInterface $state)
    {
        $this->state = $state;
    }
}
