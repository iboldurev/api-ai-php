<?php

namespace ApiAi;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseHandler.
 */
trait ResponseHandler
{
    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public function decodeResponse(ResponseInterface $response)
    {
        return json_decode((string) $response->getBody(), true);
    }
}
