<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait CreateResource
{
    /**
     * Creates resource
     *
     * @param  array $payload request payload
     * @return array request response body
     */
    public function create(array $payload = [])
    {
        return $this->getApiClient()
            ->createResource($this->getEndpoint(), $payload);
    }
}
