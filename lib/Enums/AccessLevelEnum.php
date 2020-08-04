<?php


namespace Konfigurator\Common\Enums;


/**
 * Class AccessLevelEnum
 * @package Konfigurator\Common\Enums
 * @method static static GUEST()
 */
abstract class AccessLevelEnum extends StateEnum
{
    protected const GUEST = 'guest';

    /**
     * @return int
     */
    public abstract function getLvl(): int;
}