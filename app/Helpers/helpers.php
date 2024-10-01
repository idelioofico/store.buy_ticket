<?php

use Illuminate\Support\Facades\Date;

function formatCurrency($amount)
{
    $locale = 'pt_MZ';
    $formatter = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($amount, 'MZN');
}


function formatDate($dateString, $format)
{
    // Create a DateTime object
    $date = new \DateTime($dateString);

    // Set the locale to Portuguese
    // $locale = 'pt_MZ';

    // Create an IntlDateFormatter object
    // $formatter = new \IntlDateFormatter(
    //     $locale,
    //     \IntlDateFormatter::NONE,
    //     \IntlDateFormatter::SHORT,
    //     'Africa/Maputo',
    //     \IntlDateFormatter::GREGORIAN,
    //     $format // Custom pattern for the date format
    // );

    // Format the date
    // return $formatter->format($date);
    $timezone = new \DateTimeZone('Africa/Maputo');
    $date = new \DateTime($dateString, $timezone);
    return $date->format($format);
}
