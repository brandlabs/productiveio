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
     * Resource API endpoint path
     *
     * @var string
     */
	private $endpoint;

    /**
     * BaseResource constructor
     *
     * @param ApiClient $apiClient for making API calls
     * @param string $endpoint Resource API endpoint path
     */
    public function __construct(ApiClient $apiClient, string $endpoint)
    {
        $this->apiClient = $apiClient;
        $this->endpoint = $endpoint;
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

    /**
     * Resource's API endpoint path
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
