<?php

namespace Brandlabs\Productiveio\Resources;

use Brandlabs\Productiveio\ApiClient;

/**
 * Productiveio Booking resource
 *
 * @package Brandlabs\Productiveio\Resources
 */
class Booking extends BaseCrudResource
{
    const RESOURCE_PATH = '/api/v2/bookings';

    /**
     * Booking resource constructor
     *
     * @param ApiClient $apiClient API client for accessing API endpoints
     */
    public function __construct(ApiClient $apiClient)
    {
        parent::__construct($apiClient, self::RESOURCE_PATH);
    }
}
