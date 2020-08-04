<?php


namespace Konfigurator\Common\Traits;


use Psr\Log\LoggerInterface;

trait ClassHasLoggerTrait
{
    /** @var LoggerInterface */
    private LoggerInterface $logger;

    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     * @return static
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
        return $this;
    }
}