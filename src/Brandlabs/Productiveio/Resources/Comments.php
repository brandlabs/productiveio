<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;
use Brandlabs\Productiveio\BaseResource;
use Brandlabs\Productiveio\Resources\Contracts\Crud;
use Brandlabs\Productiveio\Resources\Traits\CreateResource;
use Brandlabs\Productiveio\Resources\Traits\DeleteResource;
use Brandlabs\Productiveio\Resources\Traits\GetResource;
use Brandlabs\Productiveio\Resources\Traits\UpdateResource;

class Comments extends BaseResource implements Crud
{
    use CreateResource, DeleteResource, GetResource, UpdateResource;

    const RESOURCE_PATH = '/comments';

    /**
     * Creates an instance of Comments resource
     *
     * @param \Brandlabs\Productiveio\ApiClient $apiClient Client instance for making Resource endpoint calls
     */
    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
