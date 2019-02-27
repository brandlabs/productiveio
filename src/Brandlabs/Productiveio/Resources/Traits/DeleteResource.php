<?php

namespace Brandlabs\Productiveio\Resources\Traits;

trait DeleteResource
{

	/**
	 * Deletes a resource
	 *
	 * @param string $id
	 * @return void
	 */
    public function delete(string $id);
    {
        return $this->getApiClient()
            ->deleteResource($this->getEndpoint(),  $id);
    }
}
