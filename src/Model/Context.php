<?php

namespace ApiAi\Model;

/**
 * Class Context.
 */
class Context extends Base
{
    /**
     * @return string
     */
    public function getName()
    {
        return parent::get('name');
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return parent::get('parameters', []);
    }

    /**
     * @return int
     */
    public function getLifespan()
    {
        return parent::get('lifespan');
    }
}
