<?php

/**
 * Get Continents List
 */
function getTimeZones(?string $lang = null)
{
    $lang = strtolower($lang ?? substr(app()->getLocale(), 0, 2));


    if (!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang)) $lang = 'en';

    if ($lang == 'en') {
        $timezones = require __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'timezone.php';
    } else {
        $timezones = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'timezone.php';
    }

    return (object)$timezones;
}

/**
 * Get Continents List
 */
function getContinents(?string $lang = null)
{
    $lang = strtolower($lang ?? substr(app()->getLocale(), 0, 2));

    if (!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang)) $lang = 'en';

    if ($lang == 'en') {
        $continents = require __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'continent.php';
    } else {
        $continents = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'continent.php';
    }

    return (object)$continents;
}

/**
 * Get Continents List
 */
function getContinent(string $code, ?string $lang = null)
{
    $continents = getContinents($lang);
    if (!isset($continents->{$code})) return null;

    return $continents->{$code};
}


/**
 * Get Currencies List
 */
function getCurrencies()
{
    $currencies = require __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'currency.php';

    return (object)$currencies;
}

/**
 * Get Countries List
 */
function getCountries(?string $lang = null)
{
    $lang = strtolower($lang ?? substr(app()->getLocale(), 0, 2));
    if (!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang)) $lang = 'en';

    $countries = require __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'country.php';

    if ($lang != 'en') {
        $list = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'country.php';
        $nationalities = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'nationality.php';

        foreach ($countries as $code => &$info) {
            $info['name'] = $list[$code];
            $info['nationality'] = $nationalities[$code];
        }
    }

    return (object)$countries;
}

/**
 * Get Countries Names List
 */
function getCountriesNames(?string $lang = null)
{
    $lang = strtolower($lang ?? substr(app()->getLocale(), 0, 2));
    if (!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang)) $lang = 'en';

    $countries = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'country.php';

    return (object)$countries;
}

/**
 * Get Country List
 */
function getCountry(string $code, ?string $lang = null)
{
    $countries = getCountries($lang);
    if (!isset($countries->{$code})) return null;

    return (object)$countries->{$code};
}

/**
 * Get States List
 */
function getStates(?string $country = null, ?string $lang = null)
{
    $lang = strtolower($lang ?? substr(app()->getLocale(), 0, 2));

    if (!is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang)) {
        $lang = 'en';
    }

    $states = require __DIR__ . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . 'states.php';

    if ($country) {
        if (!isset($states[$country])) return null;
        $states = $states[$country];
    }

    return (object)$states;
}

/**
 * Get State List
 */
function getState(string $code, ?string $country = null, ?string $lang = null)
{
    $states = getStates($country, $lang);
    if (!isset($states->{$code})) return null;

    return $states->{$code};
}
