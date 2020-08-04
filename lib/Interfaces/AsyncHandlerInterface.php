<?php


namespace Konfigurator\Common\Interfaces;


use Amp\Promise;

interface AsyncHandlerInterface
{
    /**
     * @return Promise
     */
    public function handle(): Promise;
}