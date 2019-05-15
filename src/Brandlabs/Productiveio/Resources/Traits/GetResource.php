<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait GetResource
{
    public function get(string $id)
    {
        return $this->getApiClient()->getResource($this->getEndpoint(), $id);
    }
}
