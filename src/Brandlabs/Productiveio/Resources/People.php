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

class People extends BaseResource implements Create, Fetch, Update
{
    use CreateResource, GetResource, ListResource, UpdateResource;

    const RESOURCE_PATH = '/people';

    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
