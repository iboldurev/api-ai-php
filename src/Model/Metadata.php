<?php

namespace ApiAi\Model;

/**
 * Class Metadata.
 */
class Metadata extends Base
{
    /**
     * @return string
     */
    public function getIntentId()
    {
        return parent::get('intentId');
    }

    /**
     * @return string
     */
    public function getIntentName()
    {
        return parent::get('intentName');
    }

    /**
     * @return bool
     */
    public function getWebhookUsed()
    {
        return parent::get('webhookUsed');
    }
}
