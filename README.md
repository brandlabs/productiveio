# brandlabs/productiveio
---------------------------------

This package provides convenient access to the Productive.io REST API from applications written in PHP.

## Development Setup

```
$ git clone [TBD]
$ cd productiveio-php
$ composer install
```

## Installation
while in the root folder of the project where you want to use this library, do the following:
```
$ composer config repositories.capsnplugs-spire-systems git git@gitlab.brandlabs.net:caps-n-plugs/spire-systems.git
$ composer require capsnplugs/spire-systems [stable-version]
```

## Code Example

```PHP
<?php
		...

		use Brandlabs\Productiveio\ApiClient;
		use Brandlabs\Productiveio\Resources\Inventory;

		$company = "spire_company_name";
		$baseApiUrl = "spire server url";
		$username = "spire_username";
		$password = "spire_password";
		$timeout = 60.0;

		$apiClient = new ApiClient($company, $baseApiUrl, $username, $password, $timeout);

		$spireInventory = new Inventory($apiClient);

		// gets an inventory item resource
		$spireInventory->get(id);

		//updates inventory item
		$salesPayload = [
			// fill in sales item properties
		];
		$spireInventory->update(id, $salesPayload);

		//creates inventory item
		$salesPayload = [
			// fill in sales item properties
		];
		$spireInventory->create($salesPayload);

		// deletes inventory item
		$spireInventory->delete($id);

		// get list
		$start = 0;
		$limit = 100;
		$requestParams = []
		$spireInventory->getCollection($start, $limit, $requestParams);
```

## API references
- https://208.86.251.7:10880/doc/api/ or `server_address:port/docs/api`


## Tests
```
$ composer test
```

### Code analysis tools

***lint/checkstyle*** with phpcs:

```
$ composer phpcs
```

***mess detector*** with phpmd:

```
$ composer phpmd
```

***copy & paste detector*** with phpcpd:

```
$ composer phpcpd
```

***phpunit, lint, mess detector*** in one command:

```
$ composer test
```

## License

