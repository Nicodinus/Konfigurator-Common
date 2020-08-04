<?php


namespace Konfigurator\Common\Interfaces;


use Psr\Log\LoggerInterface;

interface ClassHasLogger
{
    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface;

    /**
     * @param LoggerInterface $logger
     * @return static
     */
    public function setLogger(LoggerInterface $logger);
}