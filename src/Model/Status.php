<?php

namespace ApiAi\Model;

/**
 * Class Status.
 */
class Status extends Base
{
    /**
     * @return int
     */
    public function getCode()
    {
        return parent::get('code');
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return parent::get('errorType');
    }

    /**
     * @return string
     */
    public function getErrorId()
    {
        return parent::get('errorId');
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return parent::get('errorDetails');
    }
}
