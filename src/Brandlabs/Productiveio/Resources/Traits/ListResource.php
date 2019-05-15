<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait ListResource
{
	public function getList(
        array $requestParams = [],
        bool $aggregates = false
    )
    {
        return $this->getApiClient()
            ->getList($this->getEndpoint(), $requestParams, $aggregates);
    }
}
