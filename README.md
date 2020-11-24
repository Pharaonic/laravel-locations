<p align="center"><a href="https://pharaonic.io" target="_blank"><img src="https://raw.githubusercontent.com/Pharaonic/logos/main/locations.jpg" width="470"></a></p>

<p align="center">
<a href="https://github.com/Pharaonic/laravel-locations" target="_blank"><img src="http://img.shields.io/badge/source-pharaonic/laravel--locations-blue.svg?style=flat-square" alt="Source"></a> <a href="https://packagist.org/packages/pharaonic/laravel-locations" target="_blank"><img src="https://img.shields.io/packagist/v/pharaonic/laravel-locations?style=flat-square" alt="Packagist Version"></a><br>
<a href="https://laravel.com" target="_blank"><img src="https://img.shields.io/badge/Laravel->=6.0-red.svg?style=flat-square" alt="Laravel"></a> <img src="https://img.shields.io/packagist/dt/pharaonic/laravel-locations?style=flat-square" alt="Packagist Downloads"> <img src="http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Source">
</p>


#### Locatable provides a quick and easy methods.


## Install

Install the latest version using [Composer](https://getcomposer.org/):

```bash
$ composer require pharaonic/laravel-locations
```



## Supported Languages

- Arabic
- English




## Usage

- [TimeZone](#TZ)
- [Continents](#Continents)
- [Countries](#Countries)
- [States](#States)



<a name="TZ"></a>

#### TimeZone
###### function getTimeZones(?string $lang = null)

```php
$timezones = getTimeZones();

/**
*	...
*	+"Europe/Athens": "(UTC+02:00) Athens"
*	+"Europe/Bucharest": "(UTC+02:00) Bucharest"
*	+"Africa/Cairo": "(UTC+02:00) Cairo"
*	+"Africa/Harare": "(UTC+02:00) Harare"
*	+"Europe/Helsinki": "(UTC+02:00) Kyiv"
*	+"Europe/Istanbul": "(UTC+02:00) Istanbul"
*	+"Asia/Jerusalem": "(UTC+02:00) Jerusalem"
*	...
*/
```





<a name="Continents"></a>

#### Continents
###### function getContinents(?string $lang = null)
###### function getContinent(string $code, ?string $lang = null)

```php
$continents = getContinents();
/**
*	+"AF": "Africa"
*	+"AN": "Antarctica"
*	+"AS": "Asia"
*	...
*/

echo getContinent('AF', 'ar'); // أفريقيا
```





<a name="Countries"></a>

#### Countries
###### function getCountriesNames(?string $lang = null)
###### function function getCountries(?string $lang = null)
###### function getCountry(string $code, ?string $lang = null)

```php
$countriesNames = getCountriesNames();
/**
*	+"AF": "Afghanistan"
*	+"AX": "Aland Islands"
*	+"AL": "Albania"
*	+"DZ": "Algeria"
*	+"AS": "American Samoa"
*	...
*/

$countries = getCountries();
/**
*	...
*	    +"EG": array:9 [▼
*	    	"iso" => "EGY"
*	    	"name" => "Egypt"
*	    	"native" => "مصر‎"
*	    	"currency" => "EGP"
*	    	"phone" => "20"
*	    	"timezone" => "Africa/Cairo"
*	    	"languages" => array:1 [▼
*	    		0 => "AR"
*	    	]
*	    	"continent" => "AF"
*	    	"capital" => "Cairo"
*	    ]
*	...
*/

$country =  getCountry('EG', 'ar'); // Same result with "name" => "مصر"
```




<a name="States"></a>

#### States
###### function getStates(?string $country = null)
###### function getState(string $code, ?string $country = null)
```php
$states = getStates('EG');
/**
*	+"ALX": "Alexandria Governorate"
*	+"ASN": "Aswan Governorate"
*	+"AST": "Asyut Governorate"
*	.....
*/

echo getStates('ALX', 'EG'); // Alexandria Governorate
```




## License

[MIT license](LICENSE.md)