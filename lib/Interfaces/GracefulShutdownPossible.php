<?php


namespace Konfigurator\Common\Interfaces;


interface GracefulShutdownPossible
{
    /**
     * @return void
     */
    public function shutdown(): void;

    /**
     * @return bool
     */
    public function isShutdownPending(): bool;
}