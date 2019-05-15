<?php

namespace Brandlabs\Productiveio\Resources\Contracts;

interface GetList
{
	public function getList(
        array $requestParams = [],
        bool $aggregates = false
    );
}
