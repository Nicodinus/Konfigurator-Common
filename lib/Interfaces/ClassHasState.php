<?php


namespace Konfigurator\Common\Interfaces;


use Konfigurator\Common\Enums\StateEnum;

interface ClassHasState
{
    /**
     * @return StateEnum
     */
    public function getState(): StateEnum;
}