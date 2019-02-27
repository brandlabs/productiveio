<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;
use Brandlabs\Productiveio\BaseResource;
use Brandlabs\Productiveio\Resources\Traits\CreateResource;
use Brandlabs\Productiveio\Resources\Traits\DeleteResource;
use Brandlabs\Productiveio\Resources\Traits\FetchResource;
use Brandlabs\Productiveio\Resources\Traits\UpdateResource;

class BaseCrudResource extends BaseResource
{
    use CreateResource, DeleteResource, FetchResource, UpdateResource;

    /**
     * Resource API endpoint path
     *
     * @var string
     */
	private $endpoint;

    public function __construct(ApiClient $apiClient, string $endpoint)
    {
        parent::__construct($apiClient);
        $this->endpoint = $endpoint;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
