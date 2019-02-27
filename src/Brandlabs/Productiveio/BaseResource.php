<?php

namespace Brandlabs\Productiveio;

/**
 * Productiveio Resource
 *
 * @package Brandlabs\Productiveio
 */
abstract class BaseResource
{

    /**
     * API client
     *
     * @var Brandlabs\Productiveio\ApiClient
     */
    private $apiClient;

    /**
     * BaseResource constructor
     *
     * @param ApiClient $apiClient for making API calls
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Return Brandlabs\Productiveio\ApiClient instance
     *
     * @return Brandlabs\Productiveio\ApiClient
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
}
