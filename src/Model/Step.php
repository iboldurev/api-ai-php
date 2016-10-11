<?php

namespace ApiAi\Model;

/**
 * Interface Step.
 */
interface Step
{
    const TYPE_ACTION = 'action';
    const TYPE_SPEECH = 'speech';

    /**
     * @return string
     */
    public function getType();
}
