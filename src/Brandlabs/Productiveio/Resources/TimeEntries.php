<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;
use Brandlabs\Productiveio\BaseResource;
use Brandlabs\Productiveio\Resources\Contracts\Crud;
use Brandlabs\Productiveio\Resources\Contracts\GetList;
use Brandlabs\Productiveio\Resources\Traits\ListResource;
use Brandlabs\Productiveio\Resources\Traits\CreateResource;
use Brandlabs\Productiveio\Resources\Traits\DeleteResource;
use Brandlabs\Productiveio\Resources\Traits\GetResource;
use Brandlabs\Productiveio\Resources\Traits\UpdateResource;

class TimeEntries extends BaseResource implements Crud, GetList
{
    use CreateResource, DeleteResource, GetResource,ListResource, UpdateResource;

    const RESOURCE_PATH = '/time_entries';

    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
