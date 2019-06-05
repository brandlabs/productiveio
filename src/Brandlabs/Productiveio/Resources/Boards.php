<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;
use Brandlabs\Productiveio\BaseResource;
use Brandlabs\Productiveio\Resources\Contracts\Create;
use Brandlabs\Productiveio\Resources\Contracts\Fetch;
use Brandlabs\Productiveio\Resources\Contracts\Update;
use Brandlabs\Productiveio\Resources\Traits\CreateResource;
use Brandlabs\Productiveio\Resources\Traits\GetResource;
use Brandlabs\Productiveio\Resources\Traits\ListResource;
use Brandlabs\Productiveio\Resources\Traits\UpdateResource;

class Boards extends BaseResource implements Create, Fetch, Update
{
    use CreateResource, GetResource, ListResource, UpdateResource;

    const RESOURCE_PATH = '/boards';

    /**
     * Creates an instance of Board resource
     *
     * @param \Brandlabs\Productiveio\ApiClient $apiClient Client instance for making Resource endpoint calls
     */
    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
