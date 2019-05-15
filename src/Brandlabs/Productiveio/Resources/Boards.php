<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;
use Brandlabs\Productiveio\Resources\Contracts\GetList;
use Brandlabs\Productiveio\Resources\Traits\ListResource;

class Boards extends BaseCrudResource implements GetList
{
    use ListResource;

    const RESOURCE_PATH = '/boards';

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
