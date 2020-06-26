# Companies House Laravel 5 package

[![Total Downloads](https://poser.pugx.org/trevsewell/companieshouse/downloads)](https://packagist.org/packages/trevsewell/companieshouse)
[![License](https://poser.pugx.org/trevsewell/companieshouse/license)](https://packagist.org/packages/trevsewell/companieshouse)

A laravel package to query the Companies House API.

## Install
```
composer require trevsewell/companieshouse
```

## Publish config file
```
php artisan vendor:publish
```

## Add your Companies house API key to your config (/config/companieshouse.php) or env file
```
COMPANIES_HOUSE_API_KEY=Your_api_key
```

## Usage
```
use Trevsewell\CompaniesHouse\Controllers\CompaniesHouse;
```
To use
```
$companieshouse = new CompaniesHouse;
$companieshouse->get('search/companies?q=KudosLabs');
```

Or, you can use the facade
```
CompaniesHouse::get('search/companies?q=KudosLabs');
```

[Full API reference](https://developer.companieshouse.gov.uk/api/docs/)

## License

This Laravel Companies House API package is open-sourced software licensed under the [The Unlicense](https://github.com/trevsewell/companieshouse/blob/master/LICENSE).
