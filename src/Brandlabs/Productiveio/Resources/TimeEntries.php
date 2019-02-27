<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;

class TimeEntries extends BaseCrudResource
{
    const RESOURCE_PATH = '/api/v2/time_entries';

    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
