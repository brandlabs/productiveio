<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait FetchResource
{
	public function getList(
        array $requestParams = [],
        bool $aggregates = false
    )
    {
        return $this->getApiClient()
            ->getList($this->getEndpoint(), $requestParams, $aggregates);
    }

    public function get(string $id)
    {
        return $this->getApiClient()
            ->getResource($this->getEndpoint(), $id);
    }
}
