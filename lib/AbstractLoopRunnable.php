<?php


namespace Konfigurator\Common;


use Amp\Delayed;
use Konfigurator\Common\Interfaces\AsyncHandlerInterface;
use Konfigurator\Common\Interfaces\ClassHasLogger;
use Konfigurator\Common\Interfaces\GracefulShutdownPossible;
use Konfigurator\Common\Interfaces\RunnableInterface;
use Konfigurator\Common\Traits\ClassHasLoggerTrait;
use Konfigurator\Common\Traits\GracefulShutdownTrait;
use function Amp\asyncCall;

abstract class AbstractLoopRunnable implements GracefulShutdownPossible, ClassHasLogger, RunnableInterface, AsyncHandlerInterface
{
    use GracefulShutdownTrait, ClassHasLoggerTrait;


    /**
     * AbstractLoopRunnable constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @return void
     */
    public function __destruct()
    {
        $this->shutdown();
    }

    /**
     * @return void
     */
    public function run(): void
    {
        asyncCall(static function (self &$self) {

            yield new Delayed(0);

            try {

                while (!$self->isShutdownPending()) {
                    yield $self->handle();
                }

            } catch (\Throwable $e) {
                $self->handleException($e, "Runnable exception");
            }

        }, $this);
    }

    /**
     * @param \Throwable $exception
     * @param string|null $message
     * @return void
     */
    protected abstract function handleException(\Throwable $exception, ?string $message = null): void;
}