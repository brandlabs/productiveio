# Productive.io PHP SDK
---------------------------------

This package provides convenient access to the Productive.io REST API for applications written in PHP.

## Development Setup

```
$ git clone git@github.com:brandlabs/productiveio.git
$ cd productive-io
$ composer install
```

## Installation
while in the root folder of the project where you want to use this library, do the following:
```
$ composer config repositories.productiveio git git@github.com:brandlabs/productiveio.git
$ composer require brandlabs/productiveio [stable-version]
```

## Code Example

```PHP
<?php
		...

		use Brandlabs\Productiveio\ApiClient;
		use Brandlabs\Productiveio\Resources\TaskLists;

		$authToken = '[Productive.io API auth token]';
    $organisationId = '[productiveio organisation id]';
		$timeout = 60.0; // optional, defaults to 60.0 seconds

		$apiClient = new ApiClient($company, $baseApiUrl, $username, $password, $timeout);

		$taskListResource = new TaskLists($apiClient);

		// gets a Task List resource item
		$id = '{set to task list id}';
		$taskListResource->get($id);

		//updates Task List item
		$taskListPayload = [
			// fill in Task List item properties
		];
		$taskListResource->update($id, $taskListPayload);

		//creates task list item
		$taskListPayload = [
			// fill in Task List item properties
		];
		$taskListResource->create($taskListPayload);

		// deletes Task List item
		$taskListResource->delete($id);

		// get list
		$requestParams = [
			'page[number]' => 1
		]
		$taskListResource->getList($requestParams);

		// get aggregate
		$aggregate = true;
		$taskListResource->getList($requestParams, $aggregate);
```

## API references
- `https://developer.productive.io` for more details on each Resource list request parameters.


## Tests
```
$ composer test
```

## License

