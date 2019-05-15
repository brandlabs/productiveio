<?php

namespace Brandlabs\Productiveio\Resources\Contracts;

interface Update
{
	public function update(string $id, array $payload = []);
}
