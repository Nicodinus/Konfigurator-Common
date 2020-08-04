<?php


namespace Konfigurator\Common\Traits;


trait GracefulShutdownTrait
{
    /** @var bool */
    private bool $isShutdownPending;

    /**
     * @return void
     */
    public function shutdown(): void
    {
        if (!empty($this->isShutdownPending) && $this->isShutdownPending === true) {
            return;
        }

        $this->isShutdownPending = true;
    }

    /**
     * @return bool
     */
    public function isShutdownPending(): bool
    {
        if (Empty($this->isShutdownPending)) {
            $this->isShutdownPending = false;
        }

        return $this->isShutdownPending;
    }
}