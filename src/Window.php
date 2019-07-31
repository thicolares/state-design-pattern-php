<?php
namespace State;

class Window
{
    /**
     * @var WindowStateInterface
     */
    private $state;

    public function __construct(WindowStateInterface $state)
    {
        $this->setState($state);
    }

    public function open(): void
    {
        $this->setState($this->state->open());
    }

    public function close(): void
    {
        $this->setState($this->state->close());
    }

    public function lock(): void
    {
        $this->setState($this->state->lock());
    }

    public function unlock(): void
    {
        $this->setState($this->state->unlock());
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
