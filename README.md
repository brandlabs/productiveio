# Productive.io PHP SDK

This package provides convenient access to the [Productive.io](https://www.productive.io/) REST API for applications written in PHP.

## Getting Started

```
$ git clone git@github.com:brandlabs/productiveio.git
$ cd productive-io
$ composer install
```

### Installation

while in the root folder of the project where you want to use this library, do the following:
```
$ composer config repositories.productiveio git git@github.com:brandlabs/productiveio.git
$ composer require brandlabs/productiveio [stable-version]
```

### Prerequisites

PHP 7.2+

### Tests
```
$ composer test
```

## Example

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

## Notes

### API References
- `https://developer.productive.io` for more details on each Resource list request parameters.

## Authors
* Jideobi Ofomah Benedine

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

[![alt text](./assets/images/brandlabs.png)](http://www.brandlabs.us/?utm_source=gitlab&utm_medium=technology_referral&utm_campaign=brandlabs-productiveio)
