<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait UpdateResource
{
    /**
     * Updates a resource
     *
     * @param string $id
     * @param array $payload
     * @return array
     */
    public function update(string $id, array $payload = [])
    {
        return $this->getApiClient()
            ->updateResource($this->getEndpoint(), $id, $payload);
    }
}
