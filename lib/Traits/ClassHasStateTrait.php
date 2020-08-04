<?php


namespace Konfigurator\Common\Traits;


use Konfigurator\Common\Enums\StateEnum;

trait ClassHasStateTrait
{
    /** @var StateEnum */
    private StateEnum $state;

    /**
     * @return StateEnum
     */
    public function getState(): StateEnum
    {
        if (empty($this->state)) {
            $this->state = StateEnum::UNDEFINED();
        }

        return $this->state;
    }

    /**
     * @param StateEnum $state
     * @return static
     */
    protected function setState(StateEnum $state)
    {
        $this->state = $state;
        return $this;
    }
}