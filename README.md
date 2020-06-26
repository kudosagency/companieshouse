# Companies House Laravel package

A laravel package to query the Companies House API.

## Install
```
composer require kudosagency/companieshouse
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
use kudosagency\CompaniesHouse\Controllers\CompaniesHouse;
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
